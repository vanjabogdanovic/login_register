<?php

require_once ('templates/sign_header.php');

?>

<div class="card-header">
    <h1 class="card-title text-center">Sign Up</h1>
</div>
<div class="card-body">
    <?php require_once ('templates/sign_errors.php'); ?>
    <form action="../routes/routes.php" method="POST">
        <input type="text" name="username" placeholder="Username" class="form-control form-control-lg mb-2">
        <input type="text" name="email" placeholder="Email" class="form-control form-control-lg mb-2">
        <input type="password" name="password" placeholder="Password" class="form-control form-control-lg mb-2">
        <input type="password" name="password_confirm" placeholder="Re-password" class="form-control form-control-lg mb-2">
        <input type="submit" name="sign_up" class="btn btn-outline-primary btn-block p-2">
    </form>
    <p class="card-text text-center mt-4 mb-4">OR</p>
    <a href="sign_in.php" class="btn btn-outline-secondary btn-block p-2">SIGN IN</a>

<?php

require_once ('templates/sign_footer.php')

?>
