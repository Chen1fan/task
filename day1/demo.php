<?php
//1.移出数组中第一个元素
//$a=array("a"=>"red","b"=>"green","c"=>"blue");
//echo array_shift($a);
//print_r ($a);

//2.数组开头插入元素
//$a=array("red","green","blue");
//echo array_unshift($a,'123');
//print_r ($a);

//3.删除数组中最后一个元素
//$a=array(1,2,3);
//echo array_pop($a);
//print_r($a);

//4.s数组末尾插入元素
//$a=array(1,2,3);
//echo array_push($a,4,5);
//print_r($a);
//5.计算数组中所有值的和
//$a=array(1,3,5);
//echo array_sum($a);

//6.返回数组随机键的值
//$a =array(1,2,3);
//echo array_rand($a);

//7.返回数组中所有的值
//$a =array(1,2,3);
//print_r(array_values($a));

//8.按照键值降序排序
//$a=array(1,99,88,2);
//$a = arsort($a);

//9.按照键值生序排序
//$a=array(1,99,88,2);
//$a = asort($a);

//10.统计数组元素个数
//$a = array(1,5,6,3,4,4);
//echo count($a);


//字符串：
//1.统计字符串长度
//$str='23sa232da32a3';
//strlen($str);

//2.字符串转换为大写
// $str = 'AjjsjkdN';
// echo strtoupper($str);

// 3.字符串转换为小写
// $str = 'AjjsjkdN';
// echo strtolower($str);

// 4.去除左右边空白
// $str ='  sahfha   ';
// echo trim($str);
// 
// 5.去除右边空白
// $str ='  sahfha   '
// echo rtrim($str);
// 
// // 6.去除左边空白
// $str ='  sahfha   '
// echo ltrim($str);
// 
// 7.将字符串首字母大写
// $str = 'ajsnnf';
// echo ucfirst($str);
// 
// 8.字符串替换
// str_replace("world","Peter","Hello world!");


// 9.//输出字符中的某部分
// echo strstr("Hello world!","world");
// 10.字符串截取
// echo substr("Hello world",6);
//算法题
echo $str1 = '123ABCabc._?';
$str = 'Have you ever gone shopping and';
echo "<pre>";
$arr=[];
for($i=0;$i<=strlen($str);$i++){
    if (array_key_exists($str[$i],$arr)){
//        print_r($arr);
        $arr[$str[$i]]+=1;
        if ($arr[$str[$i]]==3){
            echo $str[$i];
            break;
        }
    }else{
        $arr[$str[$i]]=1;
    }
}
