<?php
//更新留言接口
header("Content-type: text/html; charset=utf-8");
//获取get数据
  $arr = $_GET;
  $theme=$arr["theme"];
  $content = $arr["content"];
  $username = $arr["username"];
  $id = $arr["id"];
//连接数据库
$link = mysqli_connect('localhost','root','','lyq');
mysqli_set_charset($link,'utf8');
//更新数据数据
$result = mysqli_query($link,"UPDATE text  SET name = '$username', theme = '$theme' ,content = '$content' ,date = now()
                              WHERE id = '$id'");
if(!$result){
    echo 400;
    exit();
}
echo $result;
mysqli_close($link);
?>