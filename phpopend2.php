<head>
<title>Hadoop 使用者介面</title>
</head>

<?php
exec("ssh hadoop@datanode-2 './open.sh'",$output);


$i = 0;
while(isset($output[$i])){
echo $output[$i]."<br>";
$i = $i + 1;
}


header('Refresh:5;url=index.php?M=C');
exit();


?>
