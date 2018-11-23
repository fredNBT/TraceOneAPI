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
    
    <script src="{{ asset('js/sigma.js-1.2.1/plugins/sigma.renderers.customEdgeShapes/sigma.canvas.edgehovers.dashed.js') }}"></script>
    <script src="{{ asset('js/sigma.js-1.2.1/plugins/sigma.renderers.customEdgeShapes/sigma.canvas.edges.dotted.js') }}"></script>
    
    <script src="{{ asset('js/circles.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <script src="{{ asset('js/StatsViewer.js') }}"></script>
    

    
    
    

    <link href='https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,400italic,300italic,300|Raleway:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  </head>
  <body >

      

      <div class="content">
          <div class="container wow fadeInUp delay-03s">
            <div class="row">
              <div class="logo text-center">
                <h2>We Are Baking Something New!!<br> Coming Soon<br>Closed Grid Power System</h2>
              </div>
      
              <div id="countdown" data-wow-delay=".3s" data-date="Dec 26, 2016 06:00:00"></div>
              <h2 class="subs-title text-center">Subscribe now to get Recent updates!!!</h2>
              <div class="subcription-info text-center">
                <form class="subscribe_form" action="#" method="post">
                  <input required="" value="" placeholder="Enter your email..." class="email" id="email" name="email" type="email">
                  <input class="subscribe" name="email" value="Subscribe!" type="submit">
                </form>
                <p class="sub-p">We Promise to never spam you.</p>
              </div>
            </div>
          </div>
          <section>
            <div class="container">
              <div class="row bort text-center">
                <div class="social">
                  <ul>
                    <li>
                      <a href=""><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section id="about" class="section-padding">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                  <div class="about-title">
                    <h2>About Us</h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </br>voluptatum deleniti atque corrupti quos dolores e</p>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-02s">
                    <div class="img">
                      <i class="fa fa-refresh"></i>
                    </div>
                    <h3 class="abt-hd">Our process</h3>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                    <div class="img">
                      <i class="fa fa-eye"></i>
                    </div>
                    <h3 class="abt-hd">Our Vision</h3>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-06s">
                    <div class="img">
                      <i class="fa fa-cogs"></i>
                    </div>
                    <h3 class="abt-hd">Our Approach</h3>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-08s">
                    <div class="img">
                      <i class="fa fa-dot-circle-o"></i>
                    </div>
                    <h3 class="abt-hd">Our Objective</h3>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div id="contact-info">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="contact-title">
                    <i class="fa fa-envelope"></i>
                    <h2>Get in touch</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
                <div class="contact col-md-6 wow fadeIn delay-08s">
                  <div class="col-md-10 col-md-offset-1">
                    <div id="note"></div>
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                      </div>
      
                      <div class="text-center"><button type="submit" class="contact-submit">Send Message</button></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer">
          <div class="container">
            <div class="row bort">
              </div>
            </div>
          </footer>











          <div class="logo text-center" style="color:white">
              <h2>Take a quick look at our current project<br> down below</h2>
            </div>

            <div class="devider"></div>








    
    <div class="TitleBar">

      <img class="cgpslogo" src="{{ asset('/img/cgpsLogo.svg') }}" alt="">

      <div id="weather" style="width:22%; height:100%; "></div>
     
      
      
        
    </div>
   
    <div class="PageCenter">

    <div class="linecontainer">
      <div class="linegraphborder1">
        <div id="Chart1" class="LineChart" >chart 1</div>
      </div>
      <div class="linegraphborder2">
        <div id="Chart2" class="LineChart" >chart 2</div>
      </div>
      <div class="linegraphborder3">
        <div id="Chart3" class="LineChart" >chart 3</div>
      </div>
    </div>


    <div class="centercontainer">
    <div class="PowerStats">
      <p class="PowerStatsHeader">Power Usage Totals</p>
      <div class="stats" id="stats"></div>
    <div class="canvas">

        <div class="textcontainer">
            <div class="text">house 1</div>
        <div class="circle" id="circles-1"></div></div>
        <div class="textcontainer">
            <div class="text">house 2</div>
        <div class="circle" id="circles-2"></div></div>
        <div class="textcontainer">
            <div class="text">house 3</div>
        <div class="circle" id="circles-3"></div></div>
        <div class="textcontainer">
            <div class="text">house 4</div>
        <div class="circle" id="circles-4"></div></div>
        <div class="textcontainer">
            <div class="text">house 5</div>
        <div class="circle" id="circles-5"></div></div>
        <div class="textcontainer">
            <div class="text">house 6</div>
        <div class="circle" id="circles-6"></div></div>

    </div> 

    </div>
    <div class="canvasborder">
      {{-- canvas --}}<div id="container" style="background-color:aliceblue"></div>
    </div>
    </div>

    <div class="linecontainer">
      <div class="linegraphborder1">
        <div id="Chart4" class="LineChart" >chart 4</div>
      </div>
      <div class="linegraphborder2">
        <div id="Chart5" class="LineChart" >chart 5</div>
      </div>
      <div class="linegraphborder3">
        <div id="Chart6" class="LineChart" >chart 6</div>
      </div>
    </div>
    
    
    
        <div class="clock">
            <div class="timer" id="timer"></div>
            <img id="pause" class="pause" src="{{ asset('/img/pause.svg') }}" alt=""onclick="Pause();switchpause()">
            <img id="play"  class="play" src="{{ asset('/img/play.svg') }}" alt=""onclick="Turtle();switchplay()">
            <img id="speed" class="speed" src="{{ asset('/img/speed.svg') }}" alt=""onclick="Cheeter();switchspeed()">
            <div id="SolarStats" class="SolarStats"></div>
          </div>
    
    
  </div>

<div id="pricearray" ></div>



</body>
  {{-- js entry Point --}}

  <script src="{{ asset('js/buttonhandler.js') }}"></script>

  <script src="{{ asset('js/createCircles.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  <script src="https://code.highcharts.com/highcharts.src.js"></script>
  <script src="{{ asset('js/HighCharts.js') }}"></script>

<script src="{{ asset('js/MainPage.js') }}"></script>
{{-- js entry Point --}}
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('contactform/contactform.js') }}"></script>
</html>