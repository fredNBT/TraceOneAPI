let play = document.getElementById('play');
let pause = document.getElementById('pause');
let speed = document.getElementById('speed');


  


      function switchplay()
      {
          if (play.getAttribute('src') == "http://www.ffp.local/img/play.svg")
          {
              play.src = "http://www.ffp.local/img/playwhite.svg",
              speed.src = "http://www.ffp.local/img/speed.svg",
              pause.src = "http://www.ffp.local/img/pause.svg";
          }
          else
          {
              play.src = "http://www.ffp.local/img/play.svg";
          }
      };

      function switchpause()
      {
          if (pause.getAttribute('src') == "http://www.ffp.local/img/pause.svg")
          {
              pause.src = "http://www.ffp.local/img/pausewhite.svg",
              play.src = "http://www.ffp.local/img/play.svg",
              speed.src = "http://www.ffp.local/img/speed.svg";
          }
          else
          {
              pause.src = "http://www.ffp.local/img/pause.svg";
          }
      };

      function switchspeed()
      {
          if (speed.getAttribute('src') == "http://www.ffp.local/img/speed.svg")
          {
              speed.src = "http://www.ffp.local/img/speedwhite.svg",
              play.src = "http://www.ffp.local/img/play.svg",
              pause.src = "http://www.ffp.local/img/pause.svg";
          }
          else
          {
              speed.src = "http://www.ffp.local/img/speed.svg";
          }
      };
