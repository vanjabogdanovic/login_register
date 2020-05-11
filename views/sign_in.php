<?php

require_once ('templates/sign_header.php');

?>

<div class="card-header">
    <h1 class="card-title text-center">Sign In</h1>
</div>
<div class="card-body">
    <?php require_once ('templates/sign_errors.php'); ?>
    <form action="../routes/routes.php" method="POST">
        <input type="text" name="username" placeholder="Username" class="form-control form-control-lg mb-2">
        <input type="password" name="password" placeholder="Password" class="form-control form-control-lg mb-2">
        <input type="submit" name="sign_in" class="btn btn-outline-primary btn-block p-2">
    </form>
    <p class="card-text text-center mt-4 mb-4">OR</p>
    <a href="sign_up.php" class="btn btn-outline-secondary btn-block p-2">SIGN UP</a>

<?php

require_once ('templates/sign_footer.php')

?>