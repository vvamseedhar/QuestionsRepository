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
        <form class="form-signin" id="registerHere" method='post' action=''>
            
	    <h2 class="form-signin-heading">Please sign in</h2>
	 <div class="control-group">
		<label class="control-label" for="input01">Username</label>
	      <div class="controls">
	        <input type="text" class="input-xlarge" id="user_name" name="user_name" placeholder="Username">
	       
	      </div>
	</div>
	
	<div class="control-group">
		<label class="control-label" for="input01">Password</label>
	      <div class="controls">
	        <input type="password" class="input-xlarge" id="pwd" name="pwd"  placeholder="Password">
	        <input type="hidden" class="input-xlarge" value="login" name="login">
	       
	      </div>
	</div>
	
	
	<div class="control-group">
		<label class="control-label" for="input01"></label>
	      <div class="controls">
	       <button type="submit" class="btn btn-success" rel="tooltip" title="first tooltip">Login</button>
	       
	      </div>
	
	</div>
	</form>
        <?php } ?>
<script type="text/javascript">
	  $(document).ready(function(){
			$('#registerHere input').hover(function()
			{
			$(this).popover('show')
		});
			$("#registerHere").validate({
				rules:{
					user_name:"required",
					pwd:{
						required:true,
						minlength: 6
					}
				},
				messages:{
                                        user_name:"Enter your first and last name",
					pwd:{
						required:"Enter your password",
						minlength:"Password must be minimum 6 characters"
					}
				},
				errorClass: "help-inline",
				errorElement: "div",
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
