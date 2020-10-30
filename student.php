<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生資料輸入</title>
</head>
<body>
    <pre>
建立一個資料畫面
建立學生資料陣列
輸入學生班級座號 顯示學生資料
    </pre>
    <?php
    $student=[

        '01'=>[
            '姓名'=>'Allen',
            '國文'=>'73',
            '英文'=>'96',
            '身高'=>'160',
            '體重'=>'60'
        ],

        '02'=>[
            '姓名'=>'Bob',
            '國文'=>'52',
            '英文'=>'96',
            '身高'=>'169',
            '體重'=>'68'
        ],

        '03'=>[
            '姓名'=>'Charlie',
            '國文'=>'90',
            '英文'=>'77',
            '身高'=>'177',
            '體重'=>'75'
        ],

        '04'=>[
            '姓名'=>'David',
            '國文'=>'79',
            '英文'=>'76',
            '身高'=>'160',
            '體重'=>'80'
        ],

        '05'=>[
            '姓名'=>'Emily',
            '國文'=>'100',
            '英文'=>'42',
            '身高'=>'160',
            '體重'=>'62'
        ]
    ];


if (!empty($_POST["num"]) || !empty($_GET["num"])) {

    if (isset($_POST["num"])) {
        $num=$_POST["num"];
    }else{
        $num=$_GET["num"];
    }
    $stu=$student[$num];
    echo "你查詢的學生為".$num."號<br>";
    echo $stu["姓名"]."<br>";
    echo "國文成績".$stu["國文"]."<br>";
    echo "英文成績".$stu["英文"]."<br>";
    echo "<div><a href='form.php?num={$num}&height={$stu['身高']}&weight={$stu['體重']}'>查詢BMI</a><br></div>";
    echo "<a href='student.php'>重新查詢</a>";

}else{
?>
<form action="student.php" method="POST">
<h5>輸入座號查詢學生資料</h5>
<input type="text" name="num">
<input type="submit" name="查詢">



</form>
<?php
}
?>

    
</body>
</html>