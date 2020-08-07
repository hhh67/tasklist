<header class="mb-5">
    <nav class="navbar navbar-expand-sm navbar-dark">
        <a class="navbar-brand p-2 text-light font-weight-bold" href="/"><i class="fas fa-tasks"></i> TaskList</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link active" href="{!! route('tasks.create') !!}">
                            <i class="fas fa-plus"></i> NewTask
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{!! route('logout.get') !!}">
                            Logout
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('signup.get') }}">
                            Signup
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('login.get') }}">
                            Login
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>