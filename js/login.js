$(function(){
    $('button').click(function(){
        var user = $('input[name=username]').val();
        if(user != ''){
            $(this).prop('disabled', true);
            $(this).append('  <i class="fas fa-spinner fa-spin"></i>');
            setTimeout(() => {
                window.location='home.php';
            }, 2000);
        }
        else{
            toastr.error("Invalid Username!!!!");
        }
    });

    $('input[name=username]').keypress(function (e){
        var key = e.which;
        if(key == 13){
            $('#next').click();
            return false;
        }
    });

})