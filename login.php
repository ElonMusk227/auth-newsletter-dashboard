<?php
    $title  = 'Login page';
    $error = null;
     if(!empty($_POST['username']) && !empty($_POST['password']))
     {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        if($_POST['username'] === 'Isaac' && password_verify($_POST['password'], $password) )
        {
            session_start();
            $_SESSION['connected'] = 1;
            header('Location: dashboard.php');
        }else{
            $error = 'Identifiants incorrects';
        }
     }
    require 'functions/auth.php';
    if(is_connected())
    {
        header('Location: dashboard.php'); 
        exit();
    }
    require 'header.php';
?>
    <?php if($error): ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php endif ?>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" name="username" placeholder="Entrer votre username" id="">
        </div>
        <div class="from-group">
            <input type="password" name="password" placeholder="Entrer votre mot de passe" id="">
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>



<?php  require 'footer.php' ?>