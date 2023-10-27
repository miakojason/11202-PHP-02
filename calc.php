<?php
// 判斷$_GET有沒有值特例要用empty(),isset()換判斷true因為get是系統預設
if(!empty($_GET)){
    if($_GET['weight']!='' && $_GET['height']!='' ){

$weight=(!empty($_GET['weight']))?$_GET['weight']:'沒有體重資料';
$height=(!empty($_GET['height']))?$_GET['height']:'沒有身高資料';
    $bmi=round($weight/($height*$height),2);
    header("location:bmi.php?w=$weight&h=$height&bmi=$bmi");
}else{
    header("location:bmi.php?m=請輸入合法的身高或體重資料");
}
// $weight=$_GET['weight']??'沒有體重資料';
// $height=$_GET['height']??'沒有身高資料';
// round設定只顯小數幾位round(xx,2)2位
echo "體重/:".$weight;
echo "身高/:".$height;
echo"BMI為:".$bmi;
echo"<hr>";
// $_GET本身也是個變數也可以這樣寫
// echo "體重:".$_GET['weight'];
// echo "身高:".$_GET['height'];
}else{
    header("location:bmi.php?m=請輸入必要的資料");
    // echo"請輸入必要的資料";
}
?>