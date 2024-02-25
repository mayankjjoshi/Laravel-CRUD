<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Users</title>
    
        <!-- Bootstrap CSS -->
        <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Fontowsome CSS -->
        <link href="fontawesome-free-6.5.1-web/css/all.min.css" rel="stylesheet">
    
        <!-- Bootstrap JS -->
        <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    
        <!-- JQuery -->
        <script src="jquery-3.7.1.min.js"></script>
    
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
<body
    <br>
    {{-- print url of website --}}
      {{-- {{url('')}} 
      {{asset('')}} --}}
       <!-- user list -->
    <div class="container user-list">
        <div class="card">
            <a href="{{url('/users/save')}}" class="card-header text-decoration-none text-end">
                <i class="fa-solid fa-user-plus"></i> User
            </a>
        </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th>Users</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                  <th>
                    <?php 
                        $imgpath;
                        if(!empty($user->profile_image)){
                            $imgpath = asset($user->profile_image);
                        }else{
                            $imgpath = "https://bootday.com/img/Content/avatar/avatar3.png";
                        }
                    ?>
                      <img src="{{$imgpath}}" class="profile-img rounded mx-auto d-block">
                  </th>
                  <td>
                      <a href="#" class="fs-3">{{$user->name ?? "N/A"}}</a>
                      <p>Age: {{$user->age ?? "N/A"}}</p>
                      <p class="d-inline-block me-2">
                          <i class="fa-solid fa-envelope"></i>
                          {{$user->email ?? "N/A"}}
                      </p>
                      <p class="d-inline-block">
                          <i class="fa-solid fa-square-phone"></i>
                          {{$user->phone_number ?? "N/A"}}
                      </p>
                  </td>
                  <td>
                      <a href="#" class="mx-2"><i class="fa-solid fa-pen-to-square"></i></a>
                      <a href="#" class="mx-2 text-danger"><i class="fa-solid fa-trash-can"></i></a>
                  </td>
              </tr> 
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>