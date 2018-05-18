<?php
 header("Content-type: text/html; charset=utf-8");
  //添加留言接口
//获取get数据
  $arr = $_GET;
  $theme=$arr["theme"];
  $content = $arr["content"];
  $username = $arr["username"];
  //连接数据库
  $link = mysqli_connect('localhost','root','','lyq');
  mysqli_set_charset($link,'utf8');
  //插入数据
  $result = mysqli_query($link,"insert into text(id,name,theme,content,date)
  values(null,'$username','$theme','$content',now());");
  if(!$result){
     echo 400;
      exit();
  }
  echo $result;
  mysqli_close($link);
?>