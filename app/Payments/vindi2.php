<?php
/**
 * Modulo de cobrança cartão de crédito Gateway STONE (2016)
 * key: e3b04748-6946-4709-987e-291daab9c25a
 */

class vindi {

    public static $sFiliacaoKey = "wNEu_cFlvATkyTr-wCm1WbAMwVaZRKw2";

        //public static $sURL = "https://qasecommerce.cielo.com.br/servicos/ecommwsec.do";//teste

        public static $sURLBase = "https://gateway.vindi.com.br:443/api/v1";//producao
        
        //acoes:
        //POST	/           Cria uma transação na plataforma da API da Stone
        //POST	/Cancel     Cancela uma transação previamente autorizada
        //POST	/Capture    Captura uma transação previamente autorizada
        //POST	/Retry      Efetua uma retentativa de autorização
        //GET	/Query/{identifierName}={value}     Pesquisa uma transação utilizando um critério de busca
        

        public static $last_error = "";
        public static $last_customer_error = "";

        public static $last_response_json = "";

        /**
         * cobrar com gatway vindi
         */

        public function Cobrar($aDados) {

        /**
        *   NumeroDocumento
        *   ValorDocumento
        *   NumeroBanco
        *   CodigoAgencia
        *   ContaCorrente
        *   TitularContaCorrente
        *   CNPJCPFSacado
        *   DataVencimento          
        *   
        *   Banco:          Agência:        Conta Corrente:
        *      237             0000P (5)          0000000P  (8) BRADESCO
        *      341             0000            00000-0      ITAU        
        *      001             0000X           00000000X        BB      
        */

        $aRetorno['NumeroDocumento'] = $aDados['NumeroDocumento'];

        // Monta os dados postados

        $strRequest = "NumeroDocumento=".$aDados['NumeroDocumento'];
        $strRequest .= "&ValorDocumento=".$aDados['ValorDocumento'];
        $strRequest .= "&NumeroBanco=".$aDados['NumeroBanco'];
        $strRequest .= "&CodigoAgencia=".$aDados['CodigoAgencia'];
        $strRequest .= "&ContaCorrente=".$aDados['ContaCorrente'];
        $strRequest .= "&TitularContaCorrente=".$aDados['TitularContaCorrente'];
        $strRequest .= "&CNPJCPFSacado=".$aDados['CNPJCPFSacado'];
        $strRequest .= "&QuantidadeParcelas=01";
        $strRequest .= "&ResponderEmUTF8=S";

        if ($aDados['DataVencimento']) {
            $strRequest .= "&DataVencimento=".$aDados['DataVencimento'];
        }

        $strRetorno = $this->Conectar($strRequest);


        if ($strRetorno==false) {
            $aRetorno['erro']='Problemas de conexao com o Banco';
            return $aRetorno;
        }

        $oXml = @simplexml_load_string($strRetorno);

        if ($oXml->Transacao) {
            $aRetorno['transacao']=strval($oXml->Transacao);
        }

        else if ($oXml->Erro) {
            $aRetorno['erro']=strval($oXml->Erro);
        }

        $aRetorno['resposta']=$strRetorno;

        return $aRetorno;

    }

        /**
         * Retorna string JSON para cancelamento da transacao
         * @param array $aD RequestKey / AmountInCents / TransactionKey / TransactionReference / OrderKey
         * @return string JSON
         */
        private static function makeJsonCancelamento( $aD ) {

            $sJson = '{
                "RequestKey":"'.$aD['RequestKey'].'",
                "CreditCardTransactionCollection":[{
                    "AmountInCents":'.$aD['AmountInCents'].',
                    "TransactionKey":"'.$aD['TransactionKey'].'",
                    "TransactionReference":"'.$aD['TransactionReference'].'"
                }],
                "OrderKey":"'.$aD['OrderKey'].'"
            }';

            return $sJson;
            
        }//makeJsonTransacao

        private static function makeJsonTransacao( $aDadosFornecidos ) {

            $sJson = '{
                "CreditCardTransactionCollection": [
                {
                    "AmountInCents": '.$aDadosFornecidos['valor'].',
                    "CreditCard": {
                        "CreditCardBrand": "'.$aDadosFornecidos['bandeira'].'",
                        "CreditCardNumber": "'.$aDadosFornecidos['cartao-numero'].'",
                        "ExpMonth": '.$aDadosFornecidos['carta-val-mes'].',
                        "ExpYear": '.$aDadosFornecidos['carta-val-ano'].',
                        "HolderName": "'.$aDadosFornecidos['cartao-holder-name'].'",
                        "SecurityCode": "'.$aDadosFornecidos['cartao-cs'].'"
                    },
                    "CreditCardOperation": "AuthAndCapture",
                    "InstallmentCount": 1,
                    "Options": {
                        "CurrencyIso": "BRL",
                        "PaymentMethodCode": 0
                    },
                    "TransactionReference":"'.$aDadosFornecidos['id-pedido'].'"
                }
                ]
            }';

            return $sJson;
            
        }//makeJsonTransacao

        
         /**
         * Realiza submissao do cancelamento, analisar string de resposta!!!
         * @param array $aD RequestKey / AmountInCents / TransactionKey / TransactionReference / OrderKey
         * @return false(error) or string
         */
         public static function cancelar($aD) {

            $sJsonCancel = self::makeJsonCancelamento($aD);
            
            
            $sJsonRetorno =  self::curlConnect($sJsonCancel, "Cancel");
            
            if ($sJsonRetorno==false) {

                return self::error('sysbella: retorno json false');

            }

            $aCancelResponse = json_decode($sJsonRetorno, true);

            if (is_array( $aCancelResponse['ErrorReport'] )) {

                return self::error( $aCancelResponse['ErrorReport']['ErrorItemCollection']['ErrorCode'].". ".$aCancelResponse['ErrorReport']['ErrorItemCollection']['Description']." [".$aCancelResponse['ErrorReport']['ErrorItemCollection']['ErrorField']."]");

            } else {
                return $sJsonRetorno;
            }

            ##
            return false;
        }//

        private static function error($sMsgErro) {
            self::$last_error = urldecode($sMsgErro);
            return false;
        }

        public static function getError() {

            return self::$last_error;

        }
        
        public static function getCustomerError() {

            return self::$last_customer_error;

        }

        /**
         * conexão gatway vindi
         */

        private static function curlConnect($sJson, $sUrlPiece = '') {

            $rCon = curl_init();
            
            $aHeaders = array('Content-Type: text/json', 'Accept: text/json');

            curl_setopt($rCon, CURLOPT_USERPWD, self::$sFiliacaoKey)
            curl_setopt($rCon, CURLOPT_URL, self::$sURLBase.$sUrlPiece);
            curl_setopt($rCon, CURLOPT_HTTPHEADER, $aHeaders);
            curl_setopt($rCon, CURLOPT_POSTFIELDS, $sJson);
            curl_setopt($rCon, CURLOPT_SSL_VERIFYPEER, true);
            curl_setopt($rCon, CURLOPT_RETURNTRANSFER, true);

            $sRetorno = curl_exec($rCon); 
            $err = curl_error($rCon);

            curl_close($rCon);

            if ($err) { return self::error($err); }

            return $sRetorno;

        }
    }