<?php
  $link = mysqli_connect('localhost', 'swinfo', 'swpw#t11', 'swinfo');
  if(isset($_GET['station'])) {
    $filtered_id = mysqli_real_escape_string($link, $_GET['station']);
  } else {
    $filtered_id = mysqli_real_escape_string($link, $_POST['station']);
  }

  $query = "
      SELECT number, station, l_location
      FROM locker
      WHERE station like '%{$filtered_id}%'
      ";

  // $query = "
  //     SELECT c.name as cname, c.code as ccode, ct.name as ctname, cl.language as cllanguage
  //     FROM country c
  //     INNER JOIN city ct ON c.capital = ct.id
  //     INNER JOIN countrylanguage cl ON c.code = cl.countrycode
  //     WHERE c.name = '{$filtered_id}'
  //     ";

  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_array($result);


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
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <meta http-equiv="X-UA-Compatible" content="ie=edge" />


   <title>Population</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
       integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="result_pop.css">
   <link href="favicon.png" rel="shortcut icon" type="image/x-icon" />

   <style>

                     #topMenu {
                             height: 30px;
                             width: 850px;

                     }

                     #topMenu ul li {
                             list-style: none;
                             color: white;
                             background-color: #white;
                             float: left;
                             line-height: 30px;
                             vertical-align: middle;
                             text-align: center;
                     }

                     #topMenu .menuLink {
                             text-decoration:none;
                             color: white;
                             display: block;
                             width: 150px;
                             font-size: 18px;
                             font-weight: bold;
                             font-family: "Trebuchet MS";
                     }
                     #topMenu .menuLink:hover {

                             background-color: #ffcc00;
                     }

                     #fullScr{
                         width: 100%;
                         height: 650px;

                     }
                     #left{
                         width: 35%;
                         height: 650px;
                         float: left;

                     }
                     #right{
                         width: 63%;
                         height: 650px;
                         background-color: #ffffff;
                         display: inline-block;
                       border-radius: 2em;
                     }




   </style>
</head>

     <body>



       <nav id="topMenu" > <ul> <li><a class="menuLink" href="index.html">HOME</a></li> <li><a class="menuLink" href="locker.html">LOCKER</a></li> <li><a class="menuLink" href="elevator.html">ElEVATOR</a></li> <li><a class="menuLink" href="other.html">OTEHRS</a></li></ul> </nav>
       <br>


       <div id="fullScr">   <!-- 전체화면 -->
           <div id="left">      <!-- 왼쪽화면-->
            <h6>&nbsp;&nbsp;<span>d</span><span>e</span><span>n</span><span>s</span><span>i</span><span>t</span><span>y </span><span>o</span><span>f </span>
            <span>p</span><span>o</span><span>p</span><span>u</span><span>l</span><span>a</span><span>t</span><span>i</span><span>o</span><span>n</span></h6>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<video width="480" height="300" src="subway.mp4" controls autoplay muted loop></video>

           </div>


           <div id="right">   <!-- 오른쪽화면 -->

             <table border="1">
                 <tr>
                     <th>line</th>
                     <th>station</th>
                     <th>location</th>
                 </tr>
                 <?= $loca_info ?>

             </table>
           </div>
      </div>

       <div>
      <div class="left">
      </div>
      <div class="right">
      </div>
    </div>




     </body>
     </html>
