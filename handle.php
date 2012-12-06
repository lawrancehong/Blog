<?php
$username=$_POST['username'];
$content=$_POST['content'];
$db=mysql_connect("localhost","Comment","");
mysql_select_db('Comment');

$exec="INSERT INTO board (username,content) VALUES ('{$username}','{$content}')"; //将用户信息存入数据库
//echo $exec;
mysql_query('set names utf8');
mysql_query($exec);

$sql="select * from board  order by `id` DESC";
$result=mysql_query($sql);
while($data = mysql_fetch_assoc($result)){
 //var_dump($data);
//$group=
 echo $data['username'].'<br />';
 echo $data['content'].'<br />';
}
?>
