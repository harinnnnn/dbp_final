<?php
  $link = mysqli_connect('localhost', 'swinfo', 'swpw#t11', 'swinfo');
  if (isset($_GET['station'])) {
      $filtered_id = mysqli_real_escape_string($link, $_GET['station']);
  } else {
      $filtered_id = mysqli_real_escape_string($link, $_POST['station']);
  }

  $query = "
      SELECT month, number, station,
      rtime4_5, rtime5_6, rtime6_7, rtime7_8, rtime8_9, rtime9_10, rtime10_11, rtime11_12, rtime12_13
      rtime13_14, rtime14_15, rtime15_16, rtime16_17, rtime17_18, rtime18_19, rtime19_20, rtime20_21,
      rtime21_22, rtime22_23, rtime23_24
      FROM time
      WHERE station like '{$filtered_id}%'
      ";

  $result = mysqli_query($link, $query);
  // $row = mysqli_fetch_array($result);

  $time_info_in = '';
  while ($row = mysqli_fetch_array($result)) {
      $time_info_in .= '<tr>';
      $time_info_in .= '<td>'.$row['month'].'</td>';
      $time_info_in .= '<td>'.$row['number'].'</td>';
      $time_info_in .= '<td>'.$row['station'].'</td>';
      $time_info_in .= '<td>'.$row['rtime4_5'].'</td>';
      $time_info_in .= '<td>'.$row['rtime5_6'].'</td>';
      $time_info_in .= '<td>'.$row['rtime6_7'].'</td>';
      $time_info_in .= '<td>'.$row['rtime7_8'].'</td>';
      $time_info_in .= '<td>'.$row['rtime8_9'].'</td>';
      $time_info_in .= '<td>'.$row['rtime9_10'].'</td>';
      $time_info_in .= '<td>'.$row['rtime10_11'].'</td>';
      $time_info_in .= '<td>'.$row['rtime11_12'].'</td>';
      $time_info_in .= '<td>'.$row['rtime12_13'].'</td>';
      $time_info_in .= '<td>'.$row['rtime13_14'].'</td>';
      $time_info_in .= '<td>'.$row['rtime14_15'].'</td>';
      $time_info_in .= '<td>'.$row['rtime15_16'].'</td>';
      $time_info_in .= '<td>'.$row['rtime16_17'].'</td>';
      $time_info_in .= '<td>'.$row['rtime17_18'].'</td>';
      $time_info_in .= '<td>'.$row['rtime18_19'].'</td>';
      $time_info_in .= '<td>'.$row['rtime19_20'].'</td>';
      $time_info_in .= '<td>'.$row['rtime20_21'].'</td>';
      $time_info_in .= '<td>'.$row['rtime21_22'].'</td>';
      $time_info_in .= '<td>'.$row['rtime22_23'].'</td>';
      $time_info_in .= '<td>'.$row['rtime23_24'].'</td>';
      $time_info_in .= '</tr>';
  }

?>


<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8" />

   <title>Population</title>

</head>

     <body>

             <table border="1">
               <tr>
                 <th>month</th>
                 <th>line</th>
                 <th>station</th>
                 <th>04시-05시</th>
                 <th>05시-06시</th>
                 <th>06시-07시</th>
                 <th>07시-08시</th>
                 <th>08시-09시</th>
                 <th>09시-10시</th>
                 <th>10시-11시</th>
                 <th>11시-12시</th>
                 <th>12시-13시</th>
                 <th>13시-14시</th>
                 <th>14시-15시</th>
                 <th>15시-16시</th>
                 <th>16시-17시</th>
                 <th>17시-18시</th>
                 <th>18시-19시</th>
                 <th>19시-20시</th>
                 <th>20시-21시</th>
                 <th>21시-22시</th>
                 <th>22시-23시</th>
                 <th>23시-24시</th>
               </tr>
               <?= $time_info_in ?>
             </table>


     </body>
     </html>
