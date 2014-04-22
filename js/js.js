<!--
function check_ppc(){
	
		ref = document.forms['ppc'];

		document.getElementById('submit_ppc').disabled = true;
		
		var rate = parseFloat(ref.cost.value);
		var clicks = parseInt(ref.clicks.value);
		var min_spend = parseFloat(ref.min_spend.value);
		var product = parseFloat(clicks*rate);
		
		ref.ppc_balance.value = product.toFixed(2);
		ref.total.value = product.toFixed(2);
		
		if(product >= min_spend)
			document.getElementById('submit_ppc').disabled = false;
		
		else 
			document.getElementById('submit_ppc').disabled = true;
	}

function checkme(){
  var args = checkme.arguments;
  var source=args[0].value;
  var ext=source.substring(source.lastIndexOf(".")+1,source.length).toLowerCase();
  
  var valid = false;
  
  for(i=1; i<args.length; i++) {
		if ( ext == args[i] ) {
			valid = true;
			break;
		}
	  }
	  
  if (!valid) {
    alert("This is not a valid file format for this Ad!");
		if(document.getElementById('update_file'))
			document.getElementById('update_file').disabled = true;
		else if(document.getElementById('upload'))	
			document.getElementById('upload').disabled = true;
	return false;
  }
  else if (valid) {
  		if(document.getElementById('update_file'))
			document.getElementById('update_file').disabled = false;
		else if(document.getElementById('upload'))	
			document.getElementById('upload').disabled = false;
		return true;
  }
}



var hidden_current_product_price = 0;
function check_buy_form(ref) {
		var radio_choice = false;

		if(!(ref.order_product_id)) {  
			alert("Sorry, there is no Ad Product in this section!")
				return false;
		}
		
		if(ref.order_product_id.length) {			
				for (counter = 0; counter < ref.order_product_id.length; counter++)	{
					if (ref.order_product_id[counter].checked)
						radio_choice = true; 
					}
				}
		
			else if(ref.order_product_id){
					if(ref.order_product_id.checked)
						radio_choice = true;
				}		
			
			if (!radio_choice)
			{
				alert("Please select an Ad Product!")
				return false;
			}
			
			if(ref.offer.checked) {
					var t = /^(\d+)?(\.\d+)?$/
					if (ref.offer_price.value == '' || !(t.test(ref.offer_price.value))){
					alert("Please enter a valid Offer Cost");
					return false;
					}
					
					if(parseFloat(ref.offer_price.value) >= parseFloat(hidden_current_product_price))
					{
						alert('Your Offer Price should be less than the Set price.');
						return false;
						}
						
					if(parseFloat(ref.offer_price.value) <= 0) {
							alert('Your Offer Price should be more than 0(zero).');
						return false;
						}
			}
		return true;
	}



var current_productinfo = '<strong>Move your mouse pointer over an item to see details...</strong>';
var currently_selected_tr = '';
function show_details(id_var, target) {
		document.getElementById(target).innerHTML = eval(id_var.id);
		id_var.className = 'post-footer';
	}
	
function show_details_fixed(id_var, target, show_offer, offer_div, product_price) {
	
	hidden_current_product_price = product_price;
	
		current_productinfo = eval(id_var.id);
		document.getElementById(target).innerHTML = current_productinfo;
		document.getElementById(id_var.id+'_radio').checked = 'checked';
		currently_selected_tr.className=''; 
		currently_selected_tr=id_var;
		id_var.className = 'box';
		
		if(show_offer != 'Y') {
			document.getElementById(offer_div).style.display = 'none';
			document.getElementById('toffer').checked = false;
			document.getElementById('ioffer').checked = false;
			document.getElementById('voffer').checked = false;
		}
		else 
			document.getElementById(offer_div).style.display = 'block';
	}

function show_details_restore(ref, target) {		
		document.getElementById(target).innerHTML = current_productinfo;
		if(document.getElementById(ref.id+'_radio').checked)
			ref.className = 'box';
		else
			ref.className = '';
	}

	
function del_confirm(){
	if(confirm('Do you really want to delete this Ad?')) 
		return true; 
		else return false;
	}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.id; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+=''+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += ''+nm+' is required.\n'; }
  } if (errors) alert(''+errors);
  document.MM_returnValue = (errors == '');
}


/// function for ad code
/// by A. B. M. Adnan
/// email: adnan.eee@gmail.com

var direction = '';
var adw = 0
var adh = 0
id_counter = 1

			total_ads = 0
			border_col = ''
			back_col = ''
			hl_col = ''
			des_c = ''
			fnt = ''
			hl_s = ''
			des_s = ''
			p_by = ''
			y_ad = ''
			title = ''
			hl_u = ''
			hl_dec = ''
			
	var ad = document.getElementById('ad_code')
	var ad_hl = 'Example Text'
	var ad_des = 'Example Ad Description Text'





function AdQuick(){
	args = AdQuick.arguments;
	ad = document.getElementById('ad_code')
	if(args[0] == 'initialize'){
			
			total_ads = parseInt(args[5])
			border_col = '#'+args[8]
			back_col = '#'+args[9]
			hl_col = '#'+args[10]
			des_c = '#'+args[11]
			fnt = args[12]
			hl_s = args[13]
			des_s = args[14]
			p_by = args[15]
			y_ad = args[16]
			title = args[17]
			hl_u = args[18]
			
			if(args[19] == 'Y') direction = 'h'
			else if (args[19] == 'N') direction = 'v'
			
			hl_dec = 'none'
			if(hl_u == 'Y') hl_dec = 'underline' 

			
			ad.style.border = '1px solid '+border_col
			ad.style.backgroundColor = back_col
			ad.style.width = adw+'px'
			ad.style.height = adh+'px'
			
			typ = args[4]
			if(typ != 'text')
			{
					ad_hl = '';
					ad_des = '';
					ad.style.border = 0
					ad.style.backgroundImage = "url(js/adbg.jpg)";
				}

			
			DOM(direction)
			
	}

///////////////////////////////////////// DOM ///////////////////////////////////////////
	
	if(args[0] == 'layout'){
			adw = args[1]
			adh = args[2]
			
			ad.style.width = adw+'px'
			ad.style.height = adh+'px'
			
/*			if (args[1] >= args[2])
				direction = 'h'
			else	
				direction = 'v'
*/				
			DOM (direction);

		}
		
	if(args[0] == 'text_dir') {
		if(args[1] == 'Y') direction = 'h';
		else if (args[1] == 'N') direction = 'v';
		DOM (direction);
	}
	if(args[0] == 'underline') {
		if(args[1] == 'Y') 
			hl_dec = 'underline'
		else if	(args[1] == 'N')
			hl_dec = 'none'	
		for(i=1; i<=total_ads; i++)	{
				document.getElementById('ad_headline'+i).style.textDecoration = hl_dec
				}			
		}
	

	if(args[0] == 'des_font_s'){
		des_s = args[1]
		for(i=1; i<=total_ads; i++)	{				
					document.getElementById('ad_des'+i).style.fontSize = des_s
			}			
		}
	

	if(args[0] == 'hl_font_s'){
		hl_s = args[1]
		for(i=1; i<=total_ads; i++)	{				
					document.getElementById('ad_headline'+i).style.fontSize = hl_s
			}			
		}
		
	if(args[0] == 'font'){
		fnt = args[1]
		for(i=1; i<=total_ads; i++)	{			
					document.getElementById('ad_headline'+i).style.fontFamily = fnt
					document.getElementById('ad_des'+i).style.fontFamily = fnt
			}			
		}
		
	if(args[0] == 'totalads'){
			total_ads = parseInt(args[1]);
			DOM(direction)
		}
		
	if(args[0] == 'change_color'){
			f = args[1]
			cval = '#'+document.getElementById(f).value;
			if(f=='field1') {
			border_col = cval
			ad.style.border = '1px solid '+border_col
			}
			if(f=='field2') {
			back_col = cval
			ad.style.backgroundColor = back_col
			}
			if(f=='field3') {
			hl_col = cval
				for(i=1; i<=total_ads; i++)	{
						document.getElementById('ad_headline'+i).style.color = hl_col
				}			
			}
			if(f=='field4') {
			des_c = cval
				for(i=1; i<=total_ads; i++)	{
						document.getElementById('ad_des'+i).style.color = des_c
				}			
			}
		}	
	
	}
//
function DOM(dir){

			if(document.getElementById('ad_table')) {
			var dv = document.getElementById('ad_code');
			del_tbl = document.getElementById('ad_table');
			dv.removeChild(del_tbl);
			}

				var tbl = document.createElement('TABLE');
				tbl.id = "ad_table";
				tbl.cellPadding = 0
				tbl.width = '100%'
				tbl.cellSpacing = 0
				
					var tbody = document.createElement('TBODY');
					tbl.appendChild(tbody);
				///////////////  start of row
				if(dir == 'h') {
						var row = document.createElement('TR');
				
							for (i=1; i<=total_ads; i++) {
							
							var td = document.createElement('TD');
							td.style.verticalAlign = 'top'
							td.style.textAlign = 'left'
							//td.style.paddingLeft = '4px'
							
								var div = document.createElement('DIV');
								div.id = 'ad_headline'+i
								div.style.color = hl_col
								div.style.fontWeight = 'bold'
								div.style.textDecoration = hl_dec
								div.style.fontSize = hl_s
								div.style.fontFamily = fnt
								div.style.margin = '0 auto'
								div.style.paddingTop = '2px'
								div.style.cursor = 'Pointer'
								div.appendChild(document.createTextNode(ad_hl));
			
								var div2 = document.createElement('DIV');
								div2.id = 'ad_des'+i
								div2.style.color = des_c
								div2.style.fontWeight = 'normal'
								div2.style.textDecoration = 'none'
								div2.style.fontSize = des_s
								div2.style.fontFamily = fnt
								div2.style.margin = '0 auto'					
								div2.style.cursor = 'Pointer'					
								div2.appendChild(document.createTextNode(ad_des));
			
							td.appendChild(div);
							td.appendChild(div2);
			
						row.appendChild(td);			
						}
												
					tbody.appendChild(row);
				}
				
				else if(dir == 'v') {
					for (i=1; i<=total_ads; i++) {
							var row = document.createElement('TR');
				
							
							
							var td = document.createElement('TD');
							td.style.verticalAlign = 'top'
							td.style.textAlign = 'left'
							//td.style.paddingLeft = '4px'
							
								var div = document.createElement('DIV');
								div.id = 'ad_headline'+i
								div.style.color = hl_col
								div.style.fontWeight = 'bold'
								div.style.textDecoration = hl_dec
								div.style.fontSize = hl_s
								div.style.fontFamily = fnt
								div.style.margin = '0 auto'
								div.style.paddingTop = '2px'
								div.style.cursor = 'Pointer'
								div.appendChild(document.createTextNode(ad_hl));
			
								var div2 = document.createElement('DIV');
								div2.id = 'ad_des'+i
								div2.style.color = des_c
								div2.style.fontWeight = 'normal'
								div2.style.textDecoration = 'none'
								div2.style.fontSize = des_s
								div2.style.fontFamily = fnt
								div2.style.margin = '0 auto'					
								div2.style.cursor = 'Pointer'					
								div2.appendChild(document.createTextNode(ad_des));
			
							td.appendChild(div);
							td.appendChild(div2);
			
						row.appendChild(td);															
					tbody.appendChild(row);
					}
				}
				document.getElementById('ad_code').appendChild(tbl);
			
		}
		
		
//Set tab to intially be selected when page loads:
//[which tab (1=first tab), ID of tab content to display (or "" if no corresponding tab content)]:
var initialtab=[1, "sc1"]

//Turn menu into single level image tabs (completely hides 2nd level)?
var turntosingle=0 //0 for no (default), 1 for yes

//Disable hyperlinks in 1st level tab images?
var disabletablinks=0 //0 for no (default), 1 for yes


////////Stop editting////////////////

var previoustab=""

if (turntosingle==1)
document.write('<style type="text/css">\n#tabcontentcontainer{display: none;}\n</style>')

function expandcontent(cid, aobject){
if (disabletablinks==1)
aobject.onclick=new Function("return false")
if (document.getElementById && turntosingle==0){
highlighttab(aobject)
if (previoustab!="")
document.getElementById(previoustab).style.display="none"
if (cid!=""){
document.getElementById(cid).style.display="block"
previoustab=cid
	for(i=1;i<=3;i++){
			var tmp='sc'+i;
			if(tmp==cid) document.getElementById('tab_'+tmp).style.display ='block';
				else document.getElementById('tab_'+tmp).style.display ='none';
		}
		
}
}
}

function highlighttab(aobject){
if (typeof tabobjlinks=="undefined")
collectddtabs()
for (i=0; i<tabobjlinks.length; i++)
tabobjlinks[i].className=""
aobject.className="current"
}

function collectddtabs(){
var tabobj=document.getElementById("ddtabs")
tabobjlinks=tabobj.getElementsByTagName("A")
}

function do_onload(){
collectddtabs();
expandcontent(initialtab[1], tabobjlinks[initialtab[0]-1]);
document.getElementById('tab_sc2').style.display ='none';
document.getElementById('tab_sc3').style.display ='none';
}

/*
if (window.addEventListener)
window.addEventListener("load", do_onload, false)
else if (window.attachEvent)
window.attachEvent("onload", do_onload)
else if (document.getElementById)
window.onload=do_onload
*/

	




function SelectAll(){
	var lst = document.getElementById('dest').options;
	for(i=0; i<lst.length; i++){
		lst[i].selected = 'selected';
	}
	return true;
}

function sortEntry(){
	arr = document.getElementById('src').options;
	for(i=0; i<arr.length-1; i++){
		for(j=i+1; j<arr.length; j++){
			if(arr[i].innerHTML > arr[j].innerHTML){
				t1 = new Option(arr[i].innerHTML, arr[i].value);
				t2 = new Option(arr[j].innerHTML, arr[j].value);
				arr[i] = t2
				arr[j] = t1;
			}
		}
	}
}
function addEntry(){
	arr = document.getElementById('src').options;

		dest = document.getElementById('dest');
		for(i=0; i<arr.length; i++){
			if(arr[i].selected){
				dest.options.add(new Option(arr[i].innerHTML, arr[i].value));
				remove_err('ds'); /// remove red error msg...
			}
		}
		for(i=arr.length-1; i>=0; i--){
			if(arr[i].selected){
				arr[i] = null;
			}
		}
}

function removeEntry(){
	src = document.getElementById('src');
	arr = document.getElementById('dest').options;
	for(i=arr.length-1; i>=0; i--){
		if(arr[i].selected){
			src.options.add(new Option(arr[i].innerHTML, arr[i].value));
			arr[i] = null;
		}
	}
	sortEntry();
}






var request, response;

function sendReqPost_un(url, res){
	var reqObject;
	if(window.XMLHttpRequest){
		reqObject = new XMLHttpRequest();
	}
	else if(window.ActiveXObject){
		reqObject = new ActiveXObject("Microsoft.XMLHTTP");
	}
	reqObject.onreadystatechange = function(){ processResponse_un(res);};
	request = reqObject;
	response = res;
	try{
		reqObject.open("POST",url,true);
	}
	catch(ex){
		alert('Error sending request via ajax-engine...');
	}
	reqObject.send(null);
	return false;
	//document.getElementById(response).innerHTML = "Checking existing user names...";
}

function processResponse_un (frmref){	
	if(request.readyState==4){
		if(request.responseText == 'U' || request.responseText == 'E' || request.responseText == 'UE'){
			if(request.responseText == 'U' || request.responseText == 'UE')
			document.getElementById('un').innerHTML = 'Sorry, username already exists!';
			
			if(request.responseText == 'E' || request.responseText == 'UE')
			document.getElementById('email_error').innerHTML = 'Sorry, email exists!';
			/*  DOM code from Bappi
			cell = frmref.username.parentNode;
			if(!cell.childNodes[cell.childNodes.length-1].id || cell.childNodes[cell.childNodes.length-1].id != 'errorid'){
				spn = document.createElement('span');
				spn.id = 'errorid';
				spn.className = 'error';
				spn.appendChild(document.createTextNode("Sorry, username already exists!"));
				cell.appendChild(spn);
			}
			*/
			document.getElementById('sub_button').disabled = false;
			return false;
			}
		else if(request.responseText == 'A'){
			frmref.submit();
			return true;
		}
	}
}


function isValidURL(url){
    var RegExp = /^(([\w]+:)\/\/)(([\d\w]|%[a-fA-f\d]{2,2})+(:([\d\w]|%[a-fA-f\d]{2,2})+)?@)?([\d\w][-\d\w]{0,253}[\d\w]\.)+[\w]{2,4}(:[\d]+)?(\/([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)*(\?(&?([-+_~.\d\w]|%[a-fA-f\d]{2,2})=?)*)?(#([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)?$/;
	var reg = /^(http(s)?:\/\/)?(www(.)?.)?[\w][\.\w]+$/
    if(RegExp.test(url)){
        return true;
    }else{
        return false;
    }
}

function isValidEmail(email){
    var RegExp = /^((([a-z]|[0-9]|!|#|$|%|&|'|\*|\+|\-|\/|=|\?|\^|_|`|\{|\||\}|~)+(\.([a-z]|[0-9]|!|#|$|%|&|'|\*|\+|\-|\/|=|\?|\^|_|`|\{|\||\}|~)+)*)@((((([a-z]|[0-9])([a-z]|[0-9]|\-){0,61}([a-z]|[0-9])\.))*([a-z]|[0-9])([a-z]|[0-9]|\-){0,61}([a-z]|[0-9])\.)[\w]{2,4}|(((([0-9]){1,3}\.){3}([0-9]){1,3}))|(\[((([0-9]){1,3}\.){3}([0-9]){1,3})\])))$/
	
    if(RegExp.test(email)){
        return true;
    }else{
        return false;
    }
} 


function check_reg_form(obj) {
    var err = false;
    document.getElementById('sub_button').disabled = true;

    if (obj.company.value != '' && obj.pinfo.value == '') {
        document.getElementById('pi').innerHTML = 'Please provide the payment info.';
        obj.pinfo.focus();
        err = true;
    }

    if (obj.company.value == '' && obj.pinfo.value != '') {
        document.getElementById('cn').innerHTML = 'Please provide your company name';
        obj.company.focus();
        err = true;
    }

    if (obj.company.value != '' && obj.pinfo.value != '') {
        myOption = -1;
        for (i = obj.pm_id.length - 1; i > -1; i--) {
            if (obj.pm_id[i].checked) {
                myOption = i;
                i = -1;
            }
        }
        if (myOption == -1) {
            document.getElementById('pm').innerHTML = 'Please select your payment method';
            err = true;
        }
    }

    //var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!isValidEmail(obj.email.value)) {
        document.getElementById('email_error').innerHTML = 'Invalid email address';
        obj.email.focus();
        err = true;
    }

    if (obj.fname.value == '') {
        document.getElementById('fn').innerHTML = 'Please type your name';
        obj.fname.focus();
        err = true;
    }


    if (obj.text_ad_pass2.value != obj.text_ad_pass.value) {
        document.getElementById('pass2').innerHTML = 'Your password does not match!';
        obj.text_ad_pass2.focus();
        err = true;
    }


    if (obj.text_ad_pass.value == '') {
        document.getElementById('pass').innerHTML = 'Please type your password';
        obj.text_ad_pass.focus();
        err = true;
    }

    if (obj.username.value == '') {
        document.getElementById('un').innerHTML = 'Please type your user name';
        obj.username.focus();
        err = true;
    }

    var tu = /^[a-z0-9\._]+$/i
    if (obj.username.value != '' && !(tu.test(obj.username.value))) {
        document.getElementById('un').innerHTML = 'Invalid user name';
        obj.username.focus();
        err = true;
    }


    if (err) {
        document.getElementById('sub_button').disabled = false;
        return false;
    } //else sendReqPost_un(loc + 'js/check_user.php?un=' + obj.username.value + '&em=' + obj.email.value, obj);
    return true;
}


function check_pub_form(obj){
	var err = false;
	
	document.getElementById('sub_button').disabled=true;
	
	if(!obj.dest.options.length) {
		document.getElementById('ds').innerHTML = 'Please add a Location';
		obj.src.focus();
		err = true;
		}

	if(obj.isrestricted[0].checked==true && obj.restriction.value=='') {
		document.getElementById('ar').innerHTML = '<br>Please express your restriction';
		obj.src.focus();
		err = true;
		}

	if(obj.adposition.value=='') {
		document.getElementById('ap').innerHTML = '<br>Please provide your ad position';
		obj.url.focus();
		err = true;
		}

	if(obj.tad[0].checked==true && obj.clickrate.value=='') {
		document.getElementById('cr').innerHTML = 'Invalid rate';
		obj.clickrate.focus();
		err = true;
		}

//isNaN(parseFloat(obj.clickrate.value))
	var t = /^(\d+)?(\.\d+)?$/
	if (obj.tad[0].checked==true && !(t.test(obj.clickrate.value))){		
		document.getElementById('cr').innerHTML = 'Invalid rate';
		obj.clickrate.focus();
		err = true;
		}
		
	if(obj.keywords.value=='') {
		document.getElementById('wk').innerHTML = 'Please provide your Tags';
		obj.keywords.focus();
		err = true;
		}

	if(obj.wdes.value=='') {
		document.getElementById('wd').innerHTML = 'Please provide Description';
		obj.wdes.focus();
		err = true;
		}
	
	if(!isValidURL(obj.url.value)) {
		document.getElementById('ur').innerHTML = '<br>Please type a valid FULL URL';
		obj.url.focus();
		err = true;
		}
	
	if(obj.wname.value=='') {
		document.getElementById('wn').innerHTML = '<br>Please provide website name';
		obj.wname.focus();
		err = true;
		}


		
	if(err) {
		document.getElementById('sub_button').disabled = false;
		return false;
		}
	else return true;
}



function remove_err(id)	{
		document.getElementById(id).innerHTML = "";		
}
//-->
