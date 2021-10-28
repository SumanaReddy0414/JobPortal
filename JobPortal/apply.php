
<?php
        include "connect.php";
        $cname=$_POST['cname'];
        $yp=$_POST['yp'];
        $sname=$_POST['sname'];
        $role=$_POST['role'];
        $qual=$_POST['qual'];

        $sql="insert into applied values ('$sname','$cname','$role','$qual','$yp');";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header("Location: http://localhost/JobPortal/career.php");
            exit();
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        

?>