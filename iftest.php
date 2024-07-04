<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if($_POST['lang'] === 'ar'){
                echo $_POST['username'];
                // header('location: ar.php');
                // exit();
            }
            if($_POST['lang'] === 'en'){
                header('location: en.php');
                exit();
            }
            if($_POST['lang'] === 'fr'){
                header('location: fr.php');
                exit();
            }
        }
    ?>
    <form action="" method="POST">
        <input type="text" name="username">
        <select name="lang" id="">
            <option value="ar">Arabic</option>
            <option value="en">English</option>
            <option value="fr">Frinch</option>
            <option value="sp">Espain</option>
        </select>
        <input type="submit" value="GO">
    </form>
</body>
</html>