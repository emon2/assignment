<?php
echo "Printing even numbers from 2 to 20 using a for loop.\r\n";
$start = 1;
for ($i= $start + 1; $i <= 20; $i+=2) { 
    echo $i."\t";
}
?>

<?php
echo "Printing even numbers from 2 to 20 using a while loop.\r\n";
$start = 1;
$i = $start + 1;
while ($i <= 20) {
    echo $i."\t";
    $i += 2;
}
?>

<?php
echo "Printing even numbers from 2 to 20 using a do-while loop.\r\n";
$start = 1;
$i = $start + 1;
do {
    echo $i."\t";
    $i += 2;
} while ($i <= 20);
?>