<html>
<body>
  <div class="timer" id="timer">LOL</div>
</body>
<style>
.timer{
  background-color: black;
  height: 100;
  width: 1000;
  color: white;
}
</style>
<script>
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
  
  }
,100 )

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

   
</script>
