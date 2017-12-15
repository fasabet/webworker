<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>web test</title>
        <style>
            canvas {
                border: 1px solid blue;
            }
        </style>
        <script src="javafile.js"></script>
        <script>
            window.onload=function(){
                
                ww=new Worker("javafile.js");
                    var ctx1=document.getElementById("can");
                    var ctx=ctx1.getContext("2d");
                    ctx.lineWidth = "10px";
                    
                    ww.onmessage=function(line) {
                      ctx.moveTo(0, line.data);
                      ctx.lineTo(600,line.data);
                      ctx.stroke();
                    
                };
            }
        </script>
    </head>
    <body>
        <canvas id="can" width="600" length="500" ></canvas>
        
        
    </body>
</html>
