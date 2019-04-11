<?php
//计算1-100的和
//第一种 将1-100放入数组，计算数组中值的和
$sum = array_sum(range(1,100));//array_sum统计数组中所有值的和，range定义一个范围数组
echo '1-100的和是'.$sum;echo '<br>';
//第二种 循环计算1-100之间所有数的和
$sum = 0;
for ($i=1;$i<=100;$i++){
    $sum += $i;
}
echo $sum;echo '<br>';

//第三种数学公式计算
$num = 100;
echo ($num+1)*($num/2);//（首项+末项）×（项数÷2）


//判断回文
$str = 'abba';echo '<br>';
$arr1=[];
$arr2=[];
for($i=0;$i<strlen($str);$i++){
    $arr1[$i]=$str[$i];
}
$arr2=array_reverse($arr1);
if ($arr1==$arr2){
    echo $str.'是回文字符串';
}else{
    echo $str.'不是回文字符串';
}
