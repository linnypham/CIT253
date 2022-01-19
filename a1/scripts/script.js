function GetTotal()
{
	var processorprice = 0;
	var harddriveprice = 0;
	var memoryprice = 0;
	var networkcardprice = 0;
	var modemprice = 0;
	var totalprice = 0;
	var i;

	// Get processor price
	for (i=1; i<=3; i++) {
		if (document.getElementById("Processor" + i).checked) {
			processorprice=parseInt(document.getElementById("Processor" + i).value);
		}
	}

	// get hard drive price
	for (i=1; i<=3; i++) {
		if (document.getElementById("HardDrive" + i).checked) {
			harddriveprice=parseInt(document.getElementById("HardDrive" + i).value);
		}
	}

	// get memory price
	i=document.getElementById("Memory").selectedIndex;
	memoryprice=parseInt(document.getElementById("Memory") [i].value);

	// get network card price
	if (document.getElementById("NetworkCard").checked) {
		networkcardprice=parseInt(document.getElementById("NetworkCard").value);
	}
	else {
		networkcardprice=0;
	}

	// get modem price
	if (document.getElementById("Modem").checked) {
		modemprice=parseInt(document.getElementById("Modem").value);
	}
	else {
		modemprice=0;
	}

	// get total price
	totalprice=1000 + processorprice + harddriveprice + memoryprice + networkcardprice + modemprice;
	document.getElementById("TotalPrice").value=totalprice;
                      
}