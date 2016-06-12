<head>
<title>Hadoop 使用者介面</title>
</head>

<?php
echo exec("ssh hadoop@datanode-1 'jps'");

header('Refresh:5;url=index.php?M=C');
exit();

?>

