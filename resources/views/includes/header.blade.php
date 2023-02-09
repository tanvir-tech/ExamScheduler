<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Exam Scheduler</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Faculty</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Course</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Room</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Time</a>
                </li>
            </ul>
            {{-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> --}}



            @if (Auth::guard('web')->check())
                <a class="nav-link" href="/admin/dashboard">Dashboard</a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                  this.closest('form').submit(); "
                            role="button">
                            <i class="fas fa-sign-out-alt"></i>

                            {{ __('Log Out') }}
                        </a>
                    </div>
                </form>
            @else
                <a class="nav-link" href="/login">Login</a>
            @endif

        </div>
    </nav>
</div>
