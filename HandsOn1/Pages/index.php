<?php
$h1 = "Hello Mathieu!";
$h2 = "Testing 1! 2! 3!";

echo "<br>";
$holder = true;
$empty = false;

$num = 8;
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>2nd Page HTML from PHP</title>
    </head>

    <body>
        <div class="container">
            <h1><?php echo $h1 ?></h1>
            <h2><?php echo $h2 ?></h2>
        </div>

        <!-- XXX Conditional Implementation Sample 1-->
        <div class="container">
            <?php if ($holder): ?>
                <h3>
                    <?php echo "Certified"; ?>
                </h3>
            <?php else: ?>
                <h3>
                    <?php echo "Not Certified"; ?>
                </h3>
            <?php endif ?>
        </div>

        <!-- XXX Conditional Implementation Sample 2-->
        <div class="container">
            <?php for ($i = 1; $i < $num; $i++): ?>
                <h4>
                    <?php
                    echo "Welcome to " . $i . "<br>";
                    if ($i == ($num - 1)) {
                        echo " Stars";
                    }
                    ?>
                </h4>
                <?php
            endfor
            ?>
    </body>

</html>