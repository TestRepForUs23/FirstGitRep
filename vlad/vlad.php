<!DOCTYPE html>
<html>
<head>
	<link href="../style.css" rel="stylesheet">
	<link href="vlad.css" rel="stylesheet">
	<title>Vlad</title>
	<script src="goToScripts.js"></script>
</head>
<body>

	<!--POPUP-->
	<div class="popup" id="popup1">ПРИВЕТ!!!
		<div id="ButtonClosePopup" onclick="ClosePopup()">Close</div>
	</div>
	<div align="center" id="V_BlockParent" >
		<div id="V_DivHeader">
		<p ><font>Привет, это сайт Влада</font></p>
		</div>
	</div>
	<div align="center" id="V_BlockParent" >
		<div  onclick="GoToUsers()" class="V_BattonBlock" id="V_Block1">
			Пользователи
		</div>

		<div class="V_BattonBlock" id="V_Block2" onclick="PopUp()">
			2 Block
		</div>
		<div class="V_BattonBlock" id="V_Block3">
			3 Block
		</div>
	</div>

</body>
</html>