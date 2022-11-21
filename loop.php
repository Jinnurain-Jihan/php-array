<?php
    // Fibonacchi series using for loop
$F=0;
$S=1;
$number=10;
echo $F;
echo $S;
    for($i=1;$i<=$number-2;$i++){
        $N=$F+$S;
        echo $N;
        $F=$S;
        $S=$N;
    };
?>
<br><br>


<?php
    // Fibonacchi series using while loop
$F=0;
$S=1;
$number=10;
echo $F;
echo $S;
$i=1;
    while($i<=$number-2){
        $N=$F+$S;
        echo $N;
        $i++;
        $F=$S;
        $S=$N;
    };
?>
<br><br>


<?php
    // Fibonacchi series using do-while loop
$F=0;
$S=1;
$number=10;
echo $F;
echo $S;
$i=1;
do{ 
    $N=$F+$S;
    echo $N;
    $F=$S;
    $S=$N;
    $i++;
}
while($i<=$number-2)
    
?>


