<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/dashpayroll.css">
    <link rel="stylesheet" href="CSS/fontsize.css">
    <link rel="stylesheet" href="CSS/font.css">
    <link rel="stylesheet" href="toastr/toastr.min.css">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Dashpayroll</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 margin-top mx-auto d-block">
                <div class="card shadow border-0">
                    <div class="row no-gutters">
                        <div class="col-lg-5 bg-blue">
                            <div class="pt-5 px-4">
                                <img src="Images/dp-logo-white.png" style="width: 60px;" class="mx-auto d-block mb-4"><br>
                                <span class="text-white segoe-semilight fs-pt-9">Welcome to My WEBSITE!</span>
                                <hr class="border-white mt-2 mb-2">
                                <span class="segoe-bolder text-white fs-13">DASHPAYROLL</span>
                            </div>
                        </div>
                        <div class="col-lg-7 bg-whitesmoke pb-3">
                            <div class="mt-4 ml-4">
                                <span class="segoe-bold">Login</span>
                            </div>
                            <hr class="mx-4">
                            <img src="Images/user-profile.png" style="width: 90px;" class="mx-auto d-block">
                            <!-- <input type="text" name="username" class="o-5 border-thin border-color bt-none bl-none br-none ml-4"> -->
                            <div class="form-group mx-4 mt-5">
                                <input type="text" name="username" class="bg-whitesmoke form-control login-input no-border-radius fs-pt-9 rounded-0" placeholder="Username">
                            </div>
                            <div class="form-group mx-4 mb-5">
                                <input type="password" name="password" class="bg-whitesmoke form-control login-input fs-pt-9 rounded-0" placeholder="Password">
                            </div>
                            <div class="form-group mx-4">
                                <button id="next" class="btn btn-block btn-info rounded-0 fs-11 segoe-semilight">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="toastr/toastr.min.js"></script>
    <script src="js/login.js"></script>
</body>
</html>
