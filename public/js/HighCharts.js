
 class LineChart {

     test(){
        alert('test');
    }

    CreateLineChart(){
        var options = {
            chart:{

                events: {
                    load: function () {
        
                        // set up the updating of the chart each second
                        var series = this.series[0];
                        setInterval(function () {
                            var x = (new Date()).getTime(), // current time
                                y = Math.round(Math.random() * 100);
                            series.addPoint([x, y], true, true);
                        }, 1000);
                    }},

                renderTo: 'Chart1',
                type: 'spline',
                backgroundColor: '#132335'
                
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
                categories: [1,2,3,4,5],
                title: {
                    text: 'xAxis'
                }
            },
            series: [{
          data : [7,5,3,4,5]
        }]

        };
        var chart = new Highcharts.chart(options);

        

       /*  let curenttime = '00:08:00.0000000'
        $.getJSON('http://traceoneapi.azurewebsites.net/api/power/' + curenttime,function(data){

              var processed_json = new Array();
                $.map(data, function(obj, i) {
                processed_json.push([obj.Time, parseInt(obj.Total)]);
                 options.series[0].data = processed_json;
                 var chart = new Highcharts.chart(options);
        });


        }) */
    }

  }
  
 

