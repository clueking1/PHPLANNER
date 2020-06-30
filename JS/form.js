$('.signBut').click(function(e) {
    let $hey = $('.emailSig').val()
    console.log($hey)
    
    $.ajax({
        url: "createUserInclude.php",
        type: "post",
        dataType: 'json',
        data: {
            email : $('.emailSig').val(),
            username : $('.unSig').val(),
            password : $('.pwSig').val()
        }
    })
})