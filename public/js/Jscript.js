/**
 * Created by Nesa on 4/26/2017.
 */
$().ready(function(){
 
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