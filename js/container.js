

// section setup

	var if_clientCode = "Not-Signed-In";
	var if_nt_userName = "";
	var if_nt_login = "0";
	var if_nt_numMessages = "0";
	var if_nt_span = "";
	var if_nt_zyg = "";
	var if_nt_demo = "";
	var if_nt_era = "";	
	var if_nt_bandwidth = "";
	var sections = "";
	

/**
 * SWFObject v1.4.4: Flash Player detection and embed - http://blog.deconcept.com/swfobject/
 *
 * SWFObject is (c) 2006 Geoff Stearns and is released under the MIT License:
 * http://www.opensource.org/licenses/mit-license.php
 *
 * **SWFObject is the SWF embed script formerly known as FlashObject. The name was changed for
 *   legal reasons.
 */
if(typeof deconcept=="undefined"){var deconcept=new Object();}
if(typeof deconcept.util=="undefined"){deconcept.util=new Object();}
if(typeof deconcept.SWFObjectUtil=="undefined"){deconcept.SWFObjectUtil=new Object();}
deconcept.SWFObject=function(_1,id,w,h,_5,c,_7,_8,_9,_a,_b){if(!document.getElementById){return;}
this.DETECT_KEY=_b?_b:"detectflash";
this.skipDetect=deconcept.util.getRequestParameter(this.DETECT_KEY);
this.params=new Object();
this.variables=new Object();
this.attributes=new Array();
if(_1){this.setAttribute("swf",_1);}
if(id){this.setAttribute("id",id);}
if(w){this.setAttribute("width",w);}
if(h){this.setAttribute("height",h);}
if(_5){this.setAttribute("version",new deconcept.PlayerVersion(_5.toString().split(".")));}
this.installedVer=deconcept.SWFObjectUtil.getPlayerVersion();
if(c){this.addParam("bgcolor",c);}
var q=_8?_8:"high";
this.addParam("quality",q);
this.setAttribute("useExpressInstall",_7);
this.setAttribute("doExpressInstall",false);
var _d=(_9)?_9:window.location;
this.setAttribute("xiRedirectUrl",_d);
this.setAttribute("redirectUrl","");
if(_a){this.setAttribute("redirectUrl",_a);}};
deconcept.SWFObject.prototype={setAttribute:function(_e,_f){
this.attributes[_e]=_f;
},getAttribute:function(_10){
return this.attributes[_10];
},addParam:function(_11,_12){
this.params[_11]=_12;
},getParams:function(){
return this.params;
},addVariable:function(_13,_14){
this.variables[_13]=_14;
},getVariable:function(_15){
return this.variables[_15];
},getVariables:function(){
return this.variables;
},getVariablePairs:function(){
var _16=new Array();
var key;
var _18=this.getVariables();
for(key in _18){_16.push(key+"="+_18[key]);}
return _16;},getSWFHTML:function(){var _19="";
if(navigator.plugins&&navigator.mimeTypes&&navigator.mimeTypes.length){
if(this.getAttribute("doExpressInstall")){
this.addVariable("MMplayerType","PlugIn");}
_19="<" + "embed type=\"application/x-shockwave-flash\" src=\""+this.getAttribute("swf")+"\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\"";
_19+=" id=\""+this.getAttribute("id")+"\" name=\""+this.getAttribute("id")+"\" ";
var _1a=this.getParams();
for(var key in _1a){_19+=[key]+"=\""+_1a[key]+"\" ";}
var _1c=this.getVariablePairs().join("&");
if(_1c.length>0){_19+="flashvars=\""+_1c+"\"";}_19+="/>";
}else{if(this.getAttribute("doExpressInstall")){this.addVariable("MMplayerType","ActiveX");}
_19="<" + "object id=\""+this.getAttribute("id")+"\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\">";
_19+="<" + "param name=\"movie\" value=\""+this.getAttribute("swf")+"\" />";
var _1d=this.getParams();
for(var key in _1d){_19+="<" + "param name=\""+key+"\" value=\""+_1d[key]+"\" />";}
var _1f=this.getVariablePairs().join("&");
if(_1f.length>0){_19+="<" + "param name=\"flashvars\" value=\""+_1f+"\" />";}_19+="<" +"/object>";}
return _19;
},write:function(_20){
if(this.getAttribute("useExpressInstall")){
var _21=new deconcept.PlayerVersion([6,0,65]);
if(this.installedVer.versionIsValid(_21)&&!this.installedVer.versionIsValid(this.getAttribute("version"))){
this.setAttribute("doExpressInstall",true);
this.addVariable("MMredirectURL",escape(this.getAttribute("xiRedirectUrl")));
document.title=document.title.slice(0,47)+" - Flash Player Installation";
this.addVariable("MMdoctitle",document.title);}}
if(this.skipDetect||this.getAttribute("doExpressInstall")||this.installedVer.versionIsValid(this.getAttribute("version"))){
var n=(typeof _20=="string")?document.getElementById(_20):_20;
n.innerHTML=this.getSWFHTML();return true;
}else{if(this.getAttribute("redirectUrl")!=""){document.location.replace(this.getAttribute("redirectUrl"));}}
return false;}};
deconcept.SWFObjectUtil.getPlayerVersion=function(){
var _23=new deconcept.PlayerVersion([0,0,0]);
if(navigator.plugins&&navigator.mimeTypes.length){
var x=navigator.plugins["Shockwave Flash"];
if(x&&x.description){_23=new deconcept.PlayerVersion(x.description.replace(/([a-zA-Z]|\s)+/,"").replace(/(\s+r|\s+b[0-9]+)/,".").split("."));}
}else{try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");}
catch(e){try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");
_23=new deconcept.PlayerVersion([6,0,21]);axo.AllowScriptAccess="always";}
catch(e){if(_23.major==6){return _23;}}try{axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash");}
catch(e){}}if(axo!=null){_23=new deconcept.PlayerVersion(axo.GetVariable("$version").split(" ")[1].split(","));}}
return _23;};
deconcept.PlayerVersion=function(_27){
this.major=_27[0]!=null?parseInt(_27[0]):0;
this.minor=_27[1]!=null?parseInt(_27[1]):0;
this.rev=_27[2]!=null?parseInt(_27[2]):0;
};
deconcept.PlayerVersion.prototype.versionIsValid=function(fv){
if(this.major<fv.major){return false;}
if(this.major>fv.major){return true;}
if(this.minor<fv.minor){return false;}
if(this.minor>fv.minor){return true;}
if(this.rev<fv.rev){
return false;
}return true;};
deconcept.util={getRequestParameter:function(_29){
var q=document.location.search||document.location.hash;
if(q){var _2b=q.substring(1).split("&");
for(var i=0;i<_2b.length;i++){
if(_2b[i].substring(0,_2b[i].indexOf("="))==_29){
return _2b[i].substring((_2b[i].indexOf("=")+1));}}}
return "";}};
deconcept.SWFObjectUtil.cleanupSWFs=function(){if(window.opera||!document.all){return;}
var _2d=document.getElementsByTagName("OBJECT");
for(var i=0;i<_2d.length;i++){_2d[i].style.display="none";for(var x in _2d[i]){
if(typeof _2d[i][x]=="function"){_2d[i][x]=function(){};}}}};
deconcept.SWFObjectUtil.prepUnload=function(){__flash_unloadHandler=function(){};
__flash_savedUnloadHandler=function(){};
if(typeof window.onunload=="function"){
var _30=window.onunload;
window.onunload=function(){
deconcept.SWFObjectUtil.cleanupSWFs();_30();};
}else{window.onunload=deconcept.SWFObjectUtil.cleanupSWFs;}};
if(typeof window.onbeforeunload=="function"){
var oldBeforeUnload=window.onbeforeunload;
window.onbeforeunload=function(){
deconcept.SWFObjectUtil.prepUnload();
oldBeforeUnload();};
}else{window.onbeforeunload=deconcept.SWFObjectUtil.prepUnload;}
if(Array.prototype.push==null){
Array.prototype.push=function(_31){
this[this.length]=_31;
return this.length;};}
var getQueryParamValue=deconcept.util.getRequestParameter;
var FlashObject=deconcept.SWFObject;
var SWFObject=deconcept.SWFObject;



var isLayer;
// will look for versions 25 and under -this should last us a few years
var maxVersion = 25;
var minVersion = 0;
var flashVersion = 0;
var f2,f3,f4,f5,f6,f7,f8 = false;
var isMacintosh = (navigator.appVersion.indexOf("Mac") >=0) ? true : false;
var isIE  = (navigator.appVersion.indexOf("MSIE") != -1) ? true : false;
var isWin = (navigator.appVersion.toLowerCase().indexOf("win") != -1) ? true : false;
var isOpera = (navigator.userAgent.indexOf("Opera") != -1) ? true : false;
var isNetscape = (navigator.userAgent.indexOf("Netscape") != -1) ? true : false;
var isFirefox = (navigator.userAgent.indexOf("Firefox") > -1) ? true : false;
var isN6 = (document.getElementById && !document.all) ? true : false;
var isN	= (document.layers) ? true : false;
var useLayer = (isN || isN6 || isMacintosh) ? true : false ;
var plat = (window.navigator.userAgent.indexOf("AOL")>=0 || window.navigator.userAgent.indexOf("A.O.L.")>=0)? "AOL" : "norm";

/*************************************************************************/
if(isIE && isWin){
	document.write("<" + "SCR" + "IPT LANGUAGE=VBScript> \n");
    document.write("  Function VBGetSwfVer(i) \n");
    document.write("    on error resume next \n");
    document.write("    Dim swControl, swVersion \n");
    document.write("    swVersion = 0 \n");
    document.write("    set swControl = CreateObject(\"ShockwaveFlash.ShockwaveFlash.\" + CStr(i)) \n");
    document.write("    if (IsObject(swControl)) then \n");
    document.write("      swVersion = i //swControl.GetVariable(\"$version\") \n");// disable full activeX object and just return the version primary
	document.write("      break  \n");
    document.write("    end if \n");
    document.write("    VBGetSwfVer = swVersion \n");
    document.write("End Function \n");
	document.write("// -->  \n");
	document.write("<" + "/SCR" + "IPT> \n");
}
/************************************************************************/
// Detect Client Browser type
function JSGetSwfVer(i) {
      // NS/Opera version >= 3 check for Flash plugin in plugin array
      if (navigator.plugins != null && navigator.plugins.length > 0) {
            if (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]) {
                  var swVer2 = navigator.plugins["Shockwave Flash 2.0"] ? " 2.0" : "";
                        var flashDescription = navigator.plugins["Shockwave Flash" + swVer2].description;
                        descArray = flashDescription.split(" ");
                        tempArrayMajor = descArray[2].split(".");
                        versionMajor = tempArrayMajor[0];
                  if ( descArray[3] != "" ) {
                        tempArrayMinor = descArray[3].split("r");
                  } else {
                        tempArrayMinor = descArray[4].split("r");
                  }
                        versionMinor = tempArrayMinor[1] > 0 ? tempArrayMinor[1] : 0;
                        flashVer = parseFloat(versionMajor + "." + versionMinor);
            } else {
                  flashVer = -1;
            }
      }
      // MSN/WebTV 2.6 supports Flash 4
      else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.6") != -1) flashVer = 4;
      // WebTV 2.5 supports Flash 3
      else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.5") != -1) flashVer = 3;
      // older WebTV supports Flash 2
      else if (navigator.userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 2;
      // Can't detect in all other cases
      else { flashVer = -1; }
      return flashVer;
}

if (isIE && isWin && !isOpera) {
	for (i = maxVersion; i > 0; i--) {
      	flashVersion = VBGetSwfVer(i);
	  	if (flashVersion) { break };
	} 
} else {
      flashVersion = JSGetSwfVer(maxVersion);
	  flashVersion = Math.floor(flashVersion);// just return the version primary
}



	var extraVals = '';
	extraVals = extraVals==""?extraVals:"&"+extraVals;
	var if_nt_Screen_Attr = screen.height + "x" + screen.width + "x" + screen.colorDepth;
	var if_nt_Flash = flashVersion;

	

	var docURL = document.location + "";

	
			var partsParts = window.location.pathname;
		

	var if_nt_url= escape(partsParts);
	
	
	var mep1;
	function setMep1(str){
		mep1 = str;
	}
	setMep1(sections + "&pageName=" + "&if_nt_login=" + if_nt_login + "&if_clientCode=" + if_clientCode + "&if_nt_userName=" + if_nt_userName + "&if_nt_bandwidth=" + if_nt_bandwidth + "&if_nt_Screen_Attr=" + if_nt_Screen_Attr + "&if_nt_zyg=" + if_nt_zyg + "&if_nt_span=" + if_nt_span + "&if_nt_demo=" + if_nt_demo + "&if_nt_era=" + if_nt_era + "&if_nt_Flash=" + if_nt_Flash + extraVals);

	

	var bc="&if_nt_Browser_Combination=" + escape(window.navigator.userAgent);
	var Site=''; var if_SiteID='';


	


		<!-- BEGIN: coda reporting code from /sitewide/scripts/reporting/coda_reporting.js -->
			
		<!-- END: coda reporting code from /sitewide/scripts/reporting/coda_reporting.js -->
		
					


var clientEnvironmentVars = "fla=" + flashVersion + ";bps=" + if_nt_bandwidth;
if(location.search.indexOf('testmode=on')!=-1)
	clientEnvironmentVars += ";testmode=on";

var numkeys = 7;
var keyvals = new Array(numkeys);
var keynames = new Array(numkeys);
var allkeys = "";

keynames[0] = "zyg";
keynames[1] = "span";
keynames[2] = "demo";
keynames[3] = "era";
keynames[4] = "clientCode";
keynames[5] = "login";
keynames[6] = "userName";

keyvals[0] = if_nt_zyg;
keyvals[1] = if_nt_span;
keyvals[2] = if_nt_demo;
keyvals[3] = if_nt_era;
keyvals[4] = if_clientCode;
keyvals[5] = if_nt_login;
keyvals[6] = if_nt_userName;

if (keyvals[4] == "Not-Signed-In"){ keyvals[4] = ""; }

for (var i=0; i<numkeys; i++){
	if (keyvals[i].length != 0){
		allkeys = allkeys + keynames[i] + "=" + keyvals[i] + ";";
	}
}

var personalizationVars = allkeys;

var siteVersion = "FBML";

