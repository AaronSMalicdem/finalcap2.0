<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Manage Users</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <link href="{{ url('assets/css/style.css') }}" rel="stylesheet" />
        <script src="{{ url('assets/js/chart.js') }}"></script>
        <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
        <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
        <link rel="stylesheet" href="{{url('fontawesome/css/all.min.css')}}" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 mt-5">
                    <a href="{{url('kuwago_managers/index')}}"><button id="backButton" class="back-button"><i class="fas fa-arrow-left"></i></button>
                    </a>
                </div>
                <div class="col-lg-8 mt-5 mb-5 d-flex justify-content-center">
                    <h1 style="color: #fff;">My Profile</h1>
                </div>
                <div class="col-lg-2"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>

                    <div class="col-lg-6 d-flex justify-content-center user-edit">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 user-image" style="height: 140px;">User Image</div>
                                <div class="col-lg-8">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-5 ps-0 border-black-border d-flex justify-content-center user-position">
                                                            <h6>Position</h6>
                                                        </div>
                                                        <div class="col-lg-2"></div>
                                                        <div class="col-lg-5 ps-0 border-black-border d-flex justify-content-center save-button">
                                                            <h6 style="color: #fff;">Save</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-1 d-flex align-items-center username">
                                                <label for="username" class="form-label"></label>
                                                <input type="text" class="form-control username-input" id="username" placeholder="Username" required />
                                            </div>

                                            <div class="col-lg-12 mt-1 d-flex align-items-center description">
                                                <label for="description" class="form-label"></label>
                                                <input type="text" class="form-control description-input" id="description" placeholder="Add Description" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h6 style="color: #fff;">Access</h6>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 p-0">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Business
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li class="dropdown-item">
                                                <input type="checkbox" id="kuwago1" name="options" value="Kuwago 1" />
                                                <label for="kuwago1">Kuwago 1</label>
                                            </li>
                                            <li class="dropdown-item">
                                                <input type="checkbox" id="kuwago2" name="options" value="Kuwago 2" />
                                                <label for="kuwago2">Kuwago 2</label>
                                            </li>
                                            <li class="dropdown-item">
                                                <input type="checkbox" id="Uddesign" name="options" value="Uddesign" />
                                                <label for="uddesign">Uddesign</label>
                                            </li>
                                            <li class="dropdown-item">
                                                <input type="checkbox" id="option4" name="options" value="Option 4" />
                                                <label for="option4"> Option 4</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Role
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#">Kuwago</a></li>
                                            <li><a class="dropdown-item" href="#">Uddesign</a></li>
                                            <li><a class="dropdown-item" href="#">Finance</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <h6 style="color: #fff;">Profile</h6>
                                </div>
                            </div>

                            <div class="row fullname">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center fname">
                                        <label for="fname" class="form-label" style="color: #fff; font-size: 15px; font-weight: bold;">First Name: </label>
                                        <input type="text" class="form-control fname-input" placeholder="First Name..." id="fname" required />
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <label for="lname" class="form-label" style="color: #fff; font-size: 15px; font-weight: bold;">Last Name: </label>
                                        <input type="text" class="form-control lname-input" placeholder="Last Name..." id="lname" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <label for="mname" class="form-label" style="color: #fff; font-size: 15px; font-weight: bold;">Middle Initial: </label>
                                        <input type="text" class="form-control mname-input" placeholder="Middle Initial..." id="mname" required />
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <label for="suffix" class="form-label" style="color: #fff; font-size: 15px; font-weight: bold;">Suffix Name: </label>
                                        <input type="text" class="form-control suffix-input" placeholder="Suffix Name..." id="suffix" required />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <h6 style="color: #fff;">Contact</h6>
                                </div>
                            </div>

                            <div class="row contact">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center">
                                        <label for="email" class="form-label pe-3" style="color: #fff; font-size: 15px; font-weight: bold;">Email: </label>
                                        <input type="text" class="form-control email-input" placeholder="Enter Email..." id="email" required />
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <label for="phone" class="form-label pe-2" style="color: #fff; font-size: 15px; font-weight: bold;">Phone: </label>
                                        <input type="text" class="form-control phone-input" placeholder="Enter Phone..." id="phone" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div>
    </body>
</html>
