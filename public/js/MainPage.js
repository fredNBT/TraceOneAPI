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
,3000 )

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

let LC = new LineChart(57,'Chart1');
LC.CreateLineChart();
let LC2 = new LineChart(57,'Chart2');
LC2.CreateLineChart();
let LC3 = new LineChart(57,'Chart3');
LC3.CreateLineChart();
let LC4 = new LineChart(57,'Chart4');
LC4.CreateLineChart();
let LC5 = new LineChart(57,'Chart5');
LC5.CreateLineChart();
let LC6 = new LineChart(57,'Chart6');
LC6.CreateLineChart();




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
                console.log(this.responseText)
                UpdateLinceCharts(this.responseText);
                LC.UpdateChart();
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

   function UpdateLinceCharts(ResponceText){
    let responceobj = JSON.parse(ResponceText);

    $.each(responceobj, function (index, value) {
      if(index === 'House1'){
        LC.PowerVal = value;
      }  else if(index === 'House2') {
        LC2.PowerVal = value;
      }else if(index === 'House3') {
        LC3.PowerVal = value;
      }else if(index === 'House4') {
        LC4.PowerVal = value;
      }else if(index === 'House5') {
        LC5.PowerVal = value;
      }else if(index === 'House6') {
        LC6.PowerVal = value;
      }
    }
    )}
  