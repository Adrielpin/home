<html>
<head>

    <meta charset="utf-8"/>
    <title>Admin bella</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <link rel="stylesheet" href="{{ asset('assets/admin.css') }}">

    <style type="text/css">
        body {
            background-repeat:no-repeat;
            background-size:cover;
            background-position:center;
            background-origin: content-box;

        }

        .mask{

            height: 100%;
            background-image: url('assets/img/background/mask.png');
            background-repeat:repeat;
            background-position:center;
        }

        .vertical-offset-100 {
            padding-top: 100;
        }

        .panel{
            background-color: rgba(0,0,0,0.5);
            color: white;

        }

        .form-control {
            background-color: transparent;
            border-color: grey;
            color: white;
        }

        .btn-link{
            color: white;
        }

    </style>

    
    
</head>
<body>

    <script src="{{ asset('assets/admin.js') }}" type="text/javascript"></script>

    
    <script type="text/javascript">

     $(document).ready( function() {
        $('body').css({'background-image': 'url(assets/img/background/' + Math.floor((Math.random() * 5) + 1) + '.jpg)'});
    });
</script>


<div class="container-fluid mask">

    <div class="row vertical-offset-100">

        <div class="col-sm-12">

            <div class="col-sm-6 col-sm-offset-3">

                <div class="panel panel-default">

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <label for="email" class="col-sm-4 control-label">E-Mail:</label>

                                <div class="col-sm-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-sm-4 control-label">Senha</label>

                                <div class="col-sm-6">
                                    <input id="password" type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-6 col-sm-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Lembre-me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-6 col-sm-offset-4">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-btn fa-sign-in"></i> Entrar </button>

                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Esqueceu sua senha?</a>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>