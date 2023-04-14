

<nav class="navbar navbar-expand-md navbar-light fixed-top bg-white shadow-lg">
    <div class="container">
        <a class="navbar-brand logo" href="{{ url('/') }}">
            {{-- {{ config('app.name', 'Laravel') }} --}}
            <img src="{{ asset('style/admin/images/ifakarachurch.jpg') }}" width="100" height="70" class="d-inline-block align-top" alt="" style="border-radius: 10px;">
        </a>
        <ul class="navbar-nav me-auto">
            <h3 class="title">Ajira Katika Jimbo Katoliki La Ifakara </h3>
        </ul>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            {{-- <ul class="navbar-nav me-auto">
                <h3 style="margin-left: 150px; font-size: 45px; font-weight:900; font-family:'Times New Roman', Times, serif;">Ajira Katika Jimbo Katoliki La Ifakara </h3>
            </ul> --}}

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">{{ __('Home') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Notifications') }}</a>
                            <a class="dropdown-item" href="#">{{ __('My Applications') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Change Password') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Feedback') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
