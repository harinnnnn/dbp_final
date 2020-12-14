<?php
  $link = mysqli_connect('localhost', 'swinfo', 'swpw#t11', 'swinfo');

  $filtered_id = mysqli_real_escape_string($link, $_GET['station']);

  // if(isset($_GET['station'])) {
  //   $filtered_id = mysqli_real_escape_string($link, $_GET['station']);
  // } else {
  //   $filtered_id = mysqli_real_escape_string($link, $_POST['station']);
  // }

  $query = "
      SELECT number, station, l_location
      FROM locker
      WHERE station like '%{$filtered_id}%'
      ";

  $result = mysqli_query($link, $query);
  // $row = mysqli_fetch_array($result);

  $loca_info = '';
  while($row = mysqli_fetch_array($result)) {
    $loca_info .= '<tr>';
    $loca_info .= '<td>'.$row['number'].'</td>';
    $loca_info .= '<td>'.$row['station'].'</td>';
    $loca_info .= '<td>'.$row['l_location'].'</td>';
    $loca_info .= '</tr>';
  }


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Subway </title>
</head>

<body>
<!-- <table border="1">
        <tr>
            <th>line</th>
            <th>station</th>
            <th>location</th>
        </tr> -->
        <?= $loca_info ?>

    <!-- </table>  -->
</body>

</html>
