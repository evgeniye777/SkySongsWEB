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
    alert($(this).find('.itemA').html()+'\n'+$(this).find('.itemS').html());
  });
});
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
  <form action='' method='post' class="menu">
<div class="container" style="background-color:skyblue;">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"  >
              <span class="sr-only">Навигация</span>
              <span class="icon-bar" style="background-color:white;"></span>
              <span class="icon-bar" style="background-color:white;"></span>
              <span class="icon-bar" style="background-color:white;"></span>
            </button>
        <a class="navbar-brand lead" href="#message" style="color:blue; font-size: 50dp;"role="tab" data-toggle="pill" >В Небо Песни:</a>
        <img src="/iconka8.png" height="50px" width="50px">
      </div>

      <div class="collapse navbar-collapse" style="align-content: center;" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav" style="align-content: center;">
          <li ><input class="submit_form" style="width: 100%; height: 100%;  background-color: #00000000;" type="submit" name="T0" value=" Песнь Возрождения" ></li>
          <li ><input class="submit_form" style="width: 100%; height: 100%;  background-color: #00000000;" type="submit" name="T1" value=" Хвали Творца"></li>
          <li ><input class="submit_form" style="width: 100%; height: 100%;  background-color: #00000000;" type="submit" name="T2" value=" Молодёжный сборник"></li>
          <li ><input class="submit_form" style="width: 100%; height: 100%;  background-color: #00000000;" type="submit" name="T3" value=" Детский сборник"></li>
          <li ><input class="submit_form" style="width: 100%; height: 100%;  background-color: #00000000;" type="submit" name="T4" value=" Татарский сборник"></li>
        </ul>
      </div>
</div>
<input class="numbers" id="x" name="number3" type="text" size="40" placeholder=" Введите название песни"/>
<input class="submit_form" style="width: 200px;" type="submit" name="poisk" value=" Найти">
</form>
</body>
</html>
<?PHP
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
?>