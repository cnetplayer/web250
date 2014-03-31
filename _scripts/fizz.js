//GET USER NAME AFTER PAGE LOAD
function getName()
{
	var name = document.getElementById("enterName").value;
	// CHECK FOR NO NAME OR CANCEL
	if ((name == "") || (name == null)) 
	{
		name = "fellow tea lover";
	}
	// BUILD AND DISPLAY GREETING
	var greeting = "Hello " + name + "! Let's build you a tea tasting schedule.";
	document.getElementById("userNameGreeting").innerHTML = greeting;	
}