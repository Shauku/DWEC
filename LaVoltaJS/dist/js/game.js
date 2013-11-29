var db;
var game_data;
var max_vels_red;
var max_vels_blue;
var deferred = new $.Deferred();
var type;
$( document ).ready(function() {
    //prefixes of implementation that we want to test
    window.indexedDB = window.indexedDB || window.mozIndexedDB || window.webkitIndexedDB || window.msIndexedDB;
 
    //prefixes of window.IDB objects
    window.IDBTransaction = window.IDBTransaction || window.webkitIDBTransaction || window.msIDBTransaction;
    window.IDBKeyRange = window.IDBKeyRange || window.webkitIDBKeyRange || window.msIDBKeyRange
 
    if (!window.indexedDB) {
        window.alert("Your browser doesn't support a stable version of IndexedDB.")
    }
    
    db=null;
    var request = window.indexedDB.open("LaVolta2", 1);
 
    request.onerror = function(event) {
        console.log("error: ");
    };
 
    request.onsuccess = function(event) {
        db = request.result;
        console.log("success: "+ db);
        type=true;
        retrieveData(isStarted, true);
    };
    
    //Store creation + insert
    request.onupgradeneeded = function(event) {
        db = event.target.result;
        var objectStore = db.createObjectStore("equips", {
            keyPath: "id"
        });
        var objectStore_res = db.createObjectStore("resu", {
            keyPath: "id"
        });
        var data = [
        {
            id: "1",
            vr1: 0,
            vr2: 0,
            vr3: 0,
            vb1: 0,
            vb2: 0,
            vb3: 0
        }
        ];
    
        for (var i in data) {
            objectStore_res.put(data[i]);       
        }
        type=false;
    }
});

//Checks if theres a game started
function isStarted(){
    if ((game_data["vr1"]==0)&&(game_data["vr2"]==0)&&(game_data["vr3"]==0)&&(game_data["vb1"]==0)&&(game_data["vb2"]==0)&&(game_data["vb3"]==0))
    {
        //The game isnt started
        $("#game").css("display", "none");
        $("#datos").css("display", "block");
    } else
{
        //The game is started
        $("#game").css("display", "block");
        $("#datos").css("display", "none");
		
        for (var i = 0; i<6; i++)
        {
            if (i<3){
                var id="#red"+(i+1);
                $(id).animate({
                    "left": "+="+game_data["vr"+(i+1)]
                }, "fast");
            }
            else{
                var id="#blue"+(i+1);
                $(id).animate({
                    "left": "+="+game_data["vb"+(i-2)]
                }, "fast");
            }
        }
    }
}

//Puts the img to width 0
function putToCero() {
    for (var i = 0; i<6; i++)
    {
        if (i<3){
            var id="#red"+(i+1);
            $(id).css("left", "0px");
        }
        else{
            var id="#blue"+(i+1);
            $(id).css("left", "0px");
        }
    }
}

//Starts a game
function newgame() {
    
    var red = new Array();
    var blue = new Array();
    
    var vr1 = parseInt($("#cicl1").val());
    var vr2 = parseInt($("#cicl21").val());
    var vr3 = parseInt($("#cicl31").val());
    
    var vb1 = parseInt($("#cicl2").val());
    var vb2 = parseInt($("#cicl22").val());
    var vb3 = parseInt($("#cicl32").val());
    
    clearStoreResu(db);
    
    putToCero();
    
    if((vr1+vr2+vr3)<=1000){
        red[0] = $("#name1").val();
        red[1] = vr1;
        red[2] = vr2;
        red[3] = vr3;
    }
    
    if((vb1+vb2+vb3)<=1000)
    {
        blue[0] = $("#name2").val();
        blue[1] = vb1;
        blue[2] = vb2;
        blue[3] = vb3;
    }
    
    if((blue.length!=0)||(red.length!=0))
    {
        initgame(red, blue);
    
        $("#game").css("display", "block");
        $("#datos").css("display", "none");
    } else
{
        alert("Valors de velocitat incorrectes");
    }
}

//Starts a turn
function nextturn() {
    for (var i=0; i<6; i++)
    {
        if (i<=2){
            calcMove(max_vels_red["v"+(i+1)], i+1);
        } else {
            calcMove(max_vels_blue["v"+(i-2)], i+1);
        }
    }
    saveall();
    isOver();
}

//Save the game
function saveall(){
    var posis = [
    {
        id: "1",
        vr1: $("#red1").css("left"),
        vr2: $("#red2").css("left"),
        vr3: $("#red3").css("left"),
        vb1: $("#blue4").css("left"),
        vb2: $("#blue5").css("left"),
        vb3: $("#blue6").css("left")
    }
    ];
    clearStoreResu(db);
    var transaction = db.transaction(["resu"], "readwrite");
    var objectStore = transaction.objectStore("resu");
    for (var i in posis) {
        objectStore.put(posis[i]);       
    }
}

//clear the Store (RESU) for adding new items
function clearStoreResu(db){
    var transaction = db.transaction(["resu"], "readwrite");
    var store = transaction.objectStore("resu");
    var request = store.delete("1");
    request.onsucces = function(event){};
    var data = [
    {
        id: "1",
        vr1: 0,
        vr2: 0,
        vr3: 0,
        vb1: 0,
        vb2: 0,
        vb3: 0
    }
    ];
    
    for (var i in data) {
        store.put(data[i]);       
    }
}

//Retrieves All the data needed for the game
function retrieveData(callback, option){
	
    var transaction = db.transaction(["resu"], "readwrite");
    var store = transaction.objectStore("resu");
    store.openCursor().onsuccess = function(event) {
        var cursor = event.target.result;
        if (cursor) {
            if(cursor.value.id=="1"){
                game_data = {
                    vr1: cursor.value.vr1,
                    vr2: cursor.value.vr2,
                    vr3: cursor.value.vr3,
                    vb1: cursor.value.vb1,
                    vb2: cursor.value.vb2,
                    vb3: cursor.value.vb3
                };
                if (option){
                    callback();
                }
            }
            cursor.continue();
        }
        else {
            console.log("No more entries");
        }
    };
    
    var transaction2 = db.transaction(["equips"], "readwrite");
    var store2 = transaction2.objectStore("equips");
    store2.openCursor().onsuccess = function(event) {
        var cursor = event.target.result;
        if (cursor) {
            if(cursor.value.id=="1"){
                max_vels_red = {
                    v1: cursor.value.v1,
                    v2: cursor.value.v2,
                    v3: cursor.value.v3
                };
            }else if (cursor.value.id=="2") {
                max_vels_blue = {
                    v1: cursor.value.v1,
                    v2: cursor.value.v2,
                    v3: cursor.value.v3
                };
            } 
            cursor.continue();
        }
        else {
            console.log("No more entries");
        }
    };
    
}

//Calcs the next move
function calcMove(max, i){
    var total = $("#game").width();
    var res = Math.floor(Math.random() * parseInt(max));
    var percentatge = ((res*100)/total)/10;
    move(percentatge, i);
}

//Starts a new game
function initgame (r, b) {
    
    //Data to instert
    var teamData = [
    {
        id: "1", 
        name: r[0], 
        v1: r[1], 
        v2: r[2], 
        v3: r[3]
    },
    {
        id: "2", 
        name: b[0], 
        v1: b[1], 
        v2: b[2], 
        v3: b[3]
    }
    ];
    
    //DB Creation
    insert(teamData);
    
}

//clear the Store for adding new items
function clearStore(db){
    var transaction = db.transaction(["equips"], "readwrite");
    var store = transaction.objectStore("equips");
    var request = store.delete("1");
    request.onsucces = function(event){};
    var store2 = transaction.objectStore("equips");
    var request2 = store.delete("2");
    request2.onsucces = function(event){};
}


//insert the teams
function insert(teamData){
    if (type){
        clearStore(db);
    }
    var transaction = db.transaction(["equips"], "readwrite");
    var objectStore = transaction.objectStore("equips");
    for (var i in teamData) {
        objectStore.put(teamData[i]);       
    }
    retrieveData(null, false);
}

//Makes the img move
function move(perc, i) {
    var meta = parseInt($(".carrer").css("width"));
    if (i<=3){
        var id="#red"+i;
        if (!(parseInt($(id).css("left"))+(parseInt($(id).css("width")))>=meta)) {
            $(id).animate({
                "left": "+="+perc+"%"
            }, "fast");
        }
        if((parseInt($(id).css("left"))+(parseInt($(id).css("width")))>=meta)){
            $(id).css("left", (meta-(parseInt($(id).css("width"))))+"px");
        }
    }
    else{
        var id="#blue"+i;
        if (!(parseInt($(id).css("left"))+(parseInt($(id).css("width")))>=meta)){
            $(id).animate({
                "left": "+="+perc+"%"
            }, "fast");
        }
        if((parseInt($(id).css("left"))+(parseInt($(id).css("width")))>=meta)){
            $(id).css("left", (meta-(parseInt($(id).css("width"))))+"px");
        }
    }
    
}

//Checks if someone has win
function isOver() {
    var meta = parseInt($(".carrer").css("width"));
    var width = parseInt($("#red1").css("width"));
    if ((parseInt($("#red1").css("left"))+width>=meta)&&(parseInt($("#red2").css("left"))+width>=meta)&&(parseInt($("#red3").css("left"))+width>=meta))
    {
        alert("L'equip vermell ha guanyat");
        hardreset();
    } else if ((parseInt($("#blue4").css("left"))+width>=meta)&&(parseInt($("#blue5").css("left"))+width>=meta)&&(parseInt($("#blue6").css("left"))+width>=meta)) {
        alert("L'equip blau ha guanyat");
        hardreset();
    }
	
}

//ResetALLTheThings!!!!!!!!!111oneone!
function hardreset(){
    $("#game").css("display", "none");
    $("#datos").css("display", "block");
    clearStore(db);
    clearStoreResu(db);
}
