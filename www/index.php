<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <?php 
    $host = 'localhost'; 
    //$database = 'id7475513_firstdatabase';
    //$user = 'id7475513_websiteforeducation';
    //$password = 'Jobs1234jobs'; 
    $database = 'EduWeb';
    $user = 'Vlad';
    $password = '1234';
    ?>
	<title>Лабораторна 1</title>
	<link rel="stylesheet" href="style.css">
	<style>
.bgclass
{
	background-color: #FFFFDD ;
	background-image: url(back.jpg);
	background-attachment: fixed;
	background-repeat: repeat-y;

}
</style>
</head>
<body class="bgclass">

<?php

$mysqli = new mysqli($host, $user, $password, $database) ;
$mysqli->query("SET NAMES 'utf-8'");
$mysqli->query("SET CHARACTER SET 'utf8'");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else echo "Подключено!";
$res = $mysqli->query("SELECT * FROM user");?>
<table border="4" bordercolor=#000099 rules="cols">
<?php
echo "<tr><td>Имя</td><td>Фамилия</td></tr>";
for ($row_no = 0; $row_no<$res->num_rows; $row_no++) {
	echo "<tr>";
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
    echo "<td> " . $row['FirstName'] . "</td>". "<td>".$row['SecondName'] . "</td>";
    echo "</tr>";
}
 ?>
</table>
<div class="popup" onmouseover="myFunctionAdd()" onmouseout="myFunctionRemove()">Click me!
<div class="popuptext" id="myPopup">Test on Click, rly nice text on click</div>

	</div>
	<script src="scriptPopup.js"></script>
<!--$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
    $query ="SELECT * FROM User";
$result = mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "Выполнение запроса прошло успешно";
}
   // $row=mysql_fetch_array($result);

  //  echo $row['Name'];

    
    mysqli_close($link);-->

<p ><h1 align=center>Це лабораторна робота №1.!!!!!!!!!!!!!!</h1></p>
<pre>
	
       ||||
     ||  ||
    ||   ||
         ||
         ||
         ||
         ||
         ||
      ||||||||
</pre>
<p>Вона просто чудова, я таких ніколи не бачив. </p>
<p >Як вона чудово виконана! &#128276;</p>
	<br>&quot;Ну дійсно ж&quot;: &emsp; сказав би я
	<p>

		<i>Курсив фізичний</i><br>
		<em>Курсив логічний</em><br>
		<b>Жирний фізичний</b><br>
		<strong>Жирний логічний</strong><br>
		<b><i>Жирний курсив</i></b><br>
		<u>Підкреслений текст</u><br>
		<s>Фізичне перекреслення</s><br>
		<del>Логічне перекреслення</del><br>
		H<sub>2</sub>O<br>
		x<sup>2</sup>+y<sup>2</sup>=0<br>
		<tt>телетайпний текст</tt><br>
		<big>Большой</big> и <small>малый</small> текст<br>
		<p><font size="3" face="consolas" color=#700000>Отформатированый с помощью font. Шрифт - &quot;consolas&quot;</font></p>
		<h1>Заголовок H1</h1>
		<h2>Заголовок H2</h2>
		<h3>Заголовок H3</h3>
		<h4>Заголовок H4</h4>
		<h5>Заголовок H5</h5>
		<h6>Заголовок H6</h6>
		Нумерований список:
		<ol>
			<li>Елемент 1</li>
			<li>Елемент 2</li>
			<li>Елемент 3</li>
		</ol>
		Нумерований список с числа 10:
		<ol>
			<li value="10">Елемент 10</li>
			<li>Елемент 11</li>
			<li>Елемент 12</li>
		</ol>
		Маркерований список:
		<ul>
			<li>Елемент 1</li>
			<ol>
				<li>Елемент 1_1</li>
				<li>Елемент 1_2</li>
				<li>Елемент 1-3</li>
			</ol>
			<li>Елемент 2</li>
			<li>Елемент 3</li>
		</ul>
		<dl>
  		<dt><b>Корпускулярно-волновой дуализм</b></dt><dd>Корпускулярно-волновой дуализм - свойство природы, состоящее в том, что материальные микроскопические объекты могут при одних условиях проявлять свойства классических волн, а при других — свойства классических частиц</dd>
  		<br>
 		<dt><b>Прокрастинация</b></dt><dd>Прокрастинация - в психологии склонность к постоянному откладыванию даже важных и срочных дел, приводящая к жизненным проблемам и болезненным психологическим эффектам</dd>
 		</dl>
 		<cite>Автор</cite>
 		<blockquote><q>Цитата тут</q></blockquote>
<br>
 		<ul type="circle">
			<li>Елемент 1</li>
			<li>Елемент 2</li>
			<li>Елемент 3</li>
		</ul>
		<br>
		<ul type="square">
			<li>Елемент 1</li>
			<li>Елемент 2</li>
			<li>Елемент 3</li>
		</ul>
 		<!--Comments

sdfsdfasfd
asdfasdf
 		-->
	</p>
</body>
</html>
