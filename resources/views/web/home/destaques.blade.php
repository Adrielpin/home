    <div class="div-conteudo">

        <div class="home-container">

            <div class="boxhome-assine">

                <div style="margin-top: -20px">

                    <div style="background-image: url(/storage/img/bg.jpg); width:300px; height:510px">

                        <div>
                            <p style=" text-align: center; text-transform:uppercase; padding-top:7px; font-size:1.1em; font-weight:800; margin-bottom:-16px; line-height:18px">
                                <i>para quem gosta<br>de verdade de mulher</i>
                            </p>
                        </div>

                        <a href="#" style="text-decoration: none">
                            <div style="background: #ff6000; width:207px; height:46px; margin-left:46px; border-radius:5px ">
                                <p style=" text-align: center; color:#ffffff; padding-top:10px; font-size:21px; font-weight:800">
                                    <i>ASSINAR AGORA!</i>
                                </p>
                            </div>
                        </a>

                    </div>

                </div>

            </div>

            <div id="div-destaque" class="capa">

                <h1>

                    <a id="adh1" href="{{ route('modelos.photo', $essays[0]->url) }}" title="{{ $essays[0]->name }}">
                        <img src="//:0" title="lançamento da semana" width="610" height="450" class="destaques firstSlide" style="background-image: url('{{ '/storage/home/' . $essays[0]->homes[rand(0, (count($essays[0]->homes)-1))]->name }}')">
                        <span class="text">{{ $essays[0]->name }}</span>
                    </a>

                </h1>

            </div>

            <h2>

                <a class="boxhome bxd1" href="{{ route('modelos.photo', $essays[1]->url) }}">
                    <img src="//:0" title="ultima modelo" class="destaques secondSlide" width="300" height="220" style="background-image: url('{{ '/storage/home/' . $essays[1]->homes[0]->name }}')">
                    <span class="text no-label">{{ $essays[1]->name }}</span>
                </a>

            </h2>

            <h2>

                <a class="boxhome bxd2" href="{{ route('modelos.photo', $essays[2]->url) }}">
                    <img src="//:0" title="Mais modelos" class="destaques tirdSlide" width="300" height="220" style="background-image: url('{{ '/storage/home/' . $essays[2]->homes[0]->name }}')">
                    <span class="text no-label">{{ $essays[2]->name }}</span>
                </a>

            </h2>


            <br class="clearfloat">

        </div>

    </div>


    <script type="text/javascript">

        window.setInterval(firstSlide, 6000, {!! $essays[0]->homes !!})

    </script>