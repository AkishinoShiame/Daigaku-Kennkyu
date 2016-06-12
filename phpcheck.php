<head>
<title>Hadoop 使用者介面</title>
</head>

<?php
exec("/home/hadoop/hadoop-1.2.1/bin/hadoop dfsadmin -report",$output);
$i = 0;
while(isset($output[$i])){
echo $output[$i]."<br>";
$i = $i + 1;
}


?>

