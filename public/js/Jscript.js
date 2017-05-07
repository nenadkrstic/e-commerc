
$( document ).ready(function() {
    $('#hide').fadeOut(5000);
});




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