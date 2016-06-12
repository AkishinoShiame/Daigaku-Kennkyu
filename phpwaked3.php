i<head>
<title>Hadoop 使用者介面</title>
</head>

<?php
exec("wakeonlan 00:18:f3:2f:5e:63",$output);


$i = 0;
while(isset($output[$i])){
echo $output[$i]."<br>";
$i = $i + 1;
}

header('Refresh:5;url=index.php?M=C');
exit();

?>


