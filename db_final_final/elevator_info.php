<?php
$link=mysqli_connect('localhost','swinfo','swpw#t11','swinfo');

if(isset($_GET['station'])){
   $filtered_id=mysqli_real_escape_string($link,$_GET['station']);
 }else{
   $filtered_id=mysqli_real_escape_string($link,$_POST['station']);
 }

$query="select number,station,e_num,e_location from Elevator where station='{$filtered_id}'";
$result=mysqli_query($link,$query);
//$row=mysqli_fetch_array($result);

$info='';
while($row=mysqli_fetch_array($result)){
$info.='<tr>';
$info.='<td>'.$row['number'].'</td>';
$info.='<td>'.$row['station'].'</td>';
$info.='<td>'.$row['e_num'].'</td>';
$info.='<td>'.$row['e_location'].'</td>';
$info.='</tr>';
}

if($result==false){
  echo mysqli_error($link);
}
 ?>

 <!DOCTYPE>
 <html>
 <head>
   <meta charset="utf-8">
   <title> Subway </title>
 </head>
 <body>
    <table border="1">
    <tr>
    <td>number</td>
    <td>station</td>
    <td>e_num</td>
    <td>e_location</td>
    </tr>
    <?= $info ?>
  </table

 </body>
 </html>
