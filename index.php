<?php include('includes/head.php');?>

    <div class="container">
<?php //$userDetails = $_SESSION['User']['id']; ?>
<?php 
if(isset($_POST) && !empty($_POST)) {
    
}

?>
        
        
      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="input-block-level" placeholder="Username"  name="username">
        <input type="password" class="input-block-level" placeholder="Password" name="password">
        <input type="hidden" class="input-block-level"  name="login" value="login">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->

<?php include('includes/foot.php');?>