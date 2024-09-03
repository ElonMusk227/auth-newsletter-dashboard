<?php
    $error = null;
    $email = null;
    $success = null;
    include '../functions.php';
    include '../config.php';
    if(!empty($_POST['email']))
    {
        $email = $_POST['email'];
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $file = __DIR__ . DIRECTORY_SEPARATOR . date('Y-m-d');
            file_put_contents($file, $email. PHP_EOL, FILE_APPEND);
            $success = 'Votre email a bien été enregistré';
        }else{
            $error = 'Email invalide';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
</head>
<body>
    <h1>S'inscrire a la newslettter</h1>
    <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem, ipsum et. Maxime vero aliquam consectetur at, veritatis unde modi assumenda ea. Magni ea ipsa incidunt necessitatibus voluptate itaque praesentium vero.
    </p>
    <?php if($success): ?>
        <div class="alert alert-success">
            <?= $success ?>
        </div>
    <?php endif ?>
    <?php if($error): ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php endif ?>
    <div class="justify-content-center text-center mx-2">
        <form action="" class="form-inline" method="post">
            <div class="form-group">
                <input type="email" name="email" placeholder="Entrer votre email" id="" value="<?= htmlentities($email) ?>" required>
               <button type="submit" class="btn btn-primary">S'inscrire</button>
            </div>
        </form>
    </div>
</body>