<head>
<title>Hadoop 使用者介面</title>
<meta http-equiv="refresh" content=5; url="http://namenode/aaa/index.php?M=allcpu"></meta>
</head>

<table border=1 style="text-align:center;">
 <tr>
  <td>
   DataNode-1
  </td>
  <td>
   DataNode-2
  </td>
  <td>
   DataNode-3
  </td>
 </tr>
 <tr>
  <td>
   <?php echo exec("ssh hadoop@datanode-1 './cpu.sh'",$output); ?>
  </td>
  <td>
   <?php echo exec("ssh hadoop@datanode-2 './cpu.sh'",$output); ?>
  </td>
  <td>
   <?php echo exec("ssh hadoop@datanode-3 './cpu.sh'",$output); ?>
  </td>
 </tr>
</table>

