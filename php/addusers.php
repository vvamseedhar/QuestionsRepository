<?php
$userName = "";
$password = "";
if(isset($_POST['adduser']) && !empty($_POST['adduser']) && $_POST['adduser'] == "adduser") {
     $userName = $_POST['user_name'];
    $password = $_POST['pwd'];
    $usersSql = "SELECT id, user_name, user_type, password FROM users WHERE user_name LIKE '$userName' " ;
    $usersItem = db_execute($dbh, $usersSql);
    $userDetails = $usersItem->fetchAll(PDO::FETCH_ASSOC);
    $errorMessage = '';
    $successMessage = '';
    if(!empty($userDetails)) {
        $errorMessage = "User already exist!";
    } else {
            //insert into table  
        $time = time();
        $sql = "INSERT INTO users (user_name, password, user_type, user_status, timestamp) VALUES ('$userName','$password', 2, 1, '$time') ";
        $sth=db_exec($dbh,$sql);
        $successMessage = 'User added successfuly';
        $userName = "";
        $password = "";
    }
}
 ?>
    
<header class="head">
                <div class="search-bar">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="search-bar-inner">
<!--                                <a id="menu-toggle" href="#menu" data-toggle="collapse" class="accordion-toggle btn btn-inverse visible-phone" rel="tooltip" data-placement="bottom" data-original-title="Show/Hide Menu">
                                    <i class="icon-sort"></i>
                                </a>

                                <form class="main-search">
                                    <input class="input-block-level" type="text" placeholder="Live search...">
                                    <button id="searchBtn" type="submit" class="btn btn-inverse"><i class="icon-search"></i>
                                    </button>
                                </form>-->
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ."main-bar -->
                <div class="main-bar">
                    <div class="container-fluid">
                        <div class="row-fluid">
                            <div class="span12">
                                <h3><i class="icon-edit"></i> Add Users</h3>
                            </div>
                        </div>
                        <!-- /.row-fluid -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.main-bar -->
            </header>
<div id="content" class="">
                <!-- .outer -->
                <div class="container-fluid outer">
                    <div class="row-fluid">
                        <!-- .inner -->
                        <div class="span12 inner">
                            <!--BEGIN INPUT TEXT FIELDS-->
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="box dark">
                                        <header>
                                            <div class="icons"><i class="icon-edit"></i></div>
                                            <h5>Enter user details</h5>
                                            <!-- .toolbar -->
                                            <div class="toolbar">
                                                <ul class="nav">
                                                    <li><a href="javascript:void(0);">Link</a></li>
                                                    <li class="dropdown">
                                                        <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0);">
                                                            <i class="icon-th-large"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="javascript:void(0);">q</a></li>
                                                            <li><a href="javascript:void(0);">a</a></li>
                                                            <li><a href="javascript:void(0);">b</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="accordion-toggle minimize-box" data-toggle="collapse" href="#div-1">
                                                            <i class="icon-chevron-up"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.toolbar -->
                                        </header>
                                        <div id="div-1" class="accordion-body body in collapse" style="height: auto;">
                                            <?php
                                            if(isset($errorMessage) && !empty($errorMessage)) {
                                            ?>
                                                <div class="alert alert-error">
                                                      <?php echo $errorMessage; ?>
                                                </div>
                                            <?php } else if(isset($successMessage) && !empty($successMessage)) { ?>
                                                <div class="alert alert-success">
                                                      <?php echo $successMessage; ?>
                                                </div>
                                            <?php }
                                            ?>
                                            <form class="form-horizontal" id="registerHere" method='post' action=''>
                                                <div class="control-group">
                                                  <label class="control-label" for="input01">Name</label>
                                                  <div class="controls">
                                                    <input type="text" class="input-xlarge" id="user_name" name="user_name" value="<?php echo $userName; ?>" placeholder="Username">

                                                  </div>
                                            </div>

                                            <div class="control-group">
                                                    <label class="control-label" for="input01">Password</label>
                                                  <div class="controls">
                                                    <input type="password" class="input-xlarge" id="pwd" name="pwd" value="<?php echo $password; ?>" placeholder="Password">

                                                  </div>
                                            </div>
                                            <div class="control-group">
                                                    <label class="control-label" for="input01">Confirm Password</label>
                                                  <div class="controls">
                                                    <input type="password" class="input-xlarge" id="cpwd" name="cpwd" value="<?php echo $password; ?>"  placeholder="Confirm Password">
                                                    <input type="hidden"   name="adduser" value="adduser" >

                                                  </div>
                                            </div>

                                            <div class="control-group">
                                                    <label class="control-label" for="input01"></label>
                                                  <div class="controls">
                                                   <button type="submit" class="btn btn-success" rel="tooltip" title="first tooltip">Add user</button>

                                                  </div>

                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- /.row-fluid -->
                </div>
                <!-- /.outer -->
            </div>

                
                <script type="text/javascript">
	  $(document).ready(function(){
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