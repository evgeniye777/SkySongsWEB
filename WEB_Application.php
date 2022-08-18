<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.css">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
	<title></title>
</head>
<script>

	$(function(){
  $('#tab').on('click', '.rowlink', function(){
    alert($(this).find('.item').html());
  });
});

	function createTable() {
var myTable = document.getElementById("elem");
while(myTable.rows.length>0) {
  myTable.deleteRow(0);}
var x = parseInt(document.getElementById("x").value);
var y = parseInt(document.getElementById("y").value);
var table = document.querySelector('#elem');
for (var i =0; i< x; i++) {
var tr = document.createElement('tr');
for (var j =0; j< y; j++) {
var td = document.createElement('td');
var r = getRandomInRange(1,999)
td.innerHTML = ""+r;
tr.appendChild(td);
}
table.appendChild(tr);
}
}

function getRandomInRange(min, max){
return Math.floor(Math.random()*(max - min +1)) +min;
}
</script>
<style type="text/css">
table td{
background:Aqua;
color: green;
width: 500px;
height: 25px;
border: 3px solid black;
}
#menu {
margin: 10px;
padding: 0;
list-style-type: none;}
#menu li {display: inline;}
html,body {
height: 100%;
}
body {
display: flex;
flex-direction: column;
align-items: center;
margin: 0;
height: 100%;
background: url(47268.jpg);
background-size: cover;
}
</style>
<body>
<!-- 	<form class="menu">
<input id="x" type="text" size="10">
<input id="y" type="text" size="10">
<input type="button" value=" Table " onclick="createTable();">
<input type="button" value=" ODD NUM " onclick="ODD();">
</form>
<table id="elem"></table> -->
</body>
</html>

<?PHP
echo '<div class="container" style="background-color:yellow;">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
              <span class="sr-only">Навигация</span>
              <span class="icon-bar" style="background-color:white;"></span>
              <span class="icon-bar" style="background-color:white;"></span>
              <span class="icon-bar" style="background-color:white;"></span>
            </button>
        <a class="navbar-brand lead" href="#message" style="color:blue; font-size: 30dp;"role="tab" data-toggle="pill" >Наша команда:</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li ><a href="#home" role="tab" data-toggle="pill">История</a></li>
          <li><a href="#profile" role="tab" data-toggle="pill">Наш Таксопарк</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Города<b class="caret"></b></a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Контакты</a></li>
        </ul>
      </div>
</div>';
$ourData = file_get_contents("t0.json");
$decode = json_decode($ourData);
echo '<div class="container-fluid tab-content">
<div role="tabpanel" class="tab-pane" id="profile">';
echo '<br><br><br><table id="tab">';
foreach($decode as $key => $v ){
	echo '<tr class="rowlink">';
	  $_id = $v->_id;
	  $_akords = $v->akords;
	  $_name = $v->name;
	  $_slova = $v->slova;
	  $_ton = $v->ton;
 // echo '<td><input type="text" value="'.$_id.'" style="color: red;"></td>';
 // echo '<td><input type="text" value="'.$_akords.'" style="color: red;"></td>';
 echo '<td class="item"><p>'.$_name.'</p></td>';
 // echo '<td><input type="text" value="'.$_slova.'" style="color: red;"></td>';
 // echo '<td><input type="text" value="'.$_ton.'" style="color: red;"></td>';
  echo '</tr>';
}
echo '<table> </div>';
echo '<div role="tabpanel" class="tab-pane active" id="home"><i style="font-size: 150%;">Многим любимые романсы — это тоже жанр камерной музыки. Обычно в них исполнялось небольшое</i></div></div>';
?>