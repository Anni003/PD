<?php 
   require("session.php");

    if(isset($user) && $user!=''){
        $auth = 'Выйти';
    }
    else {
        $auth = 'Войти';
    }

    require("head.php");
    require("header.php");
    require("connectdb.php");

    if (isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else $page=1;
    $limit = 4;
    $from = ($page-1) * $limit;

    $result = mysqli_query($connect, "SELECT * FROM Clients ORDER BY `client_id` DESC LIMIT $from, $limit");
    ?>
    <body id="search-intro">
    <div class="intro-1">
        <div class="container">
            <div class="intro_inner">
                <div class="container">
                    <p class="info-text">All comments</p>
                    <?php
                    while ($comment = mysqli_fetch_assoc($result)) {
                    ?>
                    <table class="table-1"> 
                        <tbody> 
                            <tr class="user">                
                                <td>
                                    <p >Пользователь: <b><?php echo $comment["login"]; ?></b></p>
                                </td>
                            </tr>
                            <tr class="name_content">
                                <td class="td-1">
                                    <?php echo $comment["name"]; ?><br>
                                </td>
                                <td class="td-2">
                                    <?php echo $comment["text"]; ?>
                                </td>
                            </tr>
                        </tbody> 
                    </table>
                    <?php
                    }
                    ?>
                </div>
                <div class="pagin">
                     <?php
                     $result = mysqli_query($connect, "SELECT COUNT(*) as count FROM Clients");
                     $count = mysqli_fetch_assoc($result)['count'];
                     $pagesCount = ceil($count/$limit);
                        if($page <> 1){
                            $prev = $page - 1;
                            echo "<a class='sss' href=\"?page=$prev\">ᐊ</a>    ";
                        }
                        else echo "<a class='sss-1' href='' disabled>ᐊ</a>    ";
                        print_r($page);
                        if($page <>  $pagesCount){
                            $next = $page + 1;
                            echo "    <a class='sss' href=\"?page=$next\">ᐅ</a> ";
                            }
                        else  echo " <a class='sss-1' href='' disabled>ᐅ</a>    ";
                    ?>
                </div>
                <div class="button-inner">     
                     <form method="LINK" action="index.php">
                            <button class="btn-1">На главную</button>
                     </form>
                </div>  
            </div>
        </div>
    </div>
</body>
</html>