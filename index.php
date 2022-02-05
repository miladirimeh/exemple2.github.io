<?php
// Create database connection using config file
include_once("config.php");
 include_once("index.html"); 


// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>
 <nav class="navbar fixed-top navbar-light bg-light">
  <a class="navbar-brand" href="add.php">Add New User</a><br/><br/>
</nav></body><br>
    </br>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
             <span class="d-block p-2 bg-dark text-white">users:</span>
    </table>
       
<div class="alert alert-success" role="alert">
           Good Job!
</div>
    <button type="button" class="btn btn-primary">
  Avis <span class="badge badge-light">4</span>
</button><br>
    <br>
    <a href="#" class="badge badge-primary">Acceuil</a>
<a href="https://www.eprojet.fr/cours/php/19-php-realisation-d--un-site-web-complet" class="badge badge-secondary">Facebook</a>
<a href="#" class="badge badge-success">ElHaouaria</a>
<a href="#" class="badge badge-danger">Situation de Notre agence</a>
<a href="#" class="badge badge-warning">inscription</a>
<a href="#" class="badge badge-info">Plus d'info</a>
<a href="#" class="badge badge-light">Recheche</a>
<a href="#" class="badge badge-dark">notre offre</a><br>
    <br>
    <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="add.php">
    <img src="images/téléchargement.png" width="30" height="30" class="d-inline-block align-top" alt=""> add users
      
  </a>
</nav> <br>
        <br>
  <nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav><br>
        <br>
 <nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <button class="btn btn-outline-success" type="button">Main button</button>
  </form>
</nav><br>
        <br>
<nav class="navbar navbar-light bg-light">
  <span class="navbar-text">
  notre offres!!
  </span>
</nav><br>
        <br>

<h1>Welcome <span class="badge badge-secondary">!!</span></h1>
 <nav class="navbar fixed-bottom navbar-light bg-light">
  <a class="navbar-brand" href="#">our page facebook</a>
</nav><br>
        <br>
</body>
</html>