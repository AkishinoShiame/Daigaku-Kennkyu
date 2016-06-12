<head>
<title>Hadoop 使用者介面</title>
</head>

<?php
exec("wakeonlan b8:88:e3:0a:45:71",$output);


$i = 0;
while(isset($output[$i])){
echo $output[$i]."<br>";
$i = $i + 1;
}

header('Refresh:5;url=index.php?M=C');
exit();

?>


