<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<title>Display records</title>
</head>
 
 <body>
  <div class="container">
<table class="table table-dark table-hover">
  <thead>
  <tr>
    <th>Roll no.</th>
    <th>Name</th>
    <th>Marks</th>
  </tr>
  </thead>
  <?php
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$row->Rno."</td>";
  echo "<td>".$row->Name."</td>";
  echo "<td>".$row->Marks."</td>";
  echo "</tr>";
  }
   ?>
</table>
</div>