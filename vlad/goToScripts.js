function GoToUsers()
{
	var div = document.getElementById("V_Block1");
	document.location.href = "users.php"
}


	 function PopUp(){
        var popup = document.getElementById("popup1");
        popup.classList.add('show');
    }

    function ClosePopup(){
        var popup = document.getElementById("popup1");
        popup.classList.remove('show');
    }