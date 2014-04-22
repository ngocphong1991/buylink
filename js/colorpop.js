// ColorPop Javascript file copyright 2005 www.iconico.com

// Change the path to point to where your ColorPop files are installed, including the XML key
var path = "js/";
var color_field = '';
var isOpen = false;
var chosen_color, field, img, pd, mx, my, tempField;
var hexa = new Array(0,1,2,3,4,5,6,7,8,9,"A","B","C","D","E","F"); 
var nua = navigator.userAgent.toLowerCase();
var flashObj = "";

if (nua.indexOf("windows" != -1)) {
	if (nua.indexOf("firefox") !=  -1) {
		flashObj = "colorpop2";
	} else if ((nua.indexOf("msie") !=  -1)&&(nua.indexOf("msie 4") ==  -1)) {
		flashObj = "colorpop1";
	}
}

// flash detect script taken from kirupa.com
var MM_contentVersion = 6;
var plugin = (navigator.mimeTypes && navigator.mimeTypes["application/x-shockwave-flash"]) ? navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin : 0;
if ( plugin ) {
		var words = navigator.plugins["Shockwave Flash"].description.split(" ");
	    for (var i = 0; i < words.length; ++i)
	    {
		if (isNaN(parseInt(words[i])))
		continue;
		var MM_PluginVersion = words[i]; 
	    }
	var MM_FlashCanPlay = MM_PluginVersion >= MM_contentVersion;
}
else if (navigator.userAgent && navigator.userAgent.indexOf("MSIE")>=0 
   && (navigator.appVersion.indexOf("Win") != -1)) {
	document.write('<SCR' + 'IPT LANGUAGE=VBScript\> \n');
	document.write('on error resume next \n');
	document.write('MM_FlashCanPlay = ( IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash." & MM_contentVersion)))\n');
	document.write('</SCR' + 'IPT\> \n');
}

if ((flashObj != "") && (!MM_FlashCanPlay)) {
	flashObj = "";
}

function setColour(hex) {
	chosen_color = hex;
	closeColorPop(true);
	AdQuick('change_color', color_field)
}

function getColour() {
	document.getElementById(flashObj).SetVariable("jsType", "set");	
}

function updateSwatch(selectObj) {
	document.getElementById(flashObj).SetVariable("jsType", selectObj.value);
}		

function webSafe() {
	document.getElementById(flashObj).SetVariable("jsChange", "safehex");
}

function setItem(item) {
	document.getElementById(flashObj).SetVariable("jsItem", eval(item));	
}

function colorPopMini(field_id, image_id) {
	cpWidth = "235px";
	cpHeight = "180px";	
	openColorPop(field_id, image_id, cpWidth, cpHeight, "mini");
}

function colorPop(field_id, image_id) {
	color_field = field_id
	cpWidth = "520px";
	cpHeight = "310px";	
	openColorPop(field_id, image_id, cpWidth, cpHeight, "normal");
}

function openColorPop(field_id, image_id, cpWidth, cpHeight, type) {
	if (isOpen) {
		closeColorPop();
	}
	field = document.getElementById(field_id);
	img = document.getElementById(image_id);
	mx = 0;
	my = 0;
	tempField = field;
	while (tempField!=null) {
		mx += tempField.offsetLeft;
		my += tempField.offsetTop -1;
		tempField = tempField.offsetParent;
	}
	if (!pd) {
		pd = document.createElement("div");
		pd.style.filter = "progid:DXImageTransform.Microsoft.dropshadow(OffX=5, OffY=5, Color=cccccc, Positive='true')";
		pd.style.position = "absolute";
		pd.style.backgroundColor = "#ffffff";
		pd.style.border = "1px solid #000000";
		pd.style.zIndex = 99;
		document.body.appendChild(pd);
	} else {
		pd.style.display = "block";
	}
	pd.style.left = mx + "px";
	pd.style.top = my + "px";	
	if (flashObj != "") {
		pd.style.padding = "0px 0px 0px 5px";
		pd.style.width = cpWidth;
		pd.style.height = cpHeight;
		if (type == "mini") {
			pd.innerHTML = miniContent();
		} else {
			pd.innerHTML = popupContent();
		}
		isOpen = true;
	} else {
		pd.style.padding = "5px";
		pd.style.width = "290px";
		pd.style.height = "270px";
		pd.innerHTML = staticContent();
		isOpen = true;
	}
}

function closeColorPop(setColor) {
	if (setColor) {
		field.value = chosen_color;
		if (img) {
			img.src = path + "blank.gif";
			img.style.backgroundColor = "#" + chosen_color;
		}
	}
	pd.style.display = "none";
	pd.innerHTML = "";
	isOpen = false;
}


function popupContent() {
	if (field.value == "") {
		initialHex = "FF0000";
	} else {
		initialHex = field.value;
	}
	return '<form style="margin:0px"><table border="0"><tr><td valign="top"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="500" height="275" id="colorpop1" name="colorpop1" align="middle"><param name="allowScriptAccess" value="sameDomain" /><param name="movie" value="'+path+'colorpop.swf?xmlPath='+path+'&initialHex='+initialHex+'" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><embed src="'+path+'colorpop.swf?xmlPath='+path+'&initialHex='+initialHex+'" quality="high" bgcolor="#ffffff" width="500" height="275" name="colorpop2" id="colorpop2" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></object></td></tr><tr><td colspan="4" align="right">Swatches: <select onchange="updateSwatch(this)" id="swatch_select"><option value="" selected="selected">Choose a swatch -></option><option value="wss">Web safe colors</option><option value="wc">Named web colors</option><option value="wins">Windows OS colors</option><option value="macs">Mac OS colors</option><option value="scs">16 color</option></select>&nbsp;&nbsp;<input type="button" onfocus="closeColorPop(false)" value="Cancel" />&nbsp;&nbsp;<input type="button" onfocus="webSafe()" value="Web safe" />&nbsp;&nbsp;<input type="button" onfocus="getColour()" value="Select color" /></td></tr></table></form>';
}

function miniContent() {
	if (field.value == "") {
		initialHex = "FF0000";
	} else {
		initialHex = field.value;
	}
	return '<form style="margin:0px"><table border="0"><tr><td valign="top"><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="225" height="150"  id="colorpop1" name="colorpop1" align="middle"><param name="allowScriptAccess" value="sameDomain" /><param name="movie" value="'+path+'colorpop_mini.swf?xmlPath='+path+'&initialHex='+initialHex+'" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><embed src="'+path+'colorpop_mini.swf?xmlPath='+path+'&initialHex='+initialHex+'" quality="high" bgcolor="#ffffff" width="225" height="150" name="colorpop2" id="colorpop2" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></object></td></tr><tr><td align="right"><input type="button" onfocus="closeColorPop(false)" value="Cancel" />&nbsp;<input type="button" onfocus="getColour()" value="Select color" /></td></tr></table></form>';
}

function hex(r,g,b) {
	if (r < 0) r = "00";
	else if (r > 255) r = "ff";
	else r = "" + hexa[Math.floor(r/16)] + hexa[r%16];
	if (g < 0) g = "00";
	else if (g > 255) g = "ff";
	else g = "" + hexa[Math.floor(g/16)] + hexa[g%16];
	if (b < 0) b = "00";
	else if (b > 255) b = "ff";
	else b = "" + hexa[Math.floor(b/16)] + hexa[b%16];
	return r + g + b;
}

function staticContent() {
	strOut = "<form style='margin:5px'><table border='0' cellpadding='0' cellspacing='1' style='background-color:#000'>";
	var n=0;
	for (r=255; r>=0; r-=51) {
		for (g=255; g>=0; g-=51) {
			for (b=255; b>=0; b-=51) {
				xPos = n % 12;
				if (xPos == 0) {
					strOut += "</tr><tr>";
				}
				color = hex(r,g,b);
				strOut += "<td><a href=\"javascript:setColour('" + color + "')\"><img src=\""+path+"blank.gif\" width=\"22\" height=\"12\" border=\"0\"  style=\"background-color:#" + color + "\" /></a></td>";
				n++;
			}
		}
	}
	strOut += '</table><br /><span style="float:left;font-size:10px; font-family:verdana;"><a href="http://www.iconico.com/link.asp?app=colorPop&ver=1&minorver=0&action=mainlink" target="_blank">ColorPop v1.0&copy;2005 iconico.com</a></span><span style="float:right;"><input type="button" onfocus="closeColorPop(false)" value="Cancel" /></span></form>';	
	return strOut;
}
