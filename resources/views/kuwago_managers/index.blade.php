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
                    <button id="backButton" class="back-button" onclick="window.history.back();">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                </div>
                
                <div class="col-lg-8 mt-5 d-flex justify-content-center">
                    <h1 style="color: #fff;">My Profile</h1>
                </div>
                <div class="col-lg-2"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    {{-- Users Details View --}}
                    <div class="col-lg-6 mt-4 d-flex justify-content-center" style="margin-bottom: 150px;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 user-image" style="height: 140px;">
                                    <p class="user-details">User Image</p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 ps-0">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-4 user-position">
                                                            <p>Owner</p>
                                                        </div>
                                                        <div class="col-lg-8"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-1 user-username">
                                                <p>Aaron</p>
                                            </div>
                                            <div class="col-lg-12 mt-1 user-description">
                                                <p>The multi Business man.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h6 style="color: #fff;">Access</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 user-access">
                                        <p style="color: #fff;">General</p>
                                    </div>
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-5 user-role">
                                        <p style="color: #fff;">Owner</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h6 style="color: #fff;">Profile</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="container user-fullname">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p style="color: #fff;">First Name: Aaron</p>
                                        <p style="color: #fff;">Last Name: Malicdem</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p style="color: #fff;">Initial: S.</p>
                                        <p style="color: #fff;">Suffix: -</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h6 style="color: #fff;">Contact</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="container user-contact">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p style="color: #fff;">Email: malicdema68@gmail.com</p>
                                        <p style="color: #fff;">Phone Number:000-111-000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-2">
                                <div class="row">
                                    <div class="col-lg-5"></div>
                                    <div class="col-lg-6"></div>
                                    <div class="col-lg-1 d-flex justify-content-center">
                                        <a href="{{url('kuwago_managers/edit')}}"><button class="btn btn-primary editProfile-button">Edit</button></a>
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
