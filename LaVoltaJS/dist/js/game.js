var db;
var game_data;
var max_vels_red;
var max_vels_blue;
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
        retrieveData();
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

function newgame() {
    
    var red = new Array();
    var blue = new Array();
    
    var vr1 = parseInt($("#cicl1").val());
    var vr2 = parseInt($("#cicl21").val());
    var vr3 = parseInt($("#cicl31").val());
    
    var vb1 = parseInt($("#cicl2").val());
    var vb2 = parseInt($("#cicl22").val());
    var vb3 = parseInt($("#cicl32").val());
    
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

function nextturn() {
    for (var i=0; i<6; i++)
    {
        if (i<=3){
            calcMove(max_vels_red[i], i+1);
        } else {
            calcMove(max_vels_blue[i-3], i+1);
        }
    }
    saveall();
}

function saveall(){
    
}

function retrieveData(){
    var transaction = db.transaction(["resu"], "readwrite");
    var store = transaction.objectStore("resu");
    var request = store.get("1");
    console.log(db);
    request.onerror = function(e){console.log("errorposis");};
    request.onsucces = function(e){
        console.log("posis");
        game_data = [{
            vr1: e.request.result.vr1,
            vr2: e.request.result.vr2,
            vr3: e.request.result.vr3,
            vb1: e.request.result.vb1,
            vb2: e.request.result.vb2,
            vb3: e.request.result.vb3
        }];
    };
    
    var transaction2 = db.transaction(["equips"], "readwrite");
    var store2 = transaction2.objectStore("equips");
    store2.openCursor().onsuccess = function(event) {
        var cursor = event.target.result;
        console.log("cursoropened!");
        if (cursor) {
            if(cursor.value.id=="1"){
                max_vels_red = {
                    v1: cursor.value.v1,
                    v2: cursor.value.v2,
                    v3: cursor.value.v3};
            }else if (cursor.value.id=="2") {
                max_vels_blue = {
                    v1: cursor.value.v1,
                    v2: cursor.value.v2,
                    v3: cursor.value.v3};
            } 
            cursor.continue();
        }
        else {
            console.log("noentries");
        }
    };
    
}

function calcMove(max, i){
    var total = $("#game").width();
    var res = Math.random(0, max);
    var percentatge = (res/100)*total;
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
    console.log(db);
    var transaction = db.transaction(["equips"], "readwrite");
    var store = transaction.objectStore("equips");
    var request = store.delete("1");
    request.onsucces = function(event){};
    var store2 = transaction.objectStore("equips");
    var request2 = store.delete("2");
    request2.onsucces = function(event){};
}


//insert
function insert(teamData){
    console.log(db);
    if (type){
        clearStore(db);
    }
    var transaction = db.transaction(["equips"], "readwrite");
    var objectStore = transaction.objectStore("equips");
    for (var i in teamData) {
        objectStore.put(teamData[i]);       
    }
}

function move(perc, i) {
    
    if (i<=3){
        var id="#red"+i;
        $(id).animate({
            "left": "+="+perc+"%"
        }, "fast");
    }
    else{
        var id="#blue"+i;
        $(id).animate({
            "left": "+="+perc+"%"
        }, "fast");
    }
}
