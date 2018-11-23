let play = document.getElementById('play');
let pause = document.getElementById('pause');
let speed = document.getElementById('speed');


      function switchplay()
      {
          if (play.getAttribute('src') == "http://127.0.0.1/PHP/TraceOneAPI-master/public/img/play.svg")
          {
              play.src = "http://127.0.0.1/PHP/TraceOneAPI-master/public/img/playwhite.svg",
              speed.src = "http://127.0.0.1/PHP/TraceOneAPI-master/public/img/speed.svg",
              pause.src = "http://127.0.0.1/PHP/TraceOneAPI-master/public/img/pause.svg";
          }
          else
          {
              play.src = "http://127.0.0.1/PHP/TraceOneAPI-master/public/img/play.svg";
          }
      };

      function switchpause()
      {
          if (pause.getAttribute('src') == "http://127.0.0.1/PHP/TraceOneAPI-master/public/img/pause.svg")
          {
              pause.src = "http://127.0.0.1/PHP/TraceOneAPI-master/public/img/pausewhite.svg",
              play.src = "http://127.0.0.1/PHP/TraceOneAPI-master/public/img/play.svg",
              speed.src = "http://127.0.0.1/PHP/TraceOneAPI-master/public/img/speed.svg";
          }
          else
          {
              pause.src = "http://127.0.0.1/PHP/TraceOneAPI-master/public/img/pause.svg";
          }
      };

      function switchspeed()
      {
          if (speed.getAttribute('src') == "http://127.0.0.1/PHP/TraceOneAPI-master/public/img/speed.svg")
          {
              speed.src = "http://127.0.0.1/PHP/TraceOneAPI-master/public/img/speedwhite.svg",
              play.src = "http://127.0.0.1/PHP/TraceOneAPI-master/public/img/play.svg",
              pause.src = "http://127.0.0.1/PHP/TraceOneAPI-master/public/img/pause.svg";
          }
          else
          {
              speed.src = "http://127.0.0.1/PHP/TraceOneAPI-master/public/img/speed.svg";
          }
      };
