var x = parseInt($("body").css("width"));
var y = parseInt($("body").css("height"));
    
console.log(x+" : "+y);
    
var stage = new Kinetic.Stage({
    container: 'container',
    width: x,
    height: 650
});
newCopo();
setInterval (newCopo, 1500);
startText ();

function startText () {
    var layerText = new Kinetic.Layer();
    var textpath = new Kinetic.TextPath({
        x: 100,
        y: 50,
        fill: '#333',
        fontSize: '24',
        fontFamily: 'Arial',
        text: 'Bon Nadal a tot el Centre d\'Estudis Politècnics',
        data: 'M10,10 C0,0 10,150 100,100 S300,150 400,50'
    });
    layerText.add(textpath);
    stage.add(layerText);
}

function newCopo (){
    var layer = new Kinetic.Layer();
    var randomX = Math.random()*x;
    var randomImg = Math.round(Math.random());
    var imageObj = new Image();
    imageObj.onload = function() {
        var copo = new Kinetic.Image({
            x: randomX,
            y: -53,
            image: imageObj,
            width: 50,
            height: 54,
            offset: [25, 27]
        });
        
        /* copo.on('mouseover', function() {
            document.body.style.cursor = 'pointer';
        });
        copo.on('mouseout', function() {
            document.body.style.cursor = 'default';
        });*/
        var amplitude = 100;
        
        if (randomImg == 0){
            amplitude = amplitude * -1;
        }
        
        var period = 3000;
        
        var angularSpeed = Math.PI / 2;
        var anim = new Kinetic.Animation(function(frame) {
            //Rotate
            var angleDiff = frame.timeDiff * angularSpeed / 1000;
            copo.rotate(angleDiff);
            
            //Oscilacion
            copo.setX(amplitude * Math.sin(frame.time * 2 * Math.PI / period)+randomX);
            
            //Caida
            copo.setY(copo.attrs.y + 4);
            
            if (copo.attrs.y >= 650)
            {
                anim.stop();
                layer.remove(this.copo);
            }
        }, layer);

        anim.start();
        
        layer.add(copo);
        stage.add(layer);        
    };
    
    if (randomImg == 0){
        imageObj.src = 'dist/img/copo1.png';
    } else {
        imageObj.src = 'dist/img/copo2.png';
    }
}