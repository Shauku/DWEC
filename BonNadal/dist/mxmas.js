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
startNoel ();


function startTooltip (){
    var layerTool = new Kinetic.Layer();
    var tooltip = new Kinetic.Label({
        x: 750,
        y: 85,
        opacity: 0.75
      });

      tooltip.add(new Kinetic.Tag({
        fill: 'green',
        pointerDirection: 'down',
        pointerWidth: 10,
        pointerHeight: 10,
        lineJoin: 'round',
        shadowColor: 'black',
        shadowBlur: 10,
        shadowOffset: 10,
        shadowOpacity: 0.5
      }));
      
      tooltip.add(new Kinetic.Text({
        text: 'Bon Nadal a tot el CEP!!',
        fontFamily: 'Calibri',
        fontSize: 24,
        padding: 5,
        fill: 'black'
      }));
      
      layerTool.add(tooltip);
      stage.add(layerTool);
}

function startNoel () {
    var layerText = new Kinetic.Layer();
    var noel = new Image();
      noel.onload = function() {
        var santa = new Kinetic.Image({
          x: 600,
          y: 100,
          image: noel,
          width: 300,
          height: 300
        });
        
        santa.on('click', function() {
          startTooltip ();
        });
        layerText.add(santa);
        stage.add(layerText);
      };
      
      
      noel.src = 'dist/img/santa.png';
      
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