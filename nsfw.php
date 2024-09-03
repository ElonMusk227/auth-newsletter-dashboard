<?php
    $i = 2010;
    $age = null;
    if(!empty($_POST['birthday']))
    {
        setcookie('birthday',  $_POST['birthday']);
        $birthday = $_POST['birthday'];
    }
    if(!empty($_COOKIE['birthday']))
    {
        $birthday = (int)$_COOKIE['birthday'];
        $age = (int)date('Y') - $birthday;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <?php if($age >= 18): ?>
        <h1>Du contenu high tech</h1>
    <?php else: ?>
    <div class="justify-content-center justify-center text-center mt-5">
        <h1 >Enter ur age</h1>
        <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, officiis debitis numquam eligendi perferendis aliquam provident omnis dolor quam illo porro aut. Esse aliquid voluptatibus beatae saepe officiis similique iure.</p>
        <form action="" method="post" class="form-group">
            <select class="form-control" name="birthday" id="">
                <?php while(1919 <= $i && $i <= 2010): ?>
                    <option value="<?=$i?>"><?= $i ?></option>
                <?php $i-- ?>
                <?php endwhile ?>
            </select> <br>
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </div>
    <?php endif ?>
</body>
</html>