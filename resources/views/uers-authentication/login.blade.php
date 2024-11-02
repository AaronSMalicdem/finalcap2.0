<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Users</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="{{ url('assets/css/usersAuth.css') }}" rel="stylesheet" />
    <script src="{{ url('assets/js/chart.js') }}"></script>
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{url('fontawesome/css/all.min.css')}}" />
</head>
<body>
   <div class="container" style="display: flex; align-items: center; justify-content: center; min-height: 100vh;">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 "></div>
            <div class="col-lg-8 ">
                <div class="container loginForm" style="padding: 20px;">
                    <div class="row">
                        <div class="col-lg-3  d-flex justify-content-center nav-item" onclick="showSection('signIn')">
                            <h6 style="color: #fff;">Sign In</h6>
                        </div>
                        <div class="col-lg-3  d-flex justify-content-center nav-item" onclick="showSection('uddesign')">
                            <h6 style="color: #fff;">Uddesign</h6>
                        </div>
                        <div class="col-lg-3  d-flex justify-content-center nav-item" onclick="showSection('kuwagoCafe1')">
                            <h6 style="color: #fff;">Kuwago Cafe 1</h6>
                        </div>
                        <div class="col-lg-3  d-flex justify-content-center nav-item" onclick="showSection('kuwagoCafe2')">
                            <h6 style="color: #fff;">Kuwago Cafe 2</h6>
                        </div>
                    </div>

                    <div id="signIn" class="section">
                    <div class="row">
                        <div class="col-lg-12 mt-3  d-flex justify-content-center">
                            <h4 style="color: #fff;">Welcome Back!</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-1 mt-3"></div>
                        <div class="col-lg-10 mt-3">
                            <form>
                                <div class="form-group d-flex align-items-center position-relative">
                                    <label for="exampleInputEmail1" style="margin-right: 38px; color:#fff; margin-bottom: -23px;">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" 
                                           style="flex: 1; background: transparent; border: none; border-bottom: 2px solid #fff; color: #fff; outline: none; border-radius: 0; box-shadow: none; padding-right: 30px;">
                                    <button type="button" onclick="document.getElementById('exampleInputEmail1').value='';" 
                                            style="position: absolute; right: 5px; background: none; border: none; color: #fff; cursor: pointer; font-size: 16px;">
                                        &times;
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-1 mt-3"></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-1 mt-3"></div>
                        <div class="col-lg-10 mt-3">
                            <form>
                                <div class="form-group d-flex align-items-center position-relative">
                                    <label for="exampleInputPassword1" style="margin-right: 10px; color:#fff; margin-bottom: -23px;">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" 
                                           style="flex: 1; background: transparent; border: none; border-bottom: 2px solid #fff; color: #fff; outline: none; border-radius: 0; box-shadow: none; padding-right: 30px;">
                                    <button type="button" onclick="document.getElementById('exampleInputPassword1').value='';" 
                                            style="position: absolute; right: 5px; background: none; border: none; color: #fff; cursor: pointer; font-size: 16px;">
                                        &times;
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-1 mt-3"></div>
                    </div> 
                    
                    <div class="row">
                        <div class="col-lg-12 mt-1 d-flex justify-content-center">
                            <p style="color: #fff;">Forgot password?</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mt-3 d-flex justify-content-end">
                            <button class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                   </div>
                   <div id="uddesign" class="section hidden">
                    <h5 style="color: #fff;">Uddesign Content Here</h5>
                </div>

                <div id="kuwagoCafe1" class="section hidden">
                    <h5 style="color: #fff;">Kuwago Cafe 1 Content Here</h5>
                </div>

                <div id="kuwagoCafe2" class="section hidden">
                    <h5 style="color: #fff;">Kuwago Cafe 2 Content Here</h5>
                </div>

                </div>
            </div>
            <div class="col-lg-2 "></div>
        </div>
    </div>
</div>

    <script>
        function showSection(sectionId) {
            // Hide all sections
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => {
                section.classList.add('hidden');
            });

            // Remove active toggle from all nav items
            const navItems = document.querySelectorAll('.nav-item');
            navItems.forEach(item => {
                item.classList.remove('active-toggle');
            });

            // Show the selected section
            document.getElementById(sectionId).classList.remove('hidden');

            // Add active toggle to the clicked nav item
            const activeItem = [...navItems].find(item => item.textContent.trim() === sectionId.replace(/([A-Z])/g, ' $1').trim());
            if (activeItem) {
                activeItem.classList.add('active-toggle');
            }
        }

        // Set default view
        showSection('signIn');
    </script>
</body>
</html>
