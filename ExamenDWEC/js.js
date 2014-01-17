var global = 0;
var lastAcc = 0;
var lastId = 1;
var intervalId;
var saved = new Array();

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
    var request = window.indexedDB.open("Examen", 2);
 
    request.onerror = function(event) {
        console.log("error: ");
    };
 
    request.onsuccess = function(event) {
        db = request.result;
        console.log("success: "+ db);
    };
    
    //Store creation + insert
    request.onupgradeneeded = function(event) {
        db = event.target.result;
        var objectStore = db.createObjectStore("log2");
    }
});

function escriuLog (comportament, params){
    clearInterval(intervalId);
    intervalId = setInterval(function(){
        var res = comportament(params);
        console.log(res);
    }, 1000);
}

function start(text) {
    clearInterval(intervalId);
    var opt = text.split('-');
    var params = new Array();
    params[0] = opt[1];
    if (opt[2]!=null){
        params[1] = opt[2];
    }
    
    global = params[0];
    
    switch (opt[0]){
                case "INC": escriuLog(inc, params); break;
                case "RND": escriuLog(rnd, params); break;
                case "ALT": escriuLog(alt, params); break;
            }
            
}

function inc(params){
    
    lastAcc=parseInt(lastAcc)+parseInt(global);
    guardaAArray(lastAcc);
    return lastAcc;
}

function rnd(params){
    var res=Math.floor(Math.random() * parseInt(params[1])) + parseInt(params[0]);
    guardaAArray(res);
    return res;
}

function alt(params){
    var data = new Date();
    data.setDate(data.getDate()+parseInt(params[0]));
    guardaAArray(data);
    return data;
}

function guardaAArray(val){
    saved=saved.concat(val);
    
    var transaction = db.transaction(["log2"], "readwrite");
    var objectStore = transaction.objectStore("log2");
    objectStore.put(val, parseInt(lastId));
    lastId = parseInt(lastId)+1;
}