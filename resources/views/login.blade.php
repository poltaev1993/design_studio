<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IlyasKali Admin | Вход</title>

    <!-- Bootstrap Core CSS -->
    <link href="/sbadmin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/sbadmin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/sbadmin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/sbadmin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Пожалуйста, войдите</h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['role' => 'form']) !!}
                        <fieldset>
                            @if(Session::has('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                            <div class="form-group">
                                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail', 'required', 'autofocus']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Пароль', 'required']) !!}
                            </div>
                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('remember', 'on', false) !!} Запомнить меня
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            {!! Form::submit('Вход', ['class' => 'btn btn-lg btn-success btn-block']) !!}
                        </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="/sbadmin/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/sbadmin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/sbadmin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/sbadmin/dist/js/sb-admin-2.js"></script>

</body>

</html>
