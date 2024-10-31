<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Users</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- BOOTSTRAP  --}}
       <link href="{{ url('assets/css/style.css') }}" rel="stylesheet" />
       <script src="{{ url('assets/js/chart.js') }}"></script>
       <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
       <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
   {{-- END OF BOOTSTRAP FONT AWESOME   --}}
       <link rel="stylesheet" href="{{url('fontawesome/css/all.min.css')}}" />
       {{-- END OF FONT AWESOME --}} 
</head>
<body>
    <div class="container">
      <div class="container mt-3 mb-4">
        <div class="row">
            <div class="col-lg-2 border-black border">
                <button id="backButton"><i class="fas fa-arrow-left"></i></button>
            </div>
            <div class="col-lg-8 d-flex justify-content-center border-black border">
                <h3>Accounts</h3>
            </div>
            <div class="col-lg-2 d-flex justify-content-end border-black border">
                <button id="addUserButton"><i class="fas fa-plus"></i></button>
            </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 border-black border">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 border-black border">

                            <div class="container mt-3 mb-3">
                                <div class="row">
                                    <div class="col-lg-3  d-flex justify-content-start ">
                                        <i class="fa-regular fa-user"></i>
                                    </div>
                                    <div class="col-lg-9  d-flex justify-content-start ">
                                        <h5>All Acounts</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="container mb-3 mt-3">
                                <div class="row">
                                    <div class="col-lg-3 d-flex justify-content-center border-black border">
                                        <h6 class="account-type">All</h6>
                                    </div>
                                    <div class="col-lg-3 d-flex justify-content-center border-black border">
                                        <h6 class="account-type">Owner</h6>
                                    </div>
                                    <div class="col-lg-3 d-flex justify-content-center border-black border">
                                        <h6 class="account-type">Owner</h6>
                                    </div>
                                    <div class="col-lg-3 d-flex justify-content-center border-black border">
                                        <h6 class="account-type">Managers</h6>
                                    </div>
                                </div>
                            </div>

                            {{-- Users-list --}}
                            {{-- <div class="container mt-3 user-list">
                                <div class="row">
                                    <div class="col-lg-2 border-black border">Scrollbar</div>
                                    <div class="col-lg-8 d-flex justify-content-center border-black border">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-3 border-black border">
                                                    <p>Image</p>
                                                </div>
                                                <div class="col-lg-9 border-black border">
                                                    <p>Aaron Malicdem - Owner</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-2 border-black border"><i class="fa-regular fa-pen-to-square"></i></div>
                                </div>
                            </div> --}}
                            <div class="container mt-3 user-list">
                                <div class="row">
                                    <div class="col-lg-2 border-black border">Scrollbar</div>
                                    <div class="col-lg-8 d-flex justify-content-center border-black border">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-3 border-black border">
                                                    <p>Image</p>
                                                </div>
                                                <div class="col-lg-9 border-black border">
                                                    <p>Aaron Malicdem - Owner</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- edit button --}}
                                    <div class="col-lg-2 border-black border">
                                        <button onclick="showEditForm()">Edit</button>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- Users Details View --}}
                        <div class="col-lg-6 d-flex justify-content-center border-black border user-details">
                            <div class="container" id="detailsForm" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-4 border-black border">User Image</div>
                                    <div class="col-lg-8 border-black border">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 border-black border">Position</div>
                                                <div class="col-lg-12 border-black border">Name and Description</div>
                                                <div class="col-lg-12 border-black border">Description</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">Access</div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 border-black border">Access Description</div>
                                        <div class="col-lg-6 border-black border">Role</div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">Profile</div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 border-black border">
                                            <p>First Name:</p>
                                            <p>Last Name:</p>
                                        </div>
                                        <div class="col-lg-6 border-black border">
                                            <p>Initial:</p>
                                            <p>Suffix:</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">Contact</div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">
                                            <p>Email:</p>
                                            <p>Phone Number:</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        {{-- Edit  --}}
                        <div class="col-lg-6 d-flex justify-content-center border-black border user-edit">
                            <div class="container" id="editForm" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-4 border-black border">User Image</div>
                                    <div class="col-lg-8 border-black border">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 border-black border">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-8 border-black-border">
                                                                <h6>Position</h6>
                                                            </div>
                                                            <div class="col-lg-4 border-black-border">
                                                                <h6><i class="fa-regular fa-bookmark"></i></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 border-black border">
                                                    <label for="name" class="form-label">Name: </label>
                                                    <input type="text" class="form-control" id="name" required>
                                                </div>
                                                <div class="col-lg-12 border-black border">
                                                    <label for="description" class="form-label">Description:</label>
                                                    <input type="text" class="form-control" id="description" required>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">Access</div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 border-black border">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Select Business
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li class="dropdown-item">
                                                        <input type="checkbox" id="kuwago1" name="options" value="Kuwago 1">
                                                        <label for="kuwago1">Kuwago 1</label>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <input type="checkbox" id="kuwago2" name="options" value="Kuwago 2">
                                                        <label for="kuwago2">Kuwago 2</label>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <input type="checkbox" id="Uddesign" name="options" value="Uddesign">
                                                        <label for="uddesign">Uddesign</label>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <input type="checkbox" id="option4" name="options" value="Option 4">
                                                        <label for="option4"> Option 4</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 border-black border">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Role
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="#">Kuwago</a></li>
                                                    <li><a class="dropdown-item" href="#">Uddesign</a></li>
                                                    <li><a class="dropdown-item" href="#">Finance</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">Profile</div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 border-black border">
                                            <div><label for="fname" class="form-label">First Name: </label>
                                                <input type="text" class="form-control" id="fname" required></div>
                                            <div><label for="lname" class="form-label">Last Name: </label>
                                                <input type="text" class="form-control" id="lname" required></div>
                                        </div>
                                        <div class="col-lg-6 border-black border">
                                            <div><label for="initial" class="form-label">Initial: </label>
                                                <input type="text" class="form-control" id="initial" required></div>
                                            <div><label for="suffix" class="form-label">Suffix: </label>
                                                <input type="text" class="form-control" id="suffix" required></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">Contact</div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">
                                            <div><label for="email" class="form-label">Email: </label>
                                                <input type="text" class="form-control" id="email" required></div>
                                            <div><label for="phone" class="form-label">Phone: </label>
                                                <input type="text" class="form-control" id="phone" required></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 border-black border"></div>
                                        <div class="col-lg-4 border-black border">
                                            <p>Change Password</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>


                        {{-- Change Password --}}
                        <div class="col-lg-6 d-flex justify-content-center border-black border change-password">
                            <div class="container" id="changePassword" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-12 border-black border">
                                        <h5>Update Password</h5>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">
                                            <p>Password Requirements: Must be up to 8 Characters with upper and lowecase letters and special Characters</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">
                                            <p>Current Password:</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">
                                            <input type="text" class="form-control" id="password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">
                                            <p>New Password:</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">
                                            <input type="text" class="form-control" id="newpassword" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">
                                            <p>Confirm Password</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">
                                            <input type="text" class="form-control" id="confirmpassword" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-7 border-black border"></div>
                                        <div class="col-lg-5 border-black border">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 border-black border">
                                                        <p>Cancel</p>
                                                    </div>
                                                    <div class="col-lg-6 border-black border">
                                                        <p>Save</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        
                        {{-- Add User --}}
                        <div class="col-lg-6 d-flex justify-content-center border-black border form-section" id="addUserForm">
                            <div class="container" id="editForm" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-4 border-black border">User Image</div>
                                    <div class="col-lg-8 border-black border">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 border-black border">Position</div>
                                                <div class="col-lg-12 border-black border">
                                                    <label for="addFirstName" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="addFirstName" required>
                                                </div>
                                                <div class="col-lg-12 border-black border">
                                                    <label for="addDescription" class="form-label">Description</label>
                                                    <input type="text" class="form-control" id="addDescription" required>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">Access</div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 border-black border">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Select Business
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li class="dropdown-item">
                                                        <input type="checkbox" id="kuwago1" name="options" value="Kuwago 1">
                                                        <label for="kuwago1">Kuwago 1</label>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <input type="checkbox" id="kuwago2" name="options" value="Kuwago 2">
                                                        <label for="kuwago2">Kuwago 2</label>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <input type="checkbox" id="Uddesign" name="options" value="Uddesign">
                                                        <label for="uddesign">Uddesign</label>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <input type="checkbox" id="option4" name="options" value="Option 4">
                                                        <label for="option4"> Option 4</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 border-black border">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Role
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="#">Kuwago</a></li>
                                                    <li><a class="dropdown-item" href="#">Uddesign</a></li>
                                                    <li><a class="dropdown-item" href="#">Finance</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">Setup New Account</div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">
                                            <label for="addPhone" class="form-label">Phone: </label>
                                            <input type="text" class="form-control" id="addPhone" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">
                                            <label for="email" class="form-label">Phone: </label>
                                            <input type="text" class="form-control" id="email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 border-black border">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="text" class="form-control" id="password" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 border-black border"></div>
            <div class="col-lg-2 border-black border"><i class="fa-regular fa-trash-can"></i></div>
        </div>
    </div>

</body>

<script>
    document.querySelectorAll('input[type="checkbox"][name="options"]').forEach(checkbox => {
    checkbox.addEventListener('change', () => {
        let selectedOptions = Array.from(document.querySelectorAll('input[type="checkbox"][name="options"]:checked'))
                                    .map(checkbox => checkbox.value);
        document.getElementById('dropdownMenuButton').innerText = selectedOptions.length ? selectedOptions.join(', ') : 'Select Options';
    });
});
</script>
<script>
    function showEditForm() {
        document.getElementById('editForm').style.display = 'block';
    }
</script>

</html>