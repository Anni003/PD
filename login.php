<?php 
require("head.php");
require("header.php");
require("connectdb.php");

if(isset($_POST['submit']))
{
    $query = mysqli_query($connect,"SELECT * FROM Users WHERE `login`='".$_POST["login"]."' LIMIT 1");
    // $login = mysqli_real_escape_string($connect,$_POST['login']);
    $data = mysqli_fetch_assoc($query);
    
    if($data['password'] === md5(md5($_POST['password'])))
    { 
        session_start();
        $_SESSION["user"] = $_POST['login']; 
        header("Location: index.php"); exit();  
    }   
}
?>

<body id="search-intro">
    <div class="login">
        <div class="container-auth">
            <h2 class="info-text">Authorisation</h2>
                <form action="login.php" method="post">
                    <div class="sign-form">
                        <input class="sing-inp" type="text" name="login" id="login" placeholder="Введите логин..." required><br>
                        <input class="sing-inp" type="password" name="password" id="password" placeholder="Введите пароль..." required><br>
                    </div>
                    <input class="btn-4" name="submit" type="submit" value="Авторизироваться">
                </form>
                <br>
                <p class="section_text">Если вы еще не зарегистрированы, тогда нажмите <a class="link-color" href="signup.php">здесь</a>.</p>
                <p class="section_text">Вернуться на <a class="link-color" href="index.php">главную</a>.</p>
                <?php
                if(isset($_POST['submit'])) {
                     if($data['pass'] <> md5(md5($_POST['password'])))
                     {
                        echo "<p class='section_text-error'>Вы ввели неправильный логин/пароль</p>";
                     } 
                    }
                ?>     
		</div>
    </div>
</body>
</html>