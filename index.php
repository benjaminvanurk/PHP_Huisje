<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huisje</title>
</head>
<body>
    <!-- Invulformulier voor hoogte dak en muur -->
<form name="form" action="" method="get">
    <p>Height roof:</p>
    <input type="number" name="hoogte_dak" placeholder="Type here..." required min = 1>
    <p>Height wall:</p>
    <input type="number" name="hoogte_muur" placeholder="Type here..." required min = 1>
    <input type="submit" class="btn">
</form>


<!-- Koppel de andere bestanden -->
<?php include_once('functies.php') ?>
<style><?php include('style.css') ?></style>

</body>
</html>