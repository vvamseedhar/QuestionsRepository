<?php include('includes/head.php');?>
    <?php 
        //session_unset();
        $loggedUser = $_SESSION;
        if(isset($loggedUser['User']) && !empty($loggedUser['User'])) {
            ?>
    <div id="wrap">
        <?php
            $action = isset($_GET['action']) ? $_GET['action'] : "";
            
            if(isset($action) && !empty($action) && $action != "logout") {
                include('includes/nav.php');
                include('php/'.$action.'.php');
            } else if($action == "logout"){
                session_unset();
                
                include('login.php');
                //header("Location:". HTTP_ROOT );
            } else {
                include('includes/nav.php');
                include('php/dashboard.php');
            }
             ?>
            </div>

        <?php
        } else {
     
            echo '<div id="wrap">';
            include('login.php');
            echo '</div>';
        } include('includes/foot.php');?>