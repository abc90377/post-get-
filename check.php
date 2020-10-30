<?php
$users = [
    ['acc' => 'mack', 'pw' => '1234', 'type' => 'vip'],
    ['acc' => 'tom', 'pw' => '5678', 'type' => 'mem'],
    ['acc' => 'amy', 'pw' => '9999', 'type' => 'vip']

];
if (!empty($_POST['acc']) && !empty($_POST['pw'])) {
    $acc = $_POST['acc'];
    $pw = $_POST['pw'];
    $chk = '';
    foreach ($users as $idx => $user) {
        if ($user['acc'] == $acc) {
            $chk = $user;
        }
    }
    if (!empty($chk)) {
        if ($chk['pw'] == $pw) {
            switch ($chk['type']) {
                case 'vip':
                    header("location:vip.php?name={$chk['acc']}");
                break;

                case 'mem':
                    header("location:mem.php?name={$chk['acc']}");
                break;
            }

            
        } else {
            header("location:error.php?e=2");
        }
    } else {
        header("location:error.php?e=1");
    }
} else {
    header("location:login.html");
};
