<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
        setcookie('name', $name, time() + 10);
        $_COOKIE['name'] = $name;
    }

    if (isset($_COOKIE['name'])) {
        $name = $_COOKIE['name'];
        $return = true;
    } else {
        $return = false;
    }

    ?>

    <?php if ($return) { ?>

        <h1> welcome <?php echo $name; ?></label>

        <?php } else { ?>

            <form method="POST">

                <h1>welcom pleas write your name</h1>
                <input type="text" name="name" id="">
                <input type="submit" value="submit">

            </form>

        <?php } ?>
</body>

</html>