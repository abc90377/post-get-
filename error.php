<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>錯誤</title>
</head>
<body>
    
    <?php
    switch ($_GET['e']) {
        case '1':
            echo '帳號不存在';
            echo "<br><a href='#'>新建帳號</a>";
        
            break;
        case '2':
            echo "密碼錯誤";
        
            break;
    }


?>
    <h5><a href="login.html">重新登入</a></h5>
</body>
</html>