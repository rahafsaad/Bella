
<!DOCTYPE html>
<html>
<head> 
<title>Bella</title><meta charest="utf-8">
<style type="text/css">
body { text-align: center;
background-image: url("logo.png");
background-position: top center; background-origin: padding-box;
background-repeat: no-repeat;}
.x { margin-left:-8em;}
span { color:#BD859E; font-family:Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif; margin-right:1em; margin-left:0.5em;}
a  {text-decoration: none; color:#BD859E;  }

span ul { display: none;
         list-style: none;}
span:hover ul { display: block;  text-decoration: blink; margin-top:4px; margin-left:-1.8em; }
span ul li { margin-top:2px; border: none; background-color: black; border-radius: 50px; width:8em; font-size:82%;color: white;  }
li a {color: white;}
hr {color:#C6E4E6; margin-top:27em;}
.hc { width: 400px;}
.wh { margin-left:22em;width: 150px; height:200px;}
strong {font-size:130%; }
h3 { font-size: 80%; color: gray;}
footer { font-family:Arial, Helvetica, sans-serif;}

a img:hover { width:50px; height:50px;}
.s {position: absolute;margin-left:31em;}
.is { width:40px; height:40px; }
.bi { background-color: #DCEBEB; border-radius:20px; width:500px;margin: 0 auto;}
p:hover { background-color:#FBDEEB; }
.gg {  border-radius:30px; margin-left:4em;width:700px; height:250px;}
.g1 {    border-radius:30px; width:300px; height:250px; }
table { margin-left:500px; margin-top:-200px; position:relative;}
th  { background-color:#EAB4C1; ; border-radius:5px;}
td  { background-color:#E6D0D5; ; border-radius:5px;}

</style>
<?php

$query5="SELECT * FROM product";
$con= new mysqli('localhost',"root","","bella");
$result2=mysqli_query($con,$query5);
$min="10000";
while($row=mysqli_fetch_array($result2)){
	if($row["price"]<$min)
		$min=$row["price"];
}

$query3="SELECT * FROM product WHERE price=$min";
$result1=mysqli_query($con,$query3);
print("<table><tr><th>Name</th><th>Price</th><th>Code</th><th>Expire Date</th><th>Origin Country</th></tr>");
while($row=mysqli_fetch_array($result1)){
echo "<tr><td>".$row["name"]."</td>";
echo "<td>".$row["price"]."</td>";
echo "<td>".$row["code"]."</td>";
echo "<td>".$row["ex"]."</td>";
echo "<td>".$row["country"]."</td></tr>";
} 

?>
</head>
<body> 
<hr class="hc"><br>
<span class="x" ><a href="home.html">Home</a></span>
<span class="s"><a href="productgallery.html">Products Gallery</a><ul><li><a href="makeup.html">Makeup</a></li><li><a href="personalcare.html">Personal Care</a></li>
<li><a href="perfumes.html">Perfumes</a>
</li><li><a href="haircare.html">Hair Care</a></li>
<li><a href="mencare.html">Men Care</a></li>
</ul></span>
<span><a href="contactus.html">Contact us</a></span>
<span><a href="aboutUs.html">About us</a></span>
<span><a href="customerprofile.html">Customer Profile</a></span>
<span><a href="pr.html">Product Register</a></span><br><br><br>

<br><br>
<br><br>
<p class="bi">
<span><a href="home.html"><img  src="home.png" title="Click here to go to home page" class="is"></a></span>
<span><a href="contactus.html"><img src="contact.png" title="Click here to go to contact us page" class="is"></a></span>
<span><a href="aboutUs.html"><img src="ab.png" title="Click here to go to about us page" class="is"></a></span>
<span><a href="customerprofile.html"><img title="Click here to go to customer profile page" src="user.png" class="is"></a></span>
<span><a href="pr.html"><img src="preg.png"title="Click here to go to product register page" class="is"></a></span>
<span><a href="productgallery.html"><img src="lipstick.png" title="Click here to go to product gallery page" class="is"></a></span>
<span><a href="discount.html"><img class="is" src="di.png" title="Click here to calculate your discount"></a></span>
<p>
 <footer> <small>&copy; Rahaf "2018"</small> </footer> 
</body></html>
