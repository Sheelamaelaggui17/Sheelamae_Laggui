<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        .background {
            background-color: white;
            position: relative;
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .form {
          
        }
    </style>
        <style>
* {
    box-sizing: border-box;
}
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.menu {
    overflow: hidden;
    background-color: #375737;
}
.menu h5 {
    float: left;
    display: block;
    color: #000000;
    text-align: center;
    padding: 10px;
    text-decoration: none; 
    color: white;
}
.menu a:hover {
    background-color: #375737;
    color: rgb(255, 255, 255);
}
.content {
    padding: 20px;
    display: none;
    position: relative;
}
.content.active {
    display: block;
}
.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: red;
    color: white;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    font-size: 16px;
    line-height: 16px;
    padding: 4px 8px;
}
@media screen and (max-width: 800px) {
    .menu a {
        float: none;
        width: 100%;
    }
}
</style>
</head>
<body class="hold-transition login-page background">
    </head>
<div class="menu">
<h5>Student Automated Registration Information System</h5>
</div>
<div class="container-fluid vh-100" style="margin-top:100px">
    <div class="" style="margin-top:100px">
        <div class="rounded d-flex justify-content-center">
            <div class="form col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                <div class="text-center">
                    <h3 style="font-weight: bold; color: #000000;">Create Account</h3>
                </div>
                <form action="include/signup.inc.php" method="post">
                    <div class="p-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="background-color: #375737;"><i
                                        class="bi bi-person text-white"></i></span>
                            <input type="text" class="form-control" placeholder="First Name" name="firstname" required>
                        </div>

                         <div class="input-group mb-3">
                            <span class="input-group-text" style="background-color: #375737;"><i
                                        class="bi bi-person text-white"></i></span>
                            <input type="text" class="form-control" placeholder="Middle Name" name="middlename" required>
                        </div>

                         <div class="input-group mb-3">
                            <span class="input-group-text" style="background-color: #375737;"><i
                                        class="bi bi-person text-white"></i></span>
                            <input type="text" class="form-control" placeholder="Last Name" name="lastname" required>
                        </div>


                        <div class="input-group mb-3">
                            <span class="input-group-text" style="background-color: #375737;"><i
                                        class="bi bi-envelope text-white"></i></span>
                            <input type="text" class="form-control" placeholder="Email" name="email" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" style="background-color: #375737;"><i
                                        class="bi bi-person-lines-fill text-white"></i></span>
                            <input type="text" class="form-control" placeholder="Contact Number" name="number" required>
                        </div>

            
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="background-color: #375737;"><i
                                        class="bi bi-person-plus-fill text-white"></i></span>
                            <input type="text" class="form-control" placeholder="Username" name="username" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="background-color: #375737;"><i
                                        class="bi bi-key-fill text-white"></i></span>
                            <input type="password" class="form-control" placeholder="password" name="password" required>
                        </div>
                        <button style="background-color: #375737; color: white;" class="btn text-center mt-4 col-md-12"
                                type="submit" name="submit">
                            Sign Up <i class="bi bi-box-arrow-right text-white"></i>
                        </button>
                        <p class="text-center mt-3">Already have an account?
                            <span><a href="index.php" style="color: #37576f;">Log In</a></span>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>