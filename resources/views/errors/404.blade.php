<!DOCTYPE html>
<html>
    <head>
        <title>404 - IlyasKali</title>
        <link rel="shortcut icon" type="image/x-icon" href="/favicon/favicon.ico">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #67737a;
                display: table;
                font-weight: 100;
                font-family: 'Helvetica';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                    Такой страницы не существует
                </div>
                <p>
                    Попробуйте вернуться на <a href="{{ url('/') }}">главную</a>
                </p>
            </div>
        </div>
    </body>
</html>
