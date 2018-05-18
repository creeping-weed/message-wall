<?php
  //查询留言接口
  header("Content-type: text/html; charset=utf-8");
  //连接数据库
  $link = mysqli_connect('localhost','root','','lyq');
  mysqli_set_charset($link,'utf8');
  //查询数据
  $result = mysqli_query($link,'select * from text');
  if(!$result){
      echo '{"message": "400"}';
      exit();
  }
  $message = mysqli_fetch_all($result,MYSQLI_ASSOC);
  //var_dump($message);
  //转化为json
  $jsonStr = json_encode($message);
  echo $jsonStr;
  mysqli_close($link);
 ?>