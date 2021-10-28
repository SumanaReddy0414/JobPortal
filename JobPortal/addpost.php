
<?php
        include "connect.php";
        $cname=$_POST['cname'];
        $jd=$_POST['jd'];
        $pos=$_POST['pos'];
        $ctc=$_POST['ctc'];

        $sql="insert into posts values ('$cname','$pos','$jd','$ctc');";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header("Location: http://localhost/JobPortal/index.php");
            exit();
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        

?>