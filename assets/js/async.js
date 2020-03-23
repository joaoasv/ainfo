send = false;
$('#report').on('keydown', function(e) {

    const subject = $('#subject').val();
    const message = $('#message').val();  

   
    if(message.length >= 255) {
        $('#message').addClass('input input__error'); 
        $('form input[type="submit"]').prop("disabled", true);
    } else {
        $('#message').removeClass('input input__error');
    }

    if(subject.length >= 55) {
        $('#subject').addClass('input input__error'); 
        $('form input[type="submit"]').prop("disabled", true);
    } else {
        $('#subject').removeClass('input input__error');
    }

     if(!$('#message').hasClass( "input input__error" ) && !$('#subject').hasClass("input input__error")){
        $('form input[type="submit"]').prop("disabled", false);
    }
    send = true;
});



$("#sub-send").on('click', function(e) {

    const subject = $('#subject').val();
    const message = $('#message').val();  

    e.preventDefault();
    if(subject && message && send){
        sendReport();
    }else{
        console.log('Preencha todos os campos');
    }
    function sendReport(){
        $.ajax({
            url: "./inc/send-report.php",
            type: "POST",
            async: true,
            data: {
                subject: subject,
                message: message,
            },
            beforeSend: function() {
                $('#notification').css('display', 'grid');
                $("#notification").html("<div><img src='./assets/images/loading2.svg'><h2>Enviando sua denúncia...</h2></div>");
            },
            success: function(data) {
                setTimeout(function() {
                    $("#notification").html("<div><i class='lni lni-checkmark-circle'></i><h2>Sua mensagem foi enviada!</h2></div>");
                    setTimeout(function() {
                        $('#message').val('');
                        $('#subject').val('');
                        $("#notification").fadeOut();
                    }, 1600);
                }, 1500);

            },
            error: function(data) {
                $("#notification").html("Deu ruim");
            }
        });
    }
});



$('#p_cpf').mask('000.000.000-00', {reverse: true});


$("#petition-send").on('click', function(e) {

    const petition = $('input[type="radio"]:checked').val();
    const p_name = $('#p_name').val();  
    const p_cpf = $('#p_cpf').val(); 

   
    e.preventDefault();
    validateReport();
    function sendReport(){
        $.ajax({
            url: "./inc/send-petition.php",
            type: "POST",
            async: true,
            data: {
                petition: petition,
                p_name: p_name,
                p_cpf: p_cpf,
            },
            beforeSend: function() {
                $('#notification').css('display', 'grid');
                $("#notification").html("<div><img src='./assets/images/loading2.svg'><h2>Seu voto está sendo computado...</h2></div>");
            },
            success: function(data) {
                setTimeout(function() {
                    $("#notification").html("<div><i class='lni lni-checkmark-circle'></i><h2>Voto registrado!</h2></div>");
                    setTimeout(function() {
                        $('#p_name').val();  
                        $('#p_cpf').val(); 
                        $("#notification").fadeOut();
                        window.location.href = 'http://localhost/angrainforma/#petition';
                        location.reload(true);
                    }, 2200);
                }, 2000);

            },
            error: function(data) {
                $("#notification").html("Deu ruim");
            }
        });
    }

    function validateReport() {
        $.ajax({
            url: "./inc/validate-petition.php",
            type: "POST",
            async: true,
            data: {
                p_cpf: p_cpf
            },
            beforeSend: function() {
                $('#notification').css('display', 'grid');
                $("#notification").html("<div><img src='./assets/images/loading2.svg'><h2>Validando CPF...</h2></div>");
            },
            success: function(data) {
                var res = JSON.parse(data);
                if(res.check && res.cpf) {
                    return sendReport();
                }
                return getErrorMsg(res.check, res.cpf);
            },
            error: function() {
                $("#notification").html("Deu ruim");
            }
        });
    }

    function getErrorMsg(check, cpf) {

        if(!check) {
            $('#notification').css('display', 'grid');
            $("#notification").html("<div class='error'><i class='lni lni-close'></i><h2>CPF Inválido =(</h2></div>");
            setTimeout(function() {
                $("#notification").fadeOut();
                window.location.href = 'http://localhost/angrainforma/#petition';
                location.reload(true);
            }, 1500);
        } else if(!cpf) {
            $('#notification').css('display', 'grid');
            $("#notification").html("<div class='error'><i class='lni lni-close'></i><h2>CPF já cadastrado =(</h2></div>");
            setTimeout(function() {
                $("#notification").fadeOut();
                window.location.href = 'http://localhost/angrainforma/#petition';
                location.reload(true);
            }, 1500);
        }
    }
});

var push = () => {
    const push = $('#push');
    const close = $('#push__close');

    close.on('click', function() {
        push.slideToggle();
    });

};

push();


var icons = () => {
    $.get('./assets/js/icons.json', function(data) {
        console.log(data);
    });
};
