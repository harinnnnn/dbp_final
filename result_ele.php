<?php
$link=mysqli_connect('localhost','swinfo','swpw#t11','swinfo');

if(isset($_GET['station'])){
   $filtered_id=mysqli_real_escape_string($link,$_GET['station']);
 }else{
   $filtered_id=mysqli_real_escape_string($link,$_POST['station']);
 }

$query="select number,station,e_num,e_location from Elevator where station='{$filtered_id}%'";
$result=mysqli_query($link,$query);

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

<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8" />


   <title>Elevator</title>

</head>

     <body>
       <?= $info ?>
          <table border="1">
             <tr>
                 <th>line</th>
                 <th>station</th>
                 <th>location</th>
             </tr>
             <?= $info ?>
           </table>
     </body>
     </html>
