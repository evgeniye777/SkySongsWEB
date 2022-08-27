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
 <script type="text/javascript" src="data.json"></script>
<script>
	$(function(){
  $('#elem').on('click', '.rowlink', function(){
    alert($(this).find('.itemA').html()+'\n'+$(this).find('.itemS').html());
  });
});
var Songs;
var nameSB;
  function createTable(sb) {
    var navbar = document.getElementById("navbarBut")
    navbar.click();
    var words= file_get_contents(sb);
    nameSB = sb;
    Songs = JSON.parse(words);
var x = 5;
var y = 6;
var table = document.querySelector('#elem');
while(table.rows.length>0) {
  table.deleteRow(0);}
for (var i =0; i< 3400; i++) {
var tr = document.createElement('tr');
tr.setAttribute('class', 'rowlink');

var td = document.createElement('td');
var r = getRandomInRange(1,999)
td.innerHTML = ""+Songs[i].akords;
td.setAttribute('class', 'itemA');
td.setAttribute('style', 'display:none');
tr.appendChild(td);

var td = document.createElement('td');
var r = getRandomInRange(1,999)
td.innerHTML = ""+Songs[i].name;
td.setAttribute('class', 'item');
tr.appendChild(td);

var td = document.createElement('td');
var r = getRandomInRange(1,999)
td.innerHTML = ""+Songs[i].slova;
td.setAttribute('class', 'itemS');
td.setAttribute('style', 'display:none');
tr.appendChild(td);

var td = document.createElement('td');
var r = getRandomInRange(1,999)
td.innerHTML = ""+Songs[i].ton;
td.setAttribute('class', 'itemT');
td.setAttribute('style', 'display:none');
tr.appendChild(td);

table.appendChild(tr);
}
}

function ODD() {
  var stroka = document.getElementById("x").value.toLowerCase();
var table = document.getElementById("elem");
while(table.rows.length>0) {
  table.deleteRow(0);}
for (var i =0; i< 3400; i++) {
 var song = Songs[i].name; 
if (song.toLowerCase().includes(stroka)) {
var tr = document.createElement('tr');
tr.setAttribute('class', 'rowlink');

var td = document.createElement('td');
var r = getRandomInRange(1,999)
td.innerHTML = ""+Songs[i].akords;
td.setAttribute('class', 'itemA');
td.setAttribute('style', 'display:none');
tr.appendChild(td);

var td = document.createElement('td');
var r = getRandomInRange(1,999)
td.innerHTML = ""+Songs[i].name;
td.setAttribute('class', 'item');
tr.appendChild(td);

var td = document.createElement('td');
var r = getRandomInRange(1,999)
td.innerHTML = ""+Songs[i].slova;
td.setAttribute('class', 'itemS');
td.setAttribute('style', 'display:none');
tr.appendChild(td);

var td = document.createElement('td');
var r = getRandomInRange(1,999)
td.innerHTML = ""+Songs[i].ton;
td.setAttribute('class', 'itemT');
td.setAttribute('style', 'display:none');
tr.appendChild(td);

table.appendChild(tr);}
}
}

function getRandomInRange(min, max){
return Math.floor(Math.random()*(max - min +1)) +min;
}

function file_get_contents( url ) { // Reads entire file into a string

//

// + original by: Legaev Andrey

// % note 1: This function uses XmlHttpRequest and cannot retrieve resource from different domain.

var req = null;

try { req = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {

try { req = new ActiveXObject("Microsoft.XMLHTTP"); } catch (e) {

try { req = new XMLHttpRequest(); } catch(e) {}

}

}

if (req == null) throw new Error('XMLHttpRequest not supported');

req.open("GET", url, false);

req.send(null);

return req.responseText;

}


</script>
<style type="text/css">
table td{
background:white;
color: black;
width: 500px;
height: 25px;
border: 2px solid #ff8d1e;
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
#Sborniks {
  width: 100%; 
  height: 100%;  
  font-size: 19px; 
  background-color: #0CFFAF;
  border: 2px solid #150FA6;
}
</style>
<body>
<div class="container" style="background-color:#1E90FF; width: 100%">
      <div class="navbar-header">
        <button type="button" id="navbarBut" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"  >
              <span class="sr-only">Навигация</span>
              <span class="icon-bar" style="background-color:white;"></span>
              <span class="icon-bar" style="background-color:white;"></span>
              <span class="icon-bar" style="background-color:white;"></span>
            </button>
        <a class="navbar-brand lead" href="#message" style="color:blue; font-size: 50dp;"role="tab" data-toggle="pill" >В Небо Песни:</a>
        <img src="/iconka8.png" height="50px" width="50px">
      </div>

      <div class="collapse navbar-collapse" style="align-content: center; margin-top: 17px;" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav" style="align-content: center; margin-left: 10px; margin-right: 10px;">
          <li ><input class="submit_form" id="Sborniks" type="button" name="T0" value=" Песнь Возрождения" onclick="createTable('t0.json');"></li>
          <li ><input class="submit_form" id="Sborniks" type="button" name="T1" value=" Хвали Творца" onclick="createTable('t1.json');"></li>
          <li ><input class="submit_form" id="Sborniks" type="button" name="T2" value=" Молодёжный сборник" onclick="createTable('t2.json');"></li>
          <li ><input class="submit_form" id="Sborniks" type="button" name="T3" value=" Детский сборник" onclick="createTable('t3.json');"></li>
          <li ><input class="submit_form" id="Sborniks" type="button" name="T4" value=" Татарский сборник" onclick="createTable('t4.json');"></li>
        </ul>
      </div>
</div>
<div>
<input class="numbers" id="x" style="width: 71.5%;" name="number3" type="text" size="40" placeholder=" Введите название песни"/>
<input class="button" value="           ." style="background: url('poisk.png'); background-position:center; background-repeat:no-repeat;background-size: 20px; width: 10%;  margin-top: 3px;  background-color: #FFDEAD;  color: #FFDEAD;" type="button" name="poisk"   onclick="ODD();"></div>
</form>
<table id="elem"></table>
</body>
</html>
<!-- <?PHP
if(isset($_POST['T1'])){$ourData = file_get_contents("t1.json");}
else if(isset($_POST['T2'])){$ourData = file_get_contents("t2.json");}
else if(isset($_POST['T3'])){$ourData = file_get_contents("t3.json");}
else if(isset($_POST['T4'])){$ourData = file_get_contents("t4.json");}
else {$ourData = file_get_contents("t0.json");}
$decode = json_decode($ourData);
echo '<div>';
echo '<br><br><br><table id="tab">';
foreach($decode as $key => $v ){
  echo '<tr class="rowlink">';
    $_id = $v->_id;
    $_akords = $v->akords;
    $_name = $v->name;
    $_slova = $v->slova;
    $_ton = $v->ton;
 echo '<td class="itemA" style="display:none">'.$_akords.'</td>';
 echo '<td class="item"><p>'.$_name.'</p></td>';
 echo '<td class="itemS" style="display:none">'.$_slova.'</td>';
 echo '<td class="itemT" style="display:none">'.$_ton.'</td>';
  echo '</tr>';
}
echo '<table> </div>';
?> -->