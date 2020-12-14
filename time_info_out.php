<?php
  $link = mysqli_connect('localhost', 'swinfo', 'swpw#t11', 'swinfo');
  if (isset($_GET['station'])) {
      $filtered_id = mysqli_real_escape_string($link, $_GET['station']);
  } else {
      $filtered_id = mysqli_real_escape_string($link, $_POST['station']);
  }

  $query = "
      SELECT month, number, station,
      qtime4_5, qtime5_6, qtime6_7, qtime7_8, qtime8_9, qtime9_10, qtime10_11, qtime11_12, qtime12_13,
      qtime13_14, qtime14_15, qtime15_16, qtime16_17, qtime17_18, qtime18_19, qtime19_20, qtime20_21,
      qtime21_22, qtime22_23, qtime23_24
      FROM time
      WHERE station like '{$filtered_id}%'
      ";

  $result = mysqli_query($link, $query);
  // $row = mysqli_fetch_array($result);

  $time_info_out = '';
  while ($row = mysqli_fetch_array($result)) {
      $time_info_out .= '<tr>';
      $time_info_out .= '<td>'.$row['month'].'</td>';
      $time_info_out .= '<td>'.$row['number'].'</td>';
      $time_info_out .= '<td>'.$row['station'].'</td>';
      $time_info_out .= '<td>'.$row['qtime4_5'].'</td>';
      $time_info_out .= '<td>'.$row['qtime5_6'].'</td>';
      $time_info_out .= '<td>'.$row['qtime6_7'].'</td>';
      $time_info_out .= '<td>'.$row['qtime7_8'].'</td>';
      $time_info_out .= '<td>'.$row['qtime8_9'].'</td>';
      $time_info_out .= '<td>'.$row['qtime9_10'].'</td>';
      $time_info_out .= '<td>'.$row['qtime10_11'].'</td>';
      $time_info_out .= '<td>'.$row['qtime11_12'].'</td>';
      $time_info_out .= '<td>'.$row['qtime12_13'].'</td>';
      $time_info_out .= '<td>'.$row['qtime13_14'].'</td>';
      $time_info_out .= '<td>'.$row['qtime14_15'].'</td>';
      $time_info_out .= '<td>'.$row['qtime15_16'].'</td>';
      $time_info_out .= '<td>'.$row['qtime16_17'].'</td>';
      $time_info_out .= '<td>'.$row['qtime17_18'].'</td>';
      $time_info_out .= '<td>'.$row['qtime18_19'].'</td>';
      $time_info_out .= '<td>'.$row['qtime19_20'].'</td>';
      $time_info_out .= '<td>'.$row['qtime20_21'].'</td>';
      $time_info_out .= '<td>'.$row['qtime21_22'].'</td>';
      $time_info_out .= '<td>'.$row['qtime22_23'].'</td>';
      $time_info_out .= '<td>'.$row['qtime23_24'].'</td>';
      $time_info_out .= '</tr>';
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
               <?= $time_info_out ?>
             </table>


     </body>
     </html>
