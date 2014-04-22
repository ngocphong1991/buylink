$(document).ready(function(){
    $('#btnsub_pay_atm').click(function(){
        var atm_name = $('#atm_name').val();
        var atm_email = $('#atm_email').val();
        var atm_phone = $('#atm_phone').val();
        var atm_money = $('#atm_money').val();
        var atm_bank = $('#atm_bank').val();
        if(atm_name=='' || atm_email=='' || atm_phone=='' || atm_money=='' || atm_bank=='') {
            alert('Vui lòng nhập đủ thông tin');
            return false;
        }
        if((toString(atm_money)!=toString(parseInt(atm_money)))) {
            alert('Số tiền chưa đúng định dạng');
            return false;
        }
        if(atm_money<10000) {
            alert('Số tiền phải lớn hơn 10.000');
            return false;
        }
        $('#load_pay_atm').show();
        $.ajax({
    		type: "POST",
    		url: "?act=pay_atm",
    		data:  {atm_name: atm_name, atm_email: atm_email, atm_phone: atm_phone, atm_money: atm_money, atm_bank: atm_bank},
    		dataType: "html",
    		success: function(msg){			
    			if(parseInt(msg)!=0)
    			{				
    				$('#load_pay_atm').fadeOut();
                    $('#pay_card_now').html(msg);
    			} else alert(msg);
    		}
    	});
    });
    
    $('#direct_name').val(username);
    $('#direct_email').val(useremail);
    $('#direct_phone').val(userphone);
    $('#btnsub_pay_direct').click(function(){
        var direct_name = $('#direct_name').val();
        var direct_email = $('#direct_email').val();
        var direct_phone = $('#direct_phone').val();
        var direct_address = $('#direct_address').val();
        var direct_district = $('#direct_district').val();
        var direct_city = $('#direct_city').val();
        var direct_time = $('#direct_time').val();
        
        
        
        var atm_email = $('#atm_email').val();
        var atm_phone = $('#atm_phone').val();
        
        if(direct_name=='' || direct_email=='' || direct_phone=='' || direct_address=='' || direct_district=='' || direct_city=='' || direct_time=='') {
            alert('Vui lòng nhập đủ thông tin');
            return false;
        }
        $('#load_pay_direct').show();
        $.ajax({
    		type: "POST",
    		url: "?act=pay_direct",
    		data:  {direct_name: direct_name,
                direct_email: direct_email,
                direct_phone: direct_phone,
                direct_address: direct_address,
                direct_district: direct_district,
                direct_city: direct_city,
                direct_time: direct_time
            },
    		dataType: "html",
    		success: function(msg){
    			if(parseInt(msg)!=0)
    			{
    				$('#load_pay_direct').fadeOut();
                    $('#truc-tiep').html(msg);
    			} else alert(msg);
    		}
    	});
    });
});