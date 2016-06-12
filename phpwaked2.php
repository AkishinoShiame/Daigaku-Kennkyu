<head>
<title>Hadoop 使用者介面</title>
</head>

<?php
exec("wakeonlan 00:1e:ec:d3:6a:f8",$output);


$i = 0;
while(isset($output[$i])){
echo $output[$i]."<br>";
$i = $i + 1;
}


header('Refresh:5;url=index.php?M=C');
exit();

?>

