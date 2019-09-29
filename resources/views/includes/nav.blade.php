 Header Area Start-->
<header id="top-header">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="/"><img src="img/logo-n.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="howitworks">How it Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
            </ul>
            <!--navbar-->
            {{-- <ul class="navbar-nav ml-auto">
                <li class="nav-item mar-3">
                    <a class="nav-link" href="/register">Register</a>
                </li>
                <li class="phone">
                    <a href="/login" class="nav-link "><span class="phone-nav"><i class="fas fa-user"></i>Login</span></a>
                </li>
            </ul> --}}
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('register'))
                        <li class="nav-item mar-3">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                    @endif    
                    <li class="phone">
                        <a href="/login" class="nav-link "><span class="phone-nav"><i class="fas fa-user"></i>Login</span></a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <div class="phone">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span class="phone-nav">
                                   {{ Auth::user()->name }} <span class="caret"></span> 
                                </span>
                            </a>
                        </div>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
        <!--collapse-->
    </nav>
    <!--nav-->
</header>
<!--Header Area End