<!DOCTYPE html>
<html>    
<head>
<meta charset="utf-8" />
<title>0920</title>
<body>
<form action="0920.php" method="post" name="form1" id="form1">
<input type="submit" name="submit" id="submit" value="送出"> <br/>
<?php
session_start();

if (!isset($_SESSION['random'])) {
    $_SESSION['random'] = array();
}

for ($i = 0; $i < 3; $i++) { 
    $a = array(); // 創建一個空陣列來儲存隨機數字

    for ($i = 1; $i <= 3; $i++) {  
        $b = rand(0, 9); 
        for ($j = 1; $j < $i; $j++) {  
            if ($b == $a[$j]) {
                $b = rand(0, 9);
                $j = 0;
            }
        }
        $a[$i] = $b;  // 寫入陣列
    }

    $_SESSION['random'][$i] = $a; // 將陣列存入SESSION
    echo "<p>".implode(',', $a)."</p>";
}
?>
</head>
</body>
</html>
