<?php
// pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

for( $i = 0; $i < 5; $i++ ) {
    echo "Hello World! <br>";
}

echo "<hr>";
$i=0;
while ($i < 5) {
    echo "Hello World! <br>";
$i++;
}
// while dikerjakan 0 kali jika false

echo "<hr>";

$i=0;
do {
    echo "Hello World! <br>";
    $i++;
}
while ( $i < 5  );
// do while dikerjakan 1 kali jika false

echo "<hr>"

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
            for ($i = 1; $i <= 3; $i++ ){
                echo "<tr>";
                for( $j = 1; $j <= 5; $j++ ){
                    echo "<td>$i,$j</td>"; 
                }
                echo"</tr>";

            }

        ?>

    </table>
</body>
</html>

<hr>
<!-- untuk pisah tag html dan php -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=<, initial-scale=1.0">
     <title>Document</title>
     <style>
         .warna-baris {
             background-color:silver;
         }
     </style>
 </head>
 <body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for( $i =1; $i<=5; $i++ ) : ?>
            <!-- pengkondisian baris ganjil -->
          <?php if ($i % 2 == 1) : ?>
            <tr class="warna-baris">
          <?php else : ?>
            <tr>
          <?php endif; ?>
                <?php for( $j=1; $j <= 5; $j++ ) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor ; ?>
                </tr>
        <?php endfor ;?>
        
 </body>
 </html>

