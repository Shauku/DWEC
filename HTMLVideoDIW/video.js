myVid=document.getElementById("video");
                      
           
myVid.addEventListener('loadedmetadata', function() {
    myVid.currentTime = 336;
    myVid.play();
}, false);
          
myVid.addEventListener('timeupdate', function() {
    if( (myVid.currentTime>=344)&&(myVid.currentTime<=345)){
        myVid.pause();
       // $("#video-container").hide();
      //  $("#res").show();
        
    }
});
//style="float: left;"