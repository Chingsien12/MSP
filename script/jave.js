"use strict"

function alertText()
{
	alert("Successfully added to the database!");
}




function init()
{

    var regForm= document.getElementById("Form");
    regForm.onclick=alertText;
  
}
addEventListener("load",init);