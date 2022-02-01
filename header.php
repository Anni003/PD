<?php
require("session.php");
echo'
   <header class="header">
   <div class="container">
       <div class="header_inner">
           <div>
               <a class="header_logo" href="#map">WetPet</a>
           </div>'
?>
<?php if(isset($user) && $user!=''):?> 
                    <label>Добро пожаловать, <?=$user?>! </label>
<?php endif;?> 

<?php
        echo'
           <nav class="nav">
               <a class="nav_link" href="#">' . $nav1 . '</a>
               <a class="nav_link" href="#section">' . $nav2 . '</a>
               <a class="nav_link" href="#cont">' . $nav4 . '</a>
               <a class="nav_link" href="all-comments.php">Comment</a>';
?>

<?php if(isset($user) && $user!=''):?> 
                <form class=nav_link method="LINK" action="logout.php">
                    <input type="submit" class="btn-enter" value="<?php echo $auth; ?>">  
               </form>
            <?php else:?>
                <form class=nav_link method="LINK" action="login.php">
                    <input type="submit" class="btn-enter" value="<?php echo $auth; ?>">  
               </form>
            <?php endif;?>               
           </nav>
       </div>
   </div>
</header>
