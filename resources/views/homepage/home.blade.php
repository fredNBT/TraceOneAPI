<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    



    <script src="{{ asset('js/sigma.js-1.2.1/src/sigma.core.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/conrad.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/utils/sigma.utils.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/utils/sigma.polyfills.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/sigma.settings.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/classes/sigma.classes.dispatcher.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/classes/sigma.classes.configurable.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/classes/sigma.classes.graph.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/classes/sigma.classes.camera.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/classes/sigma.classes.quad.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/classes/sigma.classes.edgequad.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/captors/sigma.captors.mouse.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/captors/sigma.captors.touch.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/sigma.renderers.canvas.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/sigma.renderers.webgl.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/sigma.renderers.svg.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/sigma.renderers.def.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/webgl/sigma.webgl.nodes.def.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/webgl/sigma.webgl.nodes.fast.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/webgl/sigma.webgl.edges.def.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/webgl/sigma.webgl.edges.fast.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/webgl/sigma.webgl.edges.arrow.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/canvas/sigma.canvas.labels.def.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/canvas/sigma.canvas.hovers.def.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/canvas/sigma.canvas.nodes.def.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/canvas/sigma.canvas.edges.def.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/canvas/sigma.canvas.edges.curve.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/canvas/sigma.canvas.edges.arrow.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/canvas/sigma.canvas.edges.curvedArrow.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/canvas/sigma.canvas.edgehovers.def.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/canvas/sigma.canvas.edgehovers.curve.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/canvas/sigma.canvas.edgehovers.arrow.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/canvas/sigma.canvas.edgehovers.curvedArrow.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/canvas/sigma.canvas.extremities.def.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/svg/sigma.svg.utils.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/svg/sigma.svg.nodes.def.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/svg/sigma.svg.edges.def.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/svg/sigma.svg.edges.curve.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/svg/sigma.svg.labels.def.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/renderers/svg/sigma.svg.hovers.def.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/middlewares/sigma.middlewares.rescale.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/middlewares/sigma.middlewares.copy.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/misc/sigma.misc.animation.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/misc/sigma.misc.bindEvents.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/misc/sigma.misc.bindDOMEvents.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/src/misc/sigma.misc.drawHovers.js') }}"></script>
    <!-- END SIGMA IMPORTS -->

    <script src="{{ asset('js/sigma.js-1.2.1/plugins/sigma.renderers.parallelEdges/utils.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/plugins/sigma.renderers.parallelEdges/sigma.canvas.edges.curve.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/plugins/sigma.renderers.parallelEdges/sigma.canvas.edges.curvedArrow.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/plugins/sigma.renderers.parallelEdges/sigma.canvas.edgehovers.curve.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/plugins/sigma.renderers.parallelEdges/sigma.canvas.edgehovers.curvedArrow.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/plugins/sigma.renderers.edgeLabels/settings.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/plugins/sigma.renderers.edgeLabels/sigma.canvas.edges.labels.def.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/plugins/sigma.renderers.edgeLabels/sigma.canvas.edges.labels.curve.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/plugins/sigma.renderers.edgeLabels/sigma.canvas.edges.labels.curvedArrow.js') }}"></script>


    <script src="{{ asset('js/sigma.js-1.2.1/plugins/sigma.parsers.json/sigma.parsers.json.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/plugins/sigma.renderers.customShapes/shape-library.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/plugins/sigma.renderers.customShapes/sigma.renderers.customShapes.js') }}"></script>


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  
  <body>

    <div id="container"></div>
    





 
 
 
    <script  >


      sigma.parsers.json('js/data.json', {
        renderer: {              
          container: document.getElementById("container"),
          type: 'canvas'
      },
      settings: {
        defaultNodeColor: '#ec5148'
      }
      });     
      </script>
 </body>
</html>