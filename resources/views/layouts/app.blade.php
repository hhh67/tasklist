<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>TaskList</title>
        <meta name="description" content="レッスン13の課題で作ったタスクリストアプリです。疲れた。">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            body {
                background: rgba(62, 62, 190, 0.1);
            }
            .navbar-dark {
                background-color: rgb(62, 62, 190);
            }
            .fa-tasks {
                font-size: 16px;
            }
            .active:hover {
                opacity: 0.6;
            }
            .th_link {
                display: block;
                width: 100%;
                height: 100%;
            }
        </style>
    </head>
    <body>
        @include('commons.navbar')
        
        <div class="container">
            @include('commons.error_messages')
            
            @yield('content')
            
            @section('bgwhite')
                <div class="row mr-2 ml-2 mb-5 justify-content-center">
                    <div class="col-sm-7 bg-white rounded p-3">
                        @yield('bgwhitecontent')
                    </div>
                </div>
            @show
            
        </div>
        
        <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" integrity="sha384-3Nqiqht3ZZEO8FKj7GR1upiI385J92VwWNLj+FqHxtLYxd9l+WYpeqSOrLh0T12c" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>