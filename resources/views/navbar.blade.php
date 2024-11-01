<div class="container">
    <div class="row">
        <div class="col-lg-2">.</div>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 top-bar">
            <div style="container">
                <div class="row align-items-center">
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
                            <a href="{{ route('profile.edit') }}" class="mx-2"><i class="fa-solid fa-user"></i></a>
                            <a href="#" class="mx-2"><i class="fa-solid fa-gear"></i></a>
                            @if (Auth::check())
                            <!-- Updated Logout Link -->
                            <a href="#" class="mx-2" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </a>
                            <!-- Hidden Logout Form -->
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

<!-- Logout Confirmation Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="logoutModalLabel">Come Back Soon!</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to logout? You will be returned to the login page.</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="text-decoration-none text-secondary" data-bs-dismiss="modal">Cancel</a>
                <a href="#" class="text-decoration-none text-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>
            </div>
        </div>
    </div>
</div>
