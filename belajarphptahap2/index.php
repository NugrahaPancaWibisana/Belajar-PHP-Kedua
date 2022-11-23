<?php 
// Pengulangan
// for
// while
// do while
// foreach : pengulangan khusus array

for( $x = 0; $x < 5; $x++ ) {
    echo "Hello world! <br>";
}


$y = 0;
while( $y < 5 ) {
    echo "Hello world! <br>";
    $y++;
}


$z = 0;
do {
    echo "Hello world! <br>";
    $z++;
} while( $z < 5 );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
        for( $i = 1; $i <= 3; $i++ ){
            echo "<tr>";
            for( $j = 1; $j <= 5; $j++ ){
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
        ?>
        <?php for( $x = 1; $x <= 3; $x++ ): ?>
            <tr>
                <?php for( $y = 1; $y <= 5; $y++ ): ?>
                    <td><?= "$x, $y"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
<?php 
// Pengkondiisian
// if else
// if else if else
// ternary
// switch

$x = 20;
if( $x < 20 ) {
    echo "benar";
} else if( $x == 20 ){
    echo "well";
} else {
    echo "salah";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .b {
        background-color: #303030;
        color: #ffffff;
    }
</style>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
    <?php for( $x = 1; $x <= 10; $x++ ): ?>
        <?php if ( $x % 2 == 1 ): ?>
            <tr class="b">
        <?php else: ?>
            <tr>
        <?php endif; ?>
                <?php for( $y = 1; $y <= 10; $y++ ): ?>
                    <td><?= "$x, $y"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
<?php  ?>