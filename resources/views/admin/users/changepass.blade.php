<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <div class="container mb-4">
            <div class="row">
                <div class="col-lg-2  mt-5">
                    <button id="backButton" class="back-button"><i class="fas fa-arrow-left"></i></button>
                </div>
                <div class="col-lg-8 d-flex justify-content-center  mt-5">
                    <h3 style="color: #fff;">Accounts</h3>
                </div>
                <div class="col-lg-2 d-flex justify-content-end  mt-5">
                    <a href="{{url('admin/users/create')}}"><button id="addUserButton" class=" addUser-button"><i class="fas fa-plus"></i></button></a>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 4%; margin-bottom: 5%;">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 ">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 ">
                                <div class="container mt-3 mb-3">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex justify-content-start">
                                            <h5 class="all-accounts">
                                                <i class="fa-regular fa-user user-icon" style="margin-right: 8px;"></i>All Accounts
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mb-3 mt-3">
                                    <div class="row d-flex justify-content-around">
                                        <div class="col-lg-3 d-flex justify-content-center account-type active" onclick="showAccounts('all', this)">
                                            <h6>All</h6>
                                        </div>
                                        <div class="col-lg-3 d-flex justify-content-center account-type" onclick="showAccounts('owner', this)">
                                            <h6>Owner</h6>
                                        </div>
                                        <div class="col-lg-3 d-flex justify-content-center account-type" onclick="showAccounts('finance', this)">
                                            <h6>Finance</h6>
                                        </div>
                                        <div class="col-lg-3 d-flex justify-content-center account-type" onclick="showAccounts('managers', this)">
                                            <h6>Managers</h6>
                                        </div>
                                    </div>
                                </div>

                                <div id="allAccountsContent" class="account-content" style="display: block;">
                                    <!-- Add the relevant HTML or content for all accounts here -->
                                    <div class="container mt-3 user-list">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="scrollable-list">
                                                    <!-- Loop to generate 10 dummy users -->
                                                    @for ($i = 1; $i <= 10; $i++)
                                                        <div class="row user-item" onclick="showUserDetails()">
                                                            <div class="col-lg-10 d-flex justify-content-center ">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-lg-3  text-center">
                                                                            <!-- Dummy image -->
                                                                            <img src="https://via.placeholder.com/80" alt="User Image" class="user-image">
                                                                        </div>
                                                                        <div class="col-lg-9 ">
                                                                            <p>Dennis {{ $i }} - Admin</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 ">
                                                                <a href="{{ url('admin/users/edit') }}">
                                                                    <button class="edit-button">
                                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                                    </button>
                                                                </a>                                                            
                                                            </div>
                                                        </div>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="ownerAccountsContent" class="account-content" style="display: none;">
                                    <!-- Add the relevant HTML or content for owner accounts here -->
                                    <div class="container mt-3 user-list">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="scrollable-list">
                                                    <!-- Loop to generate 10 dummy users -->
                                                    @for ($i = 1; $i <= 10; $i++)
                                                        <div class="row user-item" onclick="showUserDetails()">
                                                            <div class="col-lg-10 d-flex justify-content-center ">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-lg-3  text-center">
                                                                            <!-- Dummy image -->
                                                                            <img src="https://via.placeholder.com/80" alt="User Image" class="user-image">
                                                                        </div>
                                                                        <div class="col-lg-9 ">
                                                                            <p>Aaron {{ $i }} - Operational Manager</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 ">
                                                                <a href="{{ url('admin/users/edit') }}">
                                                                    <button class="edit-button">
                                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                                    </button>
                                                                </a>                                                            
                                                            </div>
                                                        </div>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="financeAccountsContent" class="account-content" style="display: none;">
                                    <!-- Add the relevant HTML or content for finance accounts here -->
                                </div>
                                <div id="managersAccountsContent" class="account-content" style="display: none;">
                                    <!-- Add the relevant HTML or content for manager accounts here -->
                                </div>

                             
                            </div>

                            {{-- Change Password --}}
                        <div class="col-lg-6 ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <h4 style="color: #fff;">Update Password</h4>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <p style="color: #fff; font-weight:bold;">Password Requirements:</p>
                                            <p style="color: #fff; font-size:15px; margin-left: 5px;">Must be up to 8 Characters with upper and lowecase letters and special Characters</p>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="container mt-2">
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <label for="currentpassword" class="form-label" style="color: #fff;font-size:15px; font-weight:bold;">Current Password:</label>
                                            <input type="text" class="form-control currentpassword-input" id="currentpassword" placeholder="Current Password" required>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="container mt-2">
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <label for="currentpassword" class="form-label" style="color: #fff;font-size:15px; font-weight:bold;">New Password:</label>
                                            <input type="text" class="form-control newpassword-input" id="newpassword" placeholder="New Password" required>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="container mt-2">
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <label for="currentpassword" class="form-label" style="color: #fff;font-size:15px; font-weight:bold;">Confirm Password:</label>
                                            <input type="text" class="form-control confirmpassword-input" id="confirmpassword" placeholder="Confirm Password" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mt-2">
                                    <div class="row">
                                        <div class="col-lg-5 "></div>
                                        <div class="col-lg-7 ">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-5 d-flex justify-content-center">
                                                        <button class="btn cancel-create" style="color: #000; font-weight: bold;">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                    
                                                    <div class="col-lg-2"></div>

                                                    <div class="col-lg-5 d-flex justify-content-center">
                                                        <button class="btn save-create" style="color: #fff; font-weight: bold;">
                                                            Save
                                                        </button>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 "></div>
            <div class="col-lg-2 d-flex justify-content-end">
                <i class="fa-regular fa-trash-can fa-2x" style="color: #fff;"></i>
            </div>
        </div>
    </div>
   
    <script>
        function showUserDetails() {
            document.getElementById('userDetails').style.display = 'block';
        }
    </script>
    <script>
        function showAccounts(type, element) {
            // Hide all account-specific content sections
            document.getElementById('allAccountsContent').style.display = 'none';
            document.getElementById('ownerAccountsContent').style.display = 'none';
            document.getElementById('financeAccountsContent').style.display = 'none';
            document.getElementById('managersAccountsContent').style.display = 'none';
    
            // Show the selected account type content
            if (type === 'all') {
                document.getElementById('allAccountsContent').style.display = 'block';
            } else if (type === 'owner') {
                document.getElementById('ownerAccountsContent').style.display = 'block';
            } else if (type === 'finance') {
                document.getElementById('financeAccountsContent').style.display = 'block';
            } else if (type === 'managers') {
                document.getElementById('managersAccountsContent').style.display = 'block';
            }
    
            // Remove 'active' class from all account-type buttons
            const accountTypes = document.querySelectorAll('.account-type');
            accountTypes.forEach(btn => btn.classList.remove('active'));
    
            // Add 'active' class to the clicked button
            element.classList.add('active');
        }
    </script>

</body>
</html>
