var data = new Date();
var mes = new Number();

mes = data.getMonth()+1;
            
function encriptar(){
    var almohadilla = new Boolean();
    almohadilla = false;
    var udate = new Date()
    var time = udate.getTime();
    var ultrakey = new Number();
    ultrakey = parseInt(time.toString().charAt(time.toString().length-5));
    $("#error").hide();
    var ultrakeyenc = new Number();
    ultrakeyenc = encrultra(ultrakey);
    var result = "";
    var arrayres = new Array();
    var text = $("#ienc").val();
    for (var i=0;i<text.length;i++){
        if (text.charAt(i)==="#"){
                almohadilla = true;
        }
        var c = text.toString().charAt(i);
        var ascii = c.charCodeAt(0);
        ascii = Math.pow(ascii, 2);
        ascii = ascii+ultrakey;
        result+=String.fromCharCode(ascii);
    }
    arrayres = arrayres.concat(result, ultrakeyenc.toString(), mes.toString());
    if (almohadilla){
            $("#error").show();
            $("#success").hide();
    } else{
        $("#error").hide();
        $("#success").show();
        $("#res").val(arrayres.join("#")+"");
    }
}
            
function desencriptar() {
    var result = "";
    var text = $("#denc").val();
    var array=text.toString().split("#");
    var key = array[2];
    var encriptat = array[0];
    var ultrakeyenc = new Number();
    ultrakeyenc = array[1];
    var ultrakeydesc = new Number();
    ultrakeydesc = desencultra(ultrakeyenc);
    var actu = new Boolean();
    actu=(key==mes);
    if (!actu){
        $("#error").show();
        $("#success").hide();
    } else {
        $("#error").hide();
        
        for (var x in encriptat){
            var ascii = encriptat[x].charCodeAt(0);
            ascii = ascii-ultrakeydesc;
            ascii = Math.sqrt(ascii);
            result+=String.fromCharCode(ascii);
        }
        $("#res").val(result+"");
    }
}

function encrultra(ultra){
    var ret = new Number();
    ret = ultra+mes;
    return ret;
}

function desencultra(ultra){
    var ret = new Number();
    ret = ultra-mes;
    return ret;
}

function clearall(){
    $("#res").val("");
    $("#denc").val("");
    $("#ienc").val("");
}
