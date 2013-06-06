<?php include('includes/head.php');?>

    <div class="container">
        <?php 
        //session_unset();
        $loggedUser = $_SESSION;
        if(!isset($loggedUser['User']) && empty($loggedUser['User'])) {
            include('login.php');
        } else {
            
        } ?>
    </div> <!-- /container -->

<?php include('includes/foot.php');?>