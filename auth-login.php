<?php
    require "partials/db.php";

    $data=$_POST;

    if ( isset($_POST['do_login']) ) { // нажата кнопка в форме

        $errors = array();


        

        $login = $_POST['Login_manager'];                    // получение логина из формы
        $password = $_POST['Password_manager'];              // получение пароля из формы




        $sql = $pdo->prepare("SELECT * FROM `managers` WHERE Login_manager = '$login'");
        $sql->execute();
        $user = $sql->fetch();
        $names = $pdo->prepare("SELECT 'Name_manager' FROM `managers` WHERE Login_manager = 'Artyfakt'");

        if( $user ) 
        {   // если логин существует

            
            if( @$data['Password_manager'] == $user['Password_manager'] ) // логиним!:)
            { 

              
                
                

                // if($login == "Artyfakt")
                // {
                //    $name_auth= "Vitaliy";
                //    $_POST['logged_user'] = 1;
                 //}
                // if($login == "Alsu")
                // {
                //     $name_auth ="Alsu";
                //     $_POST['logged_user'] = 2;
                // }

                echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=main.php ">';


               



                exit(); // прерываем работу скрипта, чтобы забыл о прошлом

            } 
            else 
            {
                $errors[] = 'Неверно введен пароль!';
            }
        } 
        else 
        {
            $errors[] = 'Пользователь с таким логином не найден!';
        }

        if( ! empty($errors) ) {            // вывод ошибок на экран        
            echo '<div align="center" style="color: white; background: red">' . array_shift($errors) . '</div><hr>';
        }
    }

?>




<!DOCTYPE html>
<html lang='ru'>

<head>
<?php //include "partials/title-meta.php" ?>
<?php include "partials/head-css.php" ?>
</head>


<body class="authentication-bg bg-primary">
    <div class="home-center">
        <div class="home-desc-center">

            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="px-2 py-3">


                                    <div class="text-center">
                                        <a href="#">
                                            <img src="assets/images/pic.png" height="80" alt="logo">
                                        </a>

                                        <h5 class="text-primary mb-2 mt-4">Welcome!</h5>
                                        <p class="text-muted">Sign in</p>
                                    </div>


                                    <form class="form-horizontal mt-4 pt-2" action="" method="POST">

                                        <div class="mb-3">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="Login_manager" value="<?php echo @$data['Login_manager']; ?>"
                                                placeholder="Enter username">                                                
                                        </div>

                                        <div class="mb-3">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" id="userpassword" name="Password_manager" value="<?php echo @$data['Password_manager']; ?>"
                                                placeholder="Enter password">
                                        </div>

                                        <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="customControlInline">
                                                    <label class="form-label"
                                                        for="customControlInline">Remember me</label>
                                                </div>
                                        </div>

                                        <div>
                                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit" name="do_login">Log In</button>
                                        </div>


                                        <div class="mt-4 text-center">
                                            <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                        </div>
    

                                    </form>

                                  
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>


        </div>
        <!-- End Log In page -->
    </div>

<?php include "partials/vendor-scripts.php" ?>
</body>

</html>