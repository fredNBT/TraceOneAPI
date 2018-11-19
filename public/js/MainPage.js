let timer = document.getElementById('timer');
let day = 1;
 let hour = 10;
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
                   stats.innerHTML = StatsView.FormatedHtml(this.responseText);

       } 
               }
   //call send
   xhr.send();

   }