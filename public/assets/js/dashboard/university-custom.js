var primary = localStorage.getItem("primary") || 'rgba(74, 75, 243, 1)';
var secondary = localStorage.getItem("secondary") || 'rgba(56, 184, 242, 1)';

new Chartist.Line('.animate-curve', {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul','Aug'],
    series: [
        [2, 3, 2.5, 5, 1.5, 4.5, 3, 3.1],
        [3, 3.5, 6, 1.1, 5, 2.5, 3.2, 2]
    ]
}, {
    low: 0,
    showPoint: false,
    chartPadding: {
        left: -22,
        right: 0,
        bottom: 0,
        top: 12,
    },
    axisY: {
        scaleMinSpace: 40
    }
});

new Chartist.Line('.animate-curve2', {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul','Aug', 'Sep'],
    series: [
        [1.5, 3, 2, 1, 4, 1, 4, 2, 3, 2.5],
        [5, 4.7, 4, 3, 3.3, 3.7, 3, 3.8, 3, 2]
    ]
}, {
    low: 0,
    showPoint: false,
    chartPadding: {
        left: -22,
        right: 0,
        bottom: -12,
        top: 12,
    },
    axisY: {
        scaleMinSpace: 40
    }
});

new Chartist.Bar('.board-chart', {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
    series: [
        [1, 2, 1.5, 3, 1.5, 0.8, 1.5, 2],
        [6, 4, 5, 6.5, 3, 2, 5.5, 7]
    ]
}, {
    seriesBarDistance: 6,
    chartPadding: {
        left: -10,
        right: 0,
        bottom: -12,
        top: 12,
    },
    axisX: {
        showGrid: false,
        labelInterpolationFnc: function(value) {
            return value[0];
        }
    }
}, [
    ['screen and (min-width: 300px)', {
        seriesBarDistance: 15,
        axisX: {
            labelInterpolationFnc: function(value) {
                return value.slice(0, 3);
            }
        }
    }],
    ['screen and (min-width: 600px)', {
        seriesBarDistance: 12,
        axisX: {
            labelInterpolationFnc: Chartist.noop
        }
    }]
]);

new Chartist.Bar('.ct-small-left', {
    labels: ['Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6'],
    series: [
        [50, 200, 150, 400, 300, 600, 700]
    ]
}, {
    stackBars: true,
    axisY: {
        low: 0,
        showGrid: false,
        showLabel: false,
        offset: 0
    },
    axisX: {
        showGrid: false,
        showLabel: false,
        offset: 0
    }
}).on('draw', function(data) {
    if(data.type === 'bar') {
        data.element.attr({
            style: 'stroke-width: 2px'
        });
    }
});
new Chartist.Bar('.ct-small-right', {
    labels: ['Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6'],
    series: [
        [50, 200, 150, 400, 300, 600, 700]
    ]
}, {
    stackBars: true,
    axisY: {
        low: 0,
        showGrid: false,
        showLabel: false,
        offset: 0
    },
    axisX: {
        showGrid: false,
        showLabel: false,
        offset: 0
    }
}).on('draw', function(data) {
    if(data.type === 'bar') {
        data.element.attr({
            style: 'stroke-width: 2px'
        });
    }
});


var myLineChart = {
    labels: ["","1000", "2000", "3000", "4000", "5000", "6000"],
    datasets: [{
        fillColor: "rgba(68, 102, 242,0.1)",
        strokeColor: primary,
        pointColor: primary,
        data: [20, 25, 22, 25, 35, 30, 38, 35, 20],
    }],
}
var ctx = document.getElementById("myLineCharts").getContext("2d");

var LineChartDemo = new Chart(ctx).Line(myLineChart, {
    pointDotRadius: 2,
    pointDotStrokeWidth: 5,
    pointDotStrokeColor: "#ffffff",
    bezierCurve: false,
    scaleShowVerticalLines: false,
    scaleGridLineColor: "#eeeeee"
});
