
 class LineChart {

     test(){
        alert('test');
    }

    CreateLineChart(){
        var options = {
            chart:{
                renderTo: 'container',
                type: 'spline',
            },
            legend: {
                enabled: true
            },
            title: {
                text: "hola",
                align: 'center'
            },
            yAxis:{
                title: {
                    text: 'yaxis'
                }
            },
            xAxis:{
                type: "category",
               // categories: [1,2,3,4,5],
                title: {
                    text: 'xAxis'
                }
            },
            series: [{
          
        }]

        };
        let curenttime = '00:08:00.0000000'
        $.getJSON('http://traceoneapi.azurewebsites.net/api/power/' + curenttime,function(data){

              var processed_json = new Array();
                $.map(data, function(obj, i) {
                processed_json.push([obj.Time, parseInt(obj.Total)]);
                 options.series[0].data = processed_json;
                 var chart = new Highcharts.chart(options);
        });


        })
    }

  }
  
 

