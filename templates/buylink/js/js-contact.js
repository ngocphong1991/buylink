$(document).ready(function(){
    $('#contactForm').validate();
    $('#contactForm').submit(function(){
        var rand1 = $('#veri_num1').text(); rand1 = parseInt(rand1);
        var rand2 = $('#veri_num2').text(); rand2 = parseInt(rand2);
        var res = $('#human_auth').val(); res = parseInt(res);
        if(res != rand1+rand2) {
            $('#human_auth').val('');
            return false;
        }
    });
    $('#btn-submit-contact').click(function(){
        $('#contactForm').submit();
        return false;
    });
});