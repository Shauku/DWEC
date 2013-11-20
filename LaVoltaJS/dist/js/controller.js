function newgame() {
    
    var red = new Array();
    var blue = new Array();
    
    var vr1 = parseInt($("#cicl1").val());
    var vr2 = parseInt($("#cicl21").val());
    var vr3 = parseInt($("#cicl31").val());
    
    if((vr1+vr2+vr3)<=1000){
        red[0] = $("#name1").val();
        red[1] = vr1;
        red[2] = vr2;
        red[3] = vr3;
    }
    
    var vb1 = parseInt($("#cicl2").val());
    var vb2 = parseInt($("#cicl22").val());
    var vb3 = parseInt($("#cicl32").val());
    blue[0] = $("#name2").val();
    blue[1] = $("#cicl2").val();
    blue[2] = $("#cicl22").val();
    blue[3] = $("#cicl32").val();
    
    initgame(red, blue);
    
    $("#game").css("display", "block");
    $("#datos").css("display", "none");
}

function nextturn() {
    
}
