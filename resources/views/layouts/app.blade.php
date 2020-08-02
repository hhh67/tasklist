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
            .add {
                color: white;
            }
            .add:hover {
                text-decoration: none;
                color: #ccc;
            }
        </style>
    </head>
    <body>
        <header class="mb-5">
            <nav class="navbar navbar-expand-sm navbar-dark">
                <a class="navbar-brand p-2 text-light font-weight-bold" href="/"><i class="fas fa-tasks"></i> TaskList</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                         <li class="nav-item">
                             <a class="add" href="{!! route('tasks.create') !!}">
                                 <i class="fas fa-plus"></i> Add Task
                             </a>
                         </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <div class="container">
            @include('commons.error_messages')
            
            @yield('content')
        </div>
        
        <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" integrity="sha384-3Nqiqht3ZZEO8FKj7GR1upiI385J92VwWNLj+FqHxtLYxd9l+WYpeqSOrLh0T12c" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>