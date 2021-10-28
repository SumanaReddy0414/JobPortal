<?php
// Include database connection
include_once 'connect.php';
// SQL query to interact with info from our database
$sql = mysqli_query($conn,"SELECT * from posts"); 
$i = 0;
// Establish the output variable
$dyn_table = '<table  cellpadding="10" id="dd" >';
while($row = mysqli_fetch_array($sql)){ 
   
    $jd = $row["Job_Description"];
    $ctc = $row["CTC"];
    $pos = $row["Position"];
    $cname = $row["Company_Name"];
    
    if ($i % 3 == 0) { // if $i is divisible by our target number (in this case "3")
        $dyn_table .= '<tr><td> <div class="container">
        <div class="card" style="width: 40rem;padding =10px; border-style:solid;  box-shadow:5px 10px">
        <div class="card-body">
          <h3><center>'.$pos.'</center></h3>
          <h5><center>'.$cname.'</center></h5>
          <p>'.$jd.'</p>
          Skills Required : Html,css,php,mysql</br>
          CTC : '.$ctc.' lpa<br>
          <button type="button" class="btn btn-primary "> Apply </button>
        </div>
        </div>
    </div></td>';
    } else {
        $dyn_table .= '<td>
        <div class="container" >
        <div class="card" style="width: 40rem;padding =10px; border-style:solid; box-shadow:5px 10px">
        <div class="card-body" id="cc">
          <h3><center> '.$pos.'</center></h3>
          <h5><center> '.$cname.'</center></h5>
          <p>' .$jd.'</p>
           Skills Required : Html,css,php,mysql</br>
          CTC : '.$ctc.' lpa<br>
          <button type="button" class="btn btn-primary "> Apply </button>
        </div>
        </div>
    </div>
        
        </td>';
    }
    $i++;
}
$dyn_table .= '</tr></table>';
?>
<html>
    <head>
        <style>
            .container{            
                max-width: 40rem;
            }
            #dd{
                border-collapse: separate;
  border-spacing: 15px;
  *border-collapse: expression('separate', cellSpacing='20px');
             
            }
           

        </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
<body>
<h3>Dynamic PHP Grid Layout From a MySQL Result Set</h3>
<?php echo $dyn_table; ?>
</body>
</html>