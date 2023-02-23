<?php
  date\_default\_timezone\_set('Asia/Shanghai');$ip \= $\_SERVER\["REMOTE\_ADDR"\];
  $filename \= $\_SERVER\['PHP\_SELF'\];
  $parameter \= $\_SERVER\["QUERY\_STRING"\];
  $time \= date('Y-m-d H:i:s',time());
  $logadd \= '来访时间：'.$time.'-->'.'访问链接：'.'http://'.$ip.$filename.'?'.$parameter."\\r\\n";
  $fh \= fopen("log.txt", "a");fwrite($fh, $logadd);fclose($fh);
?>
