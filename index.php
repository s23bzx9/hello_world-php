<?php
  $conn_string="host=137.116.194.198 port=5432 dbname=postgres user=postgres";
  $conn=pg_connect($conn_string);
  $result=pg_query($conn,"select * from public.msgs");
  $rows=pg_fetch_array($result);

  echo "PHP Hello world. Generated at ".date("H:i:s d.m.Y")."<hr/><br/><br/>Print results from DB query<pre>";
  print_r($rows);
?>
