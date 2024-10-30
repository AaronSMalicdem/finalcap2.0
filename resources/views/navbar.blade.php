<div class="container mt-2">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 top-bar">
            <div style="container">
                <div class="row row align-items-center">
                    <div class="col-lg-4 d-flex justify-content-center">
                        <div class="welcome-user">
                            <img src="#" class="user-image" />
                            <span>Welcome, {{ Auth::user()->name }}!</span>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex justify-content-center">
                        <div class="mx-auto dropdown-oval-container">
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    Main
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">Main</a></li>
                                    <li><a class="dropdown-item" href="#">Kuwago Cafe 1</a></li>
                                    <li><a class="dropdown-item" href="#">Kuwago Cafe 2</a></li>
                                    <li><a class="dropdown-item" href="#">Uddesign</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex justify-content-center right-icons">
                        <div>
                            <a href="#" class="mx-2"><i class="fa-solid fa-store"></i></a>
                            <a href="{{route('profile.edit')}}" class="mx-2"><i class="fa-solid fa-user"></i></a>
                            <a href="#" class="mx-2"><i class="fa-solid fa-gear"></i></a>
                            @if (Auth::check())
                            <a href="{{ route('logout') }}" class="mx-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>