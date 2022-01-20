<?php
    require "partials/db.php";

    $data=$_POST;

    if ( isset($_POST['do_login']) ) { // нажата кнопка в форме

        $errors = array();

        $login = $_POST['login'];                    // получение логина из формы
        $password = $_POST['password'];              // получение пароля из формы

        $sql = $pdo->prepare("SELECT * FROM `clients_table` WHERE login = '$login'");
        $sql->execute();
        $user = $sql->fetch();

        if( $user ) {   // если логин существует

            if( @$data['password'] == $user['password'] ) // логиним!:)
            { 

                $_SESSION['logged_user'] = $user;
                
                echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=main.php">';
                exit(); // прерываем работу скрипта, чтобы забыл о прошлом

            } 
            else {
                $errors[] = 'Неверно введен пароль!';
            }
        } 
        else {
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
<?php include "partials/title-meta.php" ?>
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
                                            <img src="assets/images/logo-dark.png" height="22" alt="logo">
                                        </a>

                                        <h5 class="text-primary mb-2 mt-4">Welcome to BAMBEO !</h5>
                                        <p class="text-muted">Sign in to continue to Bambeo.</p>
                                    </div>


                                    <form class="form-horizontal mt-4 pt-2" action="" method="POST">

                                        <div class="mb-3">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="login" value="<?php echo @$data['login']; ?>"
                                                placeholder="Enter username">
                                        </div>

                                        <div class="mb-3">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" id="userpassword" name="password" value="<?php echo @$data['password']; ?>"
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