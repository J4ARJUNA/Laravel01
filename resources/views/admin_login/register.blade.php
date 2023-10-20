<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="../assets/img/favicon.png">
<title>
    Material Dashboard 2 by Creative Tim
</title>
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<!-- Nucleo Icons -->
<link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<!-- CSS Files -->
<link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="g-sidenav-show bg-gray-200">
    <div class="container-fluid py-4 mt-5 color-grey">
        <div class="p-5 text-center bg-body-tertiary rounded-3">
            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 ">
                <i class="material-icons opacity-10">person</i>
            </div>
            <h1 class="text-body-emphasis pb-4">Register</h1>
            @if (Session::has('succes'))
                <div class="alert alert-succes">
                    {{Session::get('succes')}}
                </div>
            @endif
                <form  action="{{ route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                    <label for="name" class="form-label">User</label>
                    <input required type="name" class="form-control width-50" id="name" name="name" aria-describedby="name">
                    <div id="name" class="form-text">We'll never share your user_admin with anyone else.</div>
                    </div>
                    
                    <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input required type="password" class="form-control" name="password" id="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>



