<?php
  echo "PHP Hello world. Generated at ".date("H:i:s d.m.Y")."<hr/>";

  $conn_string="host=137.116.194.198 port=5432 dbname=postgres user=postgres password=nnnn";
  $conn=pg_connect($conn_string);
  $result=pg_query($conn,"select * from public.msgs");
  $rows=pg_fetch_array($result);

  echo "<br/><br/>Print results from DB query";
  // print_r($rows);
?>
