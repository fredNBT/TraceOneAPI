<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://code.highcharts.com/highcharts.src.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="{{ asset('js/HighCharts.js') }}"></script>
  <script src="{{ asset('js/StatsViewer.js') }}"></script>
</head>
<body>
    <div class="timer" id="timer">LOL</div>
  <div class="stats" id="stats">Raw stats</div> 
  <div id="container" style="height: 80vh; width: 80vw; background-color: lightblue"></div>
</body>

<script>
   // let LC = new LineChart();
   // LC.test();
   // LC.CreateLineChart();


    let timer = document.getElementById('timer');
    let day = 1;
     let hour = 19;
     let minute = 5;
   
   
    let x = setInterval(function() {
      
     let start = `2007-01-${timepad(day)} ${timepad(hour)}:${timepad(minute)}:00.000`;
     timer.innerHTML=start;
     updateminute();
     checkminute();
     checkhour();
   
     UpdateJSON(start);
     
     }
   ,1000 )
   
   function timepad(y) 
   {
        if(y<10)
       {
         y = `0${y}` ;
       } 
       return y;
   }
   function updateminute()
   {
     minute+=5;
     
   }
   function updatehour()
   {
     hour+=1;
     
   }
   function updateday()
   {
     day+=1;
     
   }
   function checkminute()
   {
     if(minute>55){
       minute=0;
       updatehour();
     }
   }
   function checkhour()
   {
     if (hour>23){
       hour=0;
       updateday();
     }
   }
   
   function UpdateJSON(start){
    //Create the XHR Object
    let xhr = new XMLHttpRequest;
       //Call the open function, GET-type of request, url, true-asynchronous
     xhr.open('GET', '../public/api/time/' + start , true)
       //call the onload 
        xhr.onload = function() 
           {
               //check if the status is 200(means everything is okay)
               if (this.status === 200) 
                   {
                       //return server response as an object with JSON.parse
                       let stats = document.getElementById('stats');
                      // stats.innerHTML = this.responseText;
                      let StatsView = new StatsViewer();
                       stats.innerHTML = StatsView.test();
   
           } 
                   }
       //call send
       xhr.send();
   
       }
   
   
   
      
   </script>











<style>
.timer{
  background-color: black;
  height: 100;
  width: 1000;
  color: white;
}

.stats{
  height: 100;
  width: 1000;
  color: black;
}
</style>

</html>

