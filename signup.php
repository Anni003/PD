<?php 
require("head.php");
require("header.php");
require("connectdb.php");

if(isset($_POST['submit']))
{
    $err = [];
        
    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }

    $query = mysqli_query($connect, "SELECT id FROM Users WHERE `login`='".mysqli_real_escape_string($connect, $_POST['login'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        $err[] = "Пользователь с таким логином уже существует в базе данных";
    }

    if(count($err) == 0)
    {
        $login = $_POST['login'];
        $password = md5(md5(trim($_POST['password'])));
        $name = $_POST['name'];

        mysqli_query($connect,"INSERT INTO Users SET `login`='".$login."', password='".$password."', name='".$name."'");
        header("Location: login.php"); exit();
    }
}
?>

<body id="search-intro">
    <div class="signup">
        <div class="container-auth">
        <h2 class="info-text">Registration</h2>
                            <form action="signup.php" method="post">
                                <div class="sign-form">
                                    <input class="sing-inp" type="text" name="login" id="login" placeholder="Введите логин..."><br>
                                    <input class="sing-inp" type="text" name="name" id="name" placeholder="Введите имя..." required><br>
                                    <input class="sing-inp" type="password" name="password" id="password" placeholder="Введите пароль..."><br>
                                </div>
                                <input class="btn-4" name="submit" type="submit" value="Зарегистрироваться">
                            </form>
                            <br>
                            <p class="section_text">Если вы уже зарегистрированы, тогда нажмите, чтобы войти <a class="link-color" href="login.php">здесь</a>.</p>
                            <p class="section_text">Вернуться на <a class="link-color" href="index.php">главную</a>.</p>
                            <?php
                            if(count($err) != 0)
                            {
                                echo "<p class='section_text-error'>При регистрации произошли следующие ошибки:</p>";
                                foreach($err AS $error)
                                {
                                    echo "<p class='section_text-error'>! $error</p>";
                                }
                            }
                            ?>
                        </div>
    </div>                        
</body>
</html>