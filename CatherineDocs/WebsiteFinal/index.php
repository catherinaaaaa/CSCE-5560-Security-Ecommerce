<!DOCTYPE html>
<html>
<link href="main.css" rel="stylesheet" type="text/css">
<script src="basic.js"></script> 

<body>
<title>DFW AIRPORT GATE SCHEDULE</title>
<div class="image-container">
        <img src="home.jpg" align="middle"
        width ="1400"
        height="200"/>
</div>

<br>
<div class ="navBar">
<h1> DFW AIRPORT GATE SCHEDULE </h1> 
<h3>    <a href="https://www.dfwairport.com/flights/" > Flights </a>
        <a href="https://www.dfwairport.com/park/"> Park </a>
        <a href="https://www.dfwairport.com/explore/"> Explore </a>
        <a href="https://www.dfwairport.com/support/"> Customer Support </a>
</div>

        <div class="section-container">
            <h2> Search for flights  </h2> 
            <div class="search-container">

                <form id="form">
                        <input type="search" font="NeueHaasUnicaW1G" id="query" placeholder="Search for flights, destinations, airports" name="search">
                        <button type="submit" onclick="SearchButtonCallback()">Search</button>
                </form>

            </div>
        </div>
        <div class="section-container">
            <h2 font ="NeueHaasUnicaW1G"> Search Results </h2>
            <div class="search-container">

                <!-- Put search results here -->

<?php

$mysqli = new mysqli("localhost","catherine","UNTcat2004#","csce5560_project");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform query
if($_GET['search'])
{

if ($result = $mysqli -> query('SELECT * FROM flights WHERE arrival_airport = "' . $_GET['search'] . '"' ))
{

  echo "Returned rows are: " . $result -> num_rows;

  $my_arr = $result -> fetch_all();


  echo "<table>";
  for ($x = 0; $x < $result -> num_rows; $x+=1)
  {
    echo "<tr>";
    for ($y = 0; $y < count($my_arr[$x]); $y+=1)
    {
      echo "<th>";
      echo $my_arr[$x][$y];
      echo "</th>";
    }
    echo "</tr>";
  }
  echo "</table>";


  $result -> free_result();

}

}
else
{
   echo "search is not set";
}

$mysqli -> close();

?>

            </div>      
</div>

<p><font size ="4">New User? <a href="#signups">Sign up</a></font></p>




<div class="boxes-container">
<p> ------------------------------------------------- </p>
<p><b>SIGN IN</b>
            <div class="input-container">
                <label for="username">Username</label>
                        <div class="form-container">
                <input type="text" placeholder="Enter Username" name="username" required>
                        </div>
            </div>
            <div class="input-container">
                <label for="password">Password</label>
                        <div class="form-container">
                <input type="password" placeholder="Enter Password" name="password" required>
                        </div>
            </div>
            <br>
            <button type="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>

<a href="#forgot">Forgot Username or Password</a>
</div>



<div class="boxes-container" >
<p> ------------------------------------------------- </p>
<p id="forgot"> <b> FORGOT PASSWORD</b>
<p>Do you remember your username? 
<input type="submit" name="Yes" value="YES"><a href="#yestouser"></input></a>
<input type="submit" name="submit" value="NO"><a href="#notouser"></input></a>
</p>
<div class="form-container">
<p id="yestouser">Username <input type="text" name="user" size="10"> </p>
</div>
<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Reset Password</a>
<br>
</div>

<div class="boxes-container">
<p> ------------------------------------------------- </p>
<p id="signups"> <b>CREATE AN ACCOUNT </b>
<p>Sign Up For An Account: </p>
<div class="form-container">
<p>Enter your email <input type="text" name="user" size="20"> </p>
</div>
<div class="form-container">
<p>Username <input type="text" name="user" size="20"> </p>
</div>
<div class="form-container">
<p>Password <input type="password" name="pass" size="10"></p>
</div>
<p>Are you over 18? 
<input type="radio" name="radiobutton" value="myValue1"> Yes</input>
<input type="radio" name="radiobutton" value="myValue1"> No</input>
</p> 
<input type="submit" name="Submit" value="Submit">
<input type="reset" name="Submit2" value="Reset">
</div>

<div>
<p><font size ="4">Customer Service? <a href="mailto:customerservice@sendemail.com">Email</a></font></p>
<p><font size ="4">Language <select language="level"></font></p>
<option selected>English</option>
<option>Spanish</option>
<option>Chinese</option>
<option>Japanese</option>
<option>French</option>
</select>
</div>

</body>
</html>
