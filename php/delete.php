<?php

   $id = $_GET["id"];
  //删除留言接口
  header("Content-type: text/html; charset=utf-8");
  //连接数据库
  $link = mysqli_connect('localhost','root','','lyq');
  mysqli_set_charset($link,'utf8');
  //删除数据
  $result = mysqli_query($link," delete from text where id = '$id';");
  if(!$result){
      echo 400;
      exit();
  }
  echo $result;
  mysqli_close($link);
  ?>