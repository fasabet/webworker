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
            window.onload = function () {

                ww = new Worker("javafile.js");


                ww.onmessage = function (mijn) {
                    var c= document.createElement("P");
                    var obj1 = JSON.parse(mijn.data);
                    c.innerHTML=obj1.x+obj1.y;
                    document.getElementById("mijndiv").appendChild(c);
                    
                    
                   
                }

            }
        </script>
    </head>
    <body>
        <canvas id="can" width="600" length="500" ></canvas>
        <div id="mijndiv">

        </div>

    </body>
</html>
