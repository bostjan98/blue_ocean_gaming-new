<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>LIST</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="assets/css/bootstrap.min.css?v=<?php echo time();?>" type="text/css" rel="stylesheet" />
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	
	</head>
	<body>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">date</th>
      <th scope="col">playerId</th>
      <th scope="col">agentId</th>
      <th scope="col">currency</th>
      <th scope="col">bet</th>
      <th scope="col">win</th>
      <th scope="col">rake</th>
      <th scope="col">tournament</th>
      <th scope="col">net</th>
      <th scope="col">fin</th>
       <th scope="col">aams_ticket</th>
      <th scope="col">aams_table</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  foreach($AllData as $key=>$value){?>
  	<tr>
      <th scope="row"><?php echo $value['id'];?></th>
      <td><?php echo $value['date'];?></td>
      <td><?php echo $value['playerid'];?></td>
      <td><?php echo $value['agentid'];?></td>
      <td><?php echo $value['currency'];?></td>
      <td><?php echo $value['bet'];?></td>
      <td><?php echo $value['win'];?></td>
      <td><?php echo $value['rake'];?></td>
      <td><?php echo $value['tournament'];?></td>
      <td><?php echo $value['net'];?></td>
      <td><?php echo $value['fin'];?></td>
      <td><?php echo $value['aams_ticket'];?></td>
      <td><?php echo $value['aams_table'];?></td>
    </tr>
    <?php }?>
  
  </tbody>
</table>
</body>