    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
        <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/jquery.validate.js"></script>   
    
    
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">
        <link type="text/css" rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="assets/css/style.css">
        <link type="text/css" rel="stylesheet" href="assets/css/calendar.css">
        
        <link rel="stylesheet" href="assets/css/theme.css">  
        
        
        <script type="text/javascript" src="assets/js/lib/jquery.tablesorter.min.js"></script>
        <script type="text/javascript" src="assets/js/lib/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="assets/js/lib/DT_bootstrap.js"></script>
        <script src="assets/js/lib/responsive-tables.js"></script>
        <script type="text/javascript">
            $(function() {
                metisTable();
            });
        </script>
        
        <script type="text/javascript" src="assets/js/main.js"></script>
        
        
        <script type="text/javascript" src="assets/js/style-switcher.js"></script>
<link rel="stylesheet" href="assets/css/login.css">
<?php 
if(isset($_POST['login']) && !empty($_POST['login'])) {
    $userName = $_POST['user_name'];
    $password = $_POST['pwd'];
    $usersSql = "SELECT id, user_name, user_type, password FROM users WHERE user_name LIKE '$userName' " ;
    $usersItem = db_execute($dbh, $usersSql);
    $userDetails = $usersItem->fetchAll(PDO::FETCH_ASSOC);
    $message = '';
    if(!empty($userDetails)) {
        $queryPassword = $userDetails[0]['password'];
        if($queryPassword != $password) {
            $message = "Password dose not match, try again";
        } else {
            //write the session variables
            $_SESSION['User']['id'] = $userDetails[0]['id'];
            $_SESSION['User']['userName'] = $userDetails[0]['user_name'];
            //header("Location:". HTTP_ROOT );
            include('includes/nav.php');
            include('php/dashboard.php');
        }
    } else {
            $message = "Username not found";        
    }
}
    $loggedUser = $_SESSION;
    if(!isset($loggedUser['User']) && empty($loggedUser['User'])) {
        if(!empty($message)) {
        ?>
            <div class="alert alert-error">
                  <?php echo $message; ?>
            </div>
    <?php } ?>


<div class="container">
            <div class="row">
                <div class="span4 offset4">
                    <div class="signin">
                        <div id="logo">
                            
                        </div>
<!--                        <div class="tab-content">-->
                            <div id="login" class="tab-pane active">
                                <form class="form-signin" id="registerHere" method='post' action='<?php echo HTTP_ROOT; ?>'>
                                    <p class="muted ">
                                        Enter your username and password
                                    </p>
                                    <div class="control-group">
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-user"></i></span>
                                                
                                                <input type="text"  id="user_name" name="user_name" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-lock"></i></span>
                                                <input type="password"  id="pwd" name="pwd"  placeholder="Password">
                                                <input type="hidden" class="input-xlarge" value="login" name="login">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-inverse " type="submit">Sign in</button>
                                </form>
                            </div>
<!--                        </div>-->

                    </div>
                </div>
            </div>
        </div>



        <?php } else {
            ?>
                
            <?php
        } ?>
<script type="text/javascript">
	  $(document).ready(function(){
                $('.dropdown-toggle').dropdown();
			$('#registerHere input').hover(function()
			{
			$(this).popover('show')
		});
			$("#registerHere").validate({
				rules:{
					user_name:"required",
					user_email:{
							required:true,
							email: true
						},
					pwd:{
						required:true,
						minlength: 6
					},
					cpwd:{
						required:true,
						equalTo: "#pwd"
					},
					gender:"required"
				},
				messages:{
					user_name:"Enter your first and last name",
					user_email:{
						required:"Enter your email address",
						email:"Enter valid email address"
					},
					pwd:{
						required:"Enter your password",
						minlength:"Password must be minimum 6 characters"
					},
					cpwd:{
						required:"Enter confirm password",
						equalTo:"Password and Confirm Password must match"
					},
					gender:"Select Gender"
				},
				errorClass: "help-inline",
				errorElement: "span",
				highlight:function(element, errorClass, validClass) {
					$(element).parents('.control-group').addClass('error');
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).parents('.control-group').removeClass('error');
					$(element).parents('.control-group').addClass('success');
				}
			});
		});
	  </script>
