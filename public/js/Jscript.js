
$( document ).ready(function() {
    $('#hide').fadeOut(5000);
});

function validateForm(){
    var name = $('#name').val();
    var lname = $('#lname').val();
    var addres = $('#addres').val();
    var city = $('#city').val();
    var phone = $('#phone').val();
    var mail = $('#mail').val();
    var password = $('#password').val();

        if(name == ""){
            $('#validate').append('Ime mora biti popunjeno');
            $('#name').css({'border-color':'red'});
            $('html, body').animate({
                scrollTop: $("#top").offset().top
            }, 2000);
            return false;
        }

}




function number() {
  //  var ansver = confirm("Odabrali ste brpj obuce " +number);
    var name = $("#number").val();

    if(name == ""){
        alert('morate odabrati broj artikla');
        return false;
    }else{

        return true;
    }
}

function contact(){
  $('#links').load('contact');
    $('html, body').animate({
        scrollTop: $("#links").offset().top
    }, 2000);
  return false;
}

function support(){
    $('#links').load('support');
    $('html, body').animate({
        scrollTop: $("#links").offset().top
    }, 2000);
    return false;
}

function delivery(){
    $('#links').load('delivery');
    $('html, body').animate({
        scrollTop: $("#links").offset().top
    }, 2000);
    return false;
}

function maps(){
    $('#links').load('maps');

    $('html, body').animate({
        scrollTop: $("#links").offset().top
    }, 2000);

    return false;
}
function searchArticles(){
    var code = $('#article_code').val();

    $.ajax({
        type:'GET',
        url:'searchArticlesAjax',
        data:{code:code},
        success:function(data){
            var code = $.parseJSON(data);
            $.each(code ,function(key, value)
            {
                $('#articlesShow').html('<p class="text-center">' + value.name + '</p><p class="text-center">' + value.description + '</p><hr>');
            })
        }
    });
}