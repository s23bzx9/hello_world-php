<?php
  $db_host     = getenv('DATABASE_HOST');
  $db_port     = getenv('DATABASE_PORT');
  $db_name     = getenv('DATABASE_NAME');
  $db_username = getenv('DATABASE_USER');
  $db_password = getenv('DATABASE_PASSWORD');

  $conn_string="host=$db_host port=$db_port dbname=$db_name user=$db_username".$db_password!=""?" password=$db_password":"";
  $conn=pg_connect($conn_string);
  $result=pg_query($conn,"select * from public.msgs");
  $rows=pg_fetch_all($result);

  echo "PHP Hello World today. Generated at ".date("H:i:s d.m.Y")." for IP: ".$_SERVER['REMOTE_ADDR']."<hr/><br/><br/>Print results from DB query<pre>";
  print_r($rows);

  //phpinfo();
?>
