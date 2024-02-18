<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ParkEaze</title>
  <link rel="icon" type="image/png" href="parkeazeLogo.png"/>
  
  <style>
    .tab{
        display: flex;
    justify-content: center;

    }
    a.search{
        background-color: #808080;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border: solid #000;
  border-color: #000;
  border-radius: 50%;

    }
    a:visited{
        background-color: lightgreen;
    }
    table {
      
    
        border-collapse: collapse;
      width: 50%;
      margin: 20px;
      
    }

    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center;
    }
  
    th {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #f5f5f5;
    }
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #7b7bff;
}

.section{
    margin-top: 20px;
    display: flex;
    justify-content: space-around;
}
h1{
    display: flex;
    justify-content: center;
    margin-top: 20px;
}
.nav {
            text-align: left;
        }

        .nav a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            margin: 0 5px;
        }

        .nav a.active {
            background-color: #4CAF50;
            border-radius: 5px;
            font-size: 20px;
        }
        #p{
            background-color:   #4CAF50;
            border-radius: 5px;
            font-size: 20px;
        }
        #l{
            background-color: #4CAF50;
            border-radius: 5px;
            font-size: 20px;
        }
        #s{
            background-color: #4CAF50;
            border-radius: 5px;
            font-size: 20px;
        }
        #Motive{
            background-color: #4CAF50;
            border-radius: 5px;
            font-size: 20px;
        }
        .nav{
            margin-top: 20px;
        }

        button.address {
          border-color: rgba(0,0,0,0);
          background-color: rgba(0,0,0,0);
        }
  
          ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
 
}

  </style>
</head>

<body>
<?php
$time = time();
$space1 = $_POST["space 1"];
$space2 = $_POST["space 2"];
$space3 = $_POST["space 3"];
$space4 = $_POST["space 4"];
$space5 = $_POST["space 5"];
$space6 = $_POST["space 6"];


$data1 = $space1;
$data2 = $space2;
$data3 = $space3;
$data4 = $space4;
$data5 = $space5;
$data6 = $space6;


?>

 
 
<img src="logo.png" width="900" 
     height="200" >
<hr>
<ul>
  <li><a href="Demo.php">Home</a></li>
  <li><a href="#About">About</a></li>
  <li style="float:right"><a href="#login.php">Log In</a></li>
  <li style="float:right"><a href="#login.php">Sign In</a></li>
  
</ul>
<div class="section">
<section class="mapbox" data-mapbox>
  <figure>
  <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3408.132378906545!2d75.588515!3d31.327717000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzHCsDE5JzM5LjgiTiA3NcKwMzUnMTguNyJF!5e0!3m2!1sen!2sin!4v1708166704755!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></section>
    
<script>
  // select the button and the div
  const button = document.getElementById('4');
  const div = document.getElementById('address');

  // define the function to change the HTML content
  function changeContent() {
    div.innerHTML = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1031.6164687923083!2d75.58814159888398!3d31.32796800475622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1708127083645!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
  }

  // add event listener to the button
  button.addEventListener('click', changeContent);
</script>
<div class="tab">
<table>
    <thead>
      <tr>
        <th>PARKING NUMBER</th>
        <th>Vacancy Status</th>
        
      <th>Open in Maps</th>
    </tr>
    <tr style="background-color : green;">
        <td><button class="address" id="1">1 | Vallah</button></td>
        <td><?php echo $data1; ?></td>
        <td><a class="search"target="_blank" href="https://maps.app.goo.gl/AH35E1rohYk9uY3j9"></a></td>
      </tr>
      <tr>
        <td><button class="address" id="2">2 | Krishan Nagar</button></td>
        <td><?php echo $data2; ?></td>
        <td><a class="search" target="_blank"href="https://maps.app.goo.gl/ywSd1n7eDSQAY8KNA"></a></td>
      </tr>
      <tr>
        <td><button class="address" id="3">3 | Krishan Nagar </button></td>
        <td><?php echo $data3; ?></td>
        <td><a class="search" target="_blank"href="https://maps.app.goo.gl/qdTLzjRCrZiHH53H6
            "></a></td>
      </tr>
      <tr>
        <td><button class="address" id="4">4 | Krishan Nagar</button></td>
        <td ><?php echo $data4; ?></td>
        <td><a class="search" target="_blank"href="https://maps.app.goo.gl/nHGDU8vwchR44UyV6"></a></td>
      </tr><tr style="background-color : green;">
        <td><button class="address" id="5">5 | Krishan Nagar</button></td>
        <td ><?php echo $data5; ?></td>
        <td><a class="search" target="_blank"href="https://maps.app.goo.gl/VRZu8j3TohBRCYzu9"></a></td>
      </tr>
      <tr>
        <td><button class="address" id="6">6 | Krishan Nagar</button></td>
        <td ><?php echo $data6; ?></td>
        <td><a class="search"target="_blank" href="https://maps.app.goo.gl/VRZu8j3TohBRCYzu9"></a></td>
      </tr>
</tbody>
  </table></div>
</div>
</html>