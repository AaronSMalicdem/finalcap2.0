<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
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
        <div class="container" style="height:400px;">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="container loginForm" style="padding: 20px;">
                        <div class="row d-flex justify-content-around">
                            <div class="col-lg-3 d-flex justify-content-center loginNav" onclick="showSection('signIn')">
                                <h6 style="color: #fff;">Sign In</h6>
                            </div>
                            <div class="col-lg-3 d-flex justify-content-center loginNav" onclick="showSection('uddesign')">
                                <h6 style="color: #fff;">Uddesign</h6>
                            </div>
                            <div class="col-lg-3 d-flex justify-content-center loginNav" onclick="showSection('kuwagoCafe1')">
                                <h6 style="color: #fff;">Kuwago Cafe 1</h6>
                            </div>
                            <div class="col-lg-3 d-flex justify-content-center loginNav" onclick="showSection('kuwagoCafe2')">
                                <h6 style="color: #fff;">Kuwago Cafe 2</h6>
                            </div>
                        </div>

                        <div id="signIn" class="section">
                            <div class="row">
                                <div class="col-lg-12 mt-3 d-flex justify-content-center">
                                    <h4 style="color: #fff;">Welcome Back!</h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-1 mt-3"></div>
                                <div class="col-lg-10 mt-3">
                                    <form>
                                        <div class="form-group d-flex align-items-center position-relative">
                                            <label for="exampleInputEmail1" style="margin-right: 38px; color: #fff; margin-bottom: -23px;">Email</label>
                                            <input
                                                type="email"
                                                class="form-control"
                                                id="exampleInputEmail1"
                                                aria-describedby="emailHelp"
                                                placeholder="Enter email"
                                                style="flex: 1; background: transparent; border: none; border-bottom: 2px solid #fff; color: #fff; outline: none; border-radius: 0; box-shadow: none; padding-right: 30px;"
                                            />
                                            <button
                                                type="button"
                                                onclick="document.getElementById('exampleInputEmail1').value='';"
                                                style="position: absolute; right: 5px; background: none; border: none; color: #fff; cursor: pointer; font-size: 16px;"
                                            >
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
                                            <label for="exampleInputPassword1" style="margin-right: 10px; color: #fff; margin-bottom: -23px;">Password</label>
                                            <input
                                                type="password"
                                                class="form-control"
                                                id="exampleInputPassword1"
                                                placeholder="Password"
                                                style="flex: 1; background: transparent; border: none; border-bottom: 2px solid #fff; color: #fff; outline: none; border-radius: 0; box-shadow: none; padding-right: 30px;"
                                            />
                                            <button
                                                type="button"
                                                onclick="document.getElementById('exampleInputPassword1').value='';"
                                                style="position: absolute; right: 5px; background: none; border: none; color: #fff; cursor: pointer; font-size: 16px;"
                                            >
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

                        <div id="uddesign" class="section hidden mt-4">
                            <div class="row">
                                <div class="col-lg-1 "></div>
                                <div class="col-lg-3 ">
                                    <div class="col-lg-4 user-image" style="height:140px;">
                                        <img src="/images/officeSample.jpg" alt="kuwago" class="loginImages">
                                    </div>
                                </div>
                                <div class="col-lg-3 ">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="color:#fff;">Year Established:</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="color:#fff;">Business Type:</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="color:#fff;">Location:</p>
                                            <p style="color:#fff; font-size:15px;">2F LCA Bldg., Universidad de Dagupan, Arellano St., Dagupan, Pangasinan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1  d-flex justify-content-center">
                                    <img src="/images/uddesign.png" alt="kuwago" class="uddesignLogo">
                                </div>
                                <div class="col-lg-3 ">
                                    <div class="row">
                                        <div class="col-lg-12 mt-2 d-flex justify-content-end">
                                            <button class="Loginslide-btn" onclick="navigateTo('next')">View Next</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mt-2 d-flex justify-content-end">
                                            <button class="Loginslide-btn" onclick="navigateTo('previous')">View Previous</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mt-2 d-flex justify-content-end">
                                            <button class="Loginslide-btn" onclick="showSection('signIn')">Go to Sign In</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 "></div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-11">
                                    <p style="color: #fff;">Description</p>
                                </div>
                            </div>
                            <div class="row loginDesc">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-9">
                                    <p style="color: #fff;">Download the perfect office background pictures. Find over 100+ of the best free office background images. Free for commercial use ✓ No attribution required ...</p>
                                </div>
                                <div class="col-lg-2"></div>
                            </div>
                            
                        </div>

                        <div id="kuwagoCafe1" class="section hidden mt-4">
                            <div class="row">
                                <div class="col-lg-1 "></div>
                                <div class="col-lg-3 ">
                                    <div class="col-lg-4 user-image" style="height:140px;">
                                        <img src="/images/kuwago1.jpg" alt="kuwago" class="loginImages">
                                    </div>
                                </div>
                                <div class="col-lg-3 ">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="color:#fff;">Year Established:</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="color:#fff;">Business Type:</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="color:#fff;">Location:</p>
                                            <p style="color:#fff; font-size:15px;">2F LCA Bldg., Universidad de Dagupan, Arellano St., Dagupan, Pangasinan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1  d-flex justify-content-center">
                                    <img src="/images/kuwagologo.png" alt="kuwago" class="kuwagoLogo">
                                </div>
                                <div class="col-lg-3 ">
                                    <div class="row">
                                        <div class="col-lg-12 mt-2 d-flex justify-content-end">
                                            <button class="Loginslide-btn" onclick="navigateTo('next')">View Next</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mt-2 d-flex justify-content-end">
                                            <button class="Loginslide-btn" onclick="navigateTo('previous')">View Previous</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mt-2 d-flex justify-content-end">
                                            <button class="Loginslide-btn" onclick="showSection('signIn')">Go to Sign In</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 "></div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-11">
                                    <p style="color: #fff;">Description</p>
                                </div>
                            </div>
                            <div class="row loginDesc">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-9">
                                    <p style="color: #fff;">Download the perfect office background pictures. Find over 100+ of the best free office background images. Free for commercial use ✓ No attribution required ...</p>
                                </div>
                                <div class="col-lg-2"></div>
                            </div>
                            
                        </div>

                        <div id="kuwagoCafe2" class="section hidden mt-4">
                            <div class="row">
                                <div class="col-lg-1 "></div>
                                <div class="col-lg-3 ">
                                    <div class="col-lg-4 user-image" style="height:140px;">
                                        <img src="/images/kuwago2.jpeg" alt="kuwago" class="loginImages">
                                    </div>
                                </div>
                                <div class="col-lg-3 ">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="color:#fff;">Year Established:</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="color:#fff;">Business Type:</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="color:#fff;">Location:</p>
                                            <p style="color:#fff; font-size:15px;">2F LCA Bldg., Universidad de Dagupan, Arellano St., Dagupan, Pangasinan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1  d-flex justify-content-center">
                                    <img src="/images/kuwagologo.png" alt="kuwago" class="kuwagoLogo">
                                </div>
                                <div class="col-lg-3 ">
                                    <div class="row">
                                        <div class="col-lg-12 mt-2 d-flex justify-content-end">
                                            <button class="Loginslide-btn" onclick="navigateTo('next')">View Next</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mt-2 d-flex justify-content-end">
                                            <button class="Loginslide-btn" onclick="navigateTo('previous')">View Previous</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mt-2 d-flex justify-content-end">
                                            <button class="Loginslide-btn" onclick="showSection('signIn')">Go to Sign In</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 "></div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-11">
                                    <p style="color: #fff;">Description</p>
                                </div>
                            </div>
                            <div class="row loginDesc">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-9">
                                    <p style="color: #fff;">Download the perfect office background pictures. Find over 100+ of the best free office background images. Free for commercial use ✓ No attribution required ...</p>
                                </div>
                                <div class="col-lg-2"></div>
                            </div>
                            
                        </div>

                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </div>

   <script>
    function showSection(sectionId) {
    // Hide all sections
    const sections = document.querySelectorAll(".section");
    sections.forEach((section) => {
        section.classList.add("hidden");
    });

    // Remove active-toggle from all nav items
    const navItems = document.querySelectorAll(".loginNav");
    navItems.forEach((item) => {
        item.classList.remove("active-toggle");
    });

    // Show the selected section
    document.getElementById(sectionId).classList.remove("hidden");

    // Find and highlight the active tab
    const activeItem = Array.from(navItems).find(
        (item) => item.textContent.trim().replace(/\s/g, "").toLowerCase() === sectionId.toLowerCase()
    );
    if (activeItem) {
        activeItem.classList.add("active-toggle");
    }

    // Store the active section in localStorage
    localStorage.setItem('activeSection', sectionId);
}
function navigateTo(direction) {
    const sections = ['uddesign', 'kuwagoCafe1', 'kuwagoCafe2'];
    const currentSectionId = localStorage.getItem('activeSection') || 'signIn';
    const currentIndex = sections.indexOf(currentSectionId);
    
    let targetIndex;
    
    if (direction === 'next') {
        targetIndex = currentIndex + 1 < sections.length ? currentIndex + 1 : currentIndex; // Prevent going out of bounds
    } else if (direction === 'previous') {
        targetIndex = currentIndex - 1 >= 0 ? currentIndex - 1 : currentIndex; // Prevent going out of bounds
    }

    if (targetIndex !== undefined) {
        const targetSectionId = sections[targetIndex];
        showSection(targetSectionId); // Navigate to the target section
    }
}

// Store the active section in localStorage on navigation
const activeSection = localStorage.getItem('activeSection') || 'signIn';
showSection(activeSection);

   </script>
</body>
</html>
