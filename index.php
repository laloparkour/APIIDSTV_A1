<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        canvas{
            background-color: rgba(0, 0, 200, 0.5);
        }
    </style>
</head>
<body>
    <canvas id="mycanvas" width="1000" height="1000">
        Tu navegador no soporta canvas
    </canvas>

    <script text="text/javascript">
        var cv = document.getElementById("mycanvas");

        var ctx = cv.getContext('2d');


/*         ctx.strokeStyle="white";
        ctx.strokeRect(10, 10, 50, 50);

        ctx.strokeStyle="red";
        ctx.strokeRect(20, 150, 50, 50); */

/*         ctx.fillStyle = "rgb(200, 0, 0)";
        ctx.fillRect(10,10,55,50);

        ctx.fillStyle = "rgba(0, 0, 200, 0.5)";
        ctx.fillRect(50,50,55,50);

        ctx.fillStyle = "pink";
        ctx.fillRect(90,90,55,50);
         */
        // Lineas
        // Donde empieza
        ctx.moveTo(100, 100);

        // Donde termina si son dos
        ctx.lineTo(450, 350);
        ctx.stroke();
        
        // Rayar
        ctx.strokeStyle="Black";
        ctx.moveTo(350,400)
        ctx.lineTo(150,150);
        ctx.lineTo(150,350);
        ctx.lineTo(350,400);
        ctx.stroke();

        // Circulos
/*         ctx.beginPath();
        ctx.arc(300, 250, 100, 0, 2*Math.PI);
        ctx.stroke(); */
        /*         ctx.fill(); //Rellena */
        
/*         ctx.beginPath();
        ctx.arc(550, 250, 100, 0, 2*Math.PI);
        ctx.fillStyle = "red";
        ctx.fill(); */
        //Texto normal
/*         ctx.font = "50px Arial";
        ctx.fillStyle = "red";
        ctx.fillText("Isaac", 150, 60);
        
        // Stroke text
        ctx.strokeStyle = "red";
        ctx.strokeText("Isaac", 150, 130);
 */


    </script>
</body>
</html>