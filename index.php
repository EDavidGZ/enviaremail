<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <h2>Soporte</h2>
        <input type="text" placeholder="name" name="name" required="">
        <input type="email" placeholder="email" name="email" required="">
        <input type="text" placeholder="asunto" name="asunto" required="">
        <textarea placeholder="mensaje" name="msg"></textarea>
        <input type="submit" class="click">
    </form>
    <?php 
    include ("correo.php");
    ?>
</body>
</html>