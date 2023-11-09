<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        body{
            background-color: lightblue;
        }
        h3{
            text-align: center;
font-size: 30px;

        }
        a{
            font-size: 20px;
            text-decoration: none;
            border: 1px solid lightslategray;
            border-radius: 20px;
            margin-bottom: 20px;

        }
        a:hover{
            background-color: lightsalmon;
        }
        .container{
            display:flex;
            margin:auto;
            justify-content:space-between;
           width: 350px;
        }
        table,th{
            border-collapse: collapse;
            border:1px solid black;
            margin: auto;
            text-align: center;
        }

        td{
            border:1px solid #999;
            text-align: center;
            width: 100px;
            height: 100px;

        }
        td:hover{
            background-color: lightsalmon;
        }
    </style>
</head>
<body>
<?php 
if(isset($_GET['month']) && isset($_GET['year'])){
    $month=$_GET['month'];
    $year=$_GET['year'];
}else{
    $month=date('m');
    $year=date("Y");
}

echo "<h3>";
echo date("西元{$year}年{$month}月");
echo "</h3>";
$thisFirstDay=date("{$year}-{$month}-1");
$thisFirstDate=date('w',strtotime($thisFirstDay));
$thisMonthDays=date("t");
$thisLastDay=date("{$year}-{$month}-$thisMonthDays");
$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);
$firstCell=date("Y-m-d",strtotime("-$thisFirstDate days",strtotime($thisFirstDay)));
?>
<div class="container">
<?php
$nextYear=$year;
$prevYear=$year;
if(($month+1)>12){
    $next=1;
    $nextYear=$year+1;
}else{
    $next=$month+1;
}
if(($month-1)<1){
    $prev=12;
    $prevYear=$year-1;
}else{
    $prev=$month-1;
}
?>
    <a href="?year=<?=$prevYear;?>&month=<?=$prev;?>">上一個月</a>
    <a href="?year=<?=$nextYear;?>&month=<?=$next;?>">下一個月</a>
</div>
<table >
    <tr>
        <th>日</th>
        <th>一</th>
        <th>二</th>
        <th>三</td>
        <th>四</td>
        <th>五</th>
        <th>六</th>
    </tr>
<?php
for($i=0;$i<$weeks;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        $addDays=7*$i+$j;
        $thisCellDate=strtotime("+$addDays days",strtotime($firstCell));
        if(date('w',$thisCellDate)==0 || date('w',$thisCellDate)==6){
            echo "<td style='color:red'>";

        }else{
            echo "<td>";
        }
        if(date("m",$thisCellDate)==date("m",strtotime($thisFirstDay))){
            echo date("j",$thisCellDate);
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>    
</body>
</html>