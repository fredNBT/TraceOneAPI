
class LineChart {

    constructor(power, MountTo) {

        this.power = 20;
        this.MountTo = MountTo;
    }

    set PowerVal(Power) {
        this.power = Power;
    }

    get PowerVal() {
        return this.power;
    }



    test() {
        alert('test');
    }

    CreateLineChart() {
        var self = this;
        var options = {
            chart: {
                events: {
                    load: function () {
                        // this.UpdateChart
                        self.UpdateChart();
                        // set up the updating of the chart each second
                        var series = this.series[0];
                        setInterval(function () {
                            var x = (new Date()).getTime(), // current time
                                y = Math.round(Math.random() * 100);
                            // console.log("Im here " + this.UpdateChart() ) ;

                            series.addPoint([x, self.UpdateChart()], true, true);
                        }, 1000);
                    }
                },

                renderTo: self.MountTo,
                type: 'spline',
                backgroundColor: 'rgba(0, 4, 19, 0.75)',
                height: '70%',
                width: null,


            },
            legend: {
                enabled: true
            },
            title: {
                text: "",
                align: 'center'
            },
<<<<<<< HEAD
            yAxis: {
                title: {
                    text: 'yaxis'
                }
=======
            yAxis:{

>>>>>>> lennart
            },
            xAxis: {
                type: "category",
<<<<<<< HEAD
                categories: [1, 2, 3, 4, 5],
                title: {
                    text: 'xAxis'
                },
                labels:
                    {
                        enabled: false
                    }
=======
                categories: [1,2,3,4,5],
                labels: {
                    enabled: false
                }
>>>>>>> lennart
            },
            series: [{
                data: [7, 5, 3, 4, 5]
            }]
        };
        var chart = new Highcharts.chart(options);
    }

    UpdateChart() {

        return this.PowerVal;
    }

}



