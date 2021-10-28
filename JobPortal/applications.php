<?php include 'header.php' ?>
    <style>
    table{
        margin-left: 200px; 
        margin-right: 400px;
    }
    </style>
<div class="container-fluid">
<table class="table">
  <thead>
    <tr>
      <th class="col-sm-1">s.no</th>
      <th class="col-sm-2">Candidate Name</th>
      <th class="col-sm-2">Company Name</th>
      <th class="col-sm-2">Position</th>
      <th class="col-sm-2">Qualification</th>
    </tr>
  </thead>
  <tbody>
  <?php
        include "connect.php";
        $records = mysqli_query($conn,"select * from applied;");
       $i=1;
        if($records)
        while($data = mysqli_fetch_array($records))
        {   
        ?>
            <tr>
            <td><?php echo $i++?></td>
                <td><?php echo $data['Name']; ?></td>
                <td><?php echo $data['Company_Name']; ?></td>
                <td><?php echo $data['Role']; ?></td>
                <td><?php echo $data['Qualification']; ?></td>
            </tr>	
        <?php
        }
        else echo "false";
        ?>
     <?php mysqli_close($conn);  ?>
    
  </tbody>
</table>
</div>