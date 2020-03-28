

$(window).scroll(function () {
    var g = $(window).scrollTop();
    var wapp = $('.data').offset().top;
    if (g >= (wapp - 150)) {
        $('.wapp').fadeIn();
    } else {
        $('.wapp').fadeOut();
    }
})

// Enviando imagem pelo admin

$(document).on('change', '#file', function(){
    
    var property = document.getElementById('file').files[0];
    var img_name = property.name;
    var img_extension = img_name.split('.').pop().toLowerCase();

    if(jQuery.inArray(img_extension, ['gif', 'png', 'jpg', 'jpeg']) == -1){
        
        alert('Formato inválido.');

    }

    var image_size = property.size;

    if(image_size > 2000000){

        alert('Tamanho de imagem ultrapassa o permitido.');

    }else{

        var form_data = new FormData();
        var user = $('#user').val();
        form_data.append('file', property); // Atribuindo chave / valor
        form_data.append('user', user);
        sendImage(form_data);

    }

});


// Acrescentando mais produtos

var num = 0;
$('#moreProduct').on('click', function(){
    num++;
    $('#productList').append("<div id='products-" + num + "'><input type='text' placeholder='Produto'><input type='text' placeholder='Preço'></div>");
})

$('#removeProduct').on('click', function(){
    $('#products-' + num).remove();
    num--;
})


// Receber itens
$('#sendBusiness').on('click', function(e){
    e.preventDefault();
    var allProducts = '';
    var user = $('#user').val();
    var businessName = $('#business-name').val();
    var about = $('#about').val();
    var phoneNumber = $('#phone-number').val();
    var map = $('#lat').val() + '/*' + $('#long').val();
    for(var c = 0; c < $('#productList').children().length ; c++){
        allProducts += $('#products-'+ c + '> input').val() + ' /* ' + $('#products-'+ c + '> input:last-child').val() + ' /* ';
    }
    createBusinessPage(user, businessName, allProducts, about, phoneNumber, map);

})