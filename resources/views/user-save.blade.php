<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap-5.0.2-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- Fontowsome CSS -->
    <link href="{{asset('fontawesome-free-6.5.1-web/css/all.min.css')}}" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="{{asset('bootstrap-5.0.2-dist/js/bootstrap.min.js')}}"></script>

    <!-- JQuery -->
    <script src="{{asset('jquery-3.7.1.min.js')}}"></script>

    <style>
        .user-list .profile-img {
            max-width: 100px;
            max-height: 100px;
        }

        .form-control:focus,
        .btn:focus {
            box-shadow: none;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>

    <script>
        function setFileInputName(e) {
            let fileName = (e.target.files.length > 0) ? e.target.files[0].name : 'Select profile image';
            $('#profile-image-label').text(fileName);
        }
    </script>
  </head>
  <body>
    <!-- user list -->
   
    <div class="container">
        <div class="card">
            <a href="{{url('users')}}" class="card-header text-decoration-none text-end">
                <i class="fa-solid fa-users"></i> Users
            </a>
        </div>
        <form action="{{url('/users/save')}}" method="post" class="card" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                User
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <div class="form-group w-75 me-2 my-2">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group w-25 my-2">
                        <label>Age</label>
                        <input type="number" name="age" class="form-control" placeholder="Age">
                    </div>
                </div>
                <div class="d-flex">
                    <div class="form-group w-75 me-2 my-2">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group w-25 my-2">
                        <label>Phone No</label>
                        <input type="number" name="phone_number" class="form-control" placeholder="Phone No">
                    </div>
                </div>
                <div class="d-flex">
                    <div class="input-group w-75 me-2 my-2">
                        <span class="input-group-text">Profile</span>
                        <label for="profile-image" id="profile-image-label" tabindex="0" class="form-control">
                            Select profile image
                        </label>
                        <input type="file" name="profile_image" id="profile-image" onchange="setFileInputName(event)" hidden>
                    </div>
                    <div class="form-group w-25 my-2 d-flex align-items-center">
                        <label class="mx-1">
                            <input type="radio" name="gender" value="M"> Male
                        </label>
                        <label class="mx-1">
                            <input type="radio" name="gender" value="F"> Female
                        </label>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary mx-2">Save</button>
                <button type="reset" class="btn btn-link">Cancel</button>
            </div>
        </form>
    </div>
  </body>
</html>