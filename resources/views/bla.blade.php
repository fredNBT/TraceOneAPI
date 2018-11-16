
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <script type="application/javascript">
      function draw() {
        var canvas = document.getElementById('canvas');
        if (canvas.getContext) {
          var ctx = canvas.getContext('2d');

          ctx.beginPath();
          ctx.moveTo(70, 100);
          ctx.lineTo(100, 75);
          ctx.lineTo(130, 100);
          ctx.lineTo(130, 140);
          ctx.lineTo(70,  140 );
          ctx.fill(); 

          ctx.moveTo(60,103);
          ctx.lineTo(100, 70);
					ctx.lineTo(140, 103);
          ctx.lineTo(145, 98);
          ctx.lineTo(100, 60);
          ctx.lineTo(55, 98);
          ctx.fill();
          
          ctx.moveTo(70,80);
          ctx.lineTo(70,65);
          ctx.lineTo(80,65);
          ctx.lineTo(80,72);
          ctx.fill();
          
        }
      }

    </script>
  </head>

  <body onload="draw();">
    <canvas id="canvas" width="150" height="150"></canvas>
  </body>

</html>
