<?php
if (!empty($_POST)){
    $num = $_POST['num'];
    $hundreds = floor( $num / 100);    //分解出百位
    $tens = floor( $num / 10 ) % 10;    //分解出十位
    $ones = floor( $num % 10 );    //分解出个位
    if ($hundreds*$hundreds*$hundreds+$tens*$tens*$tens+$ones*$ones*$ones==$num){
        echo $num.'是水仙花数';
    }else{
        echo $num.'不是水仙花数';
    }
}
?>
<form action="demo.php" method="post">
<input type="text" maxlength="3" name="num">
<input type="submit">
</form>

