<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表單製作</title>
</head>
<body>
    <h1>表單製作</h1>
    <h3>BMI計算</h3>

    <div>
        <?php
        if(!empty($_GET['height'])&&isset($_GET["weight"])){
            echo "身高:".$_GET['height'];
            echo "<br>";
            echo "體重:".$_GET['weight'];
            $h=$_GET['height'];
            $w=$_GET['weight'];
            $bmi=$w/(pow(($h/100),2));
            echo "<br>";
            if ($bmi<18.5) {
                echo "過輕";
            }elseif($bmi<24){
                echo "正常";

            }else{
                echo"過重";
            }
        }else{
            ?>
            


    </div>
    <form action="form.php" method="get">
        <p>身高:<input type="text" name="height" value="">cm<input type="submit" value="開始計算"></p>
        <p>體重:<input type="text" name="weight" value="">kg<input type="reset" value="清除計算"></p>
    </form>
    <a href="student.php">回學生查詢頁</a><br>
    <?php
        }
        ?>
        <?php
        if (isset($bmi)) {
            ?>
        
    
    <h5>你的BMI為</h5>
    <div style=width:200px;background:skyblue;height:30px><?=round($bmi,2) ; ?></div>
    <a href='student.php?num=<?=$_GET['num']; ?>'>回學生查詢頁</a><br>
    <a href="form.php">重新計算</a>
    <?php
    }
    ?>
</body>
</html>