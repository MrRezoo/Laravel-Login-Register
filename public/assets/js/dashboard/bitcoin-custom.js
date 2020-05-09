var lineArea = new Chartist.Line('.bitcoinchart-1', {
    labels: ['01', '02', '03', '04', '05', '06'],
    series: [
        [8, 3, 7.5, 4, 7, 4]
    ]
}, {
    lineSmooth: Chartist.Interpolation.simple({
        divisor: 3
    }),
    fullWidth: !0,
    showArea: !0,
    chartPadding: {
        right: 0,
        left: 0,
        top:0,
        bottom: 0
    },
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
});

var lineArea1 = new Chartist.Line('.bitcoinchart-2', {
    labels: ['01', '02', '03', '04', '05', '06'],
    series: [
        [8, 3, 7.5, 4, 7, 4]
    ]
}, {
    lineSmooth: Chartist.Interpolation.simple({
        divisor: 3
    }),
    fullWidth: !0,
    showArea: !0,
    chartPadding: {
        right: 0,
        left: 0,
        top:0,
        bottom: 0
    },
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
});
var lineArea3 = new Chartist.Line('.bitcoinchart-3', {
    labels: ['01', '02', '03', '04', '05', '06'],
    series: [
        [8, 3, 7.5, 4, 7, 4]
    ]
}, {
    lineSmooth: Chartist.Interpolation.simple({
        divisor: 3
    }),
    fullWidth: !0,
    showArea: !0,
    chartPadding: {
        right: 0,
        left: 0,
        top:0,
        bottom: 0
    },
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
});
var linecharts = {
    labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
    datasets: [{
        fillColor: "transparent",
        strokeColor: endlessAdminConfig.primary,
        pointColor: endlessAdminConfig.primary,
        data: [1, 2.5, 1.5, 3, 1.3, 2, 4, 4.5]
    },{
        fillColor: "transparent",
        strokeColor: endlessAdminConfig.secondary,
        pointColor: endlessAdminConfig.secondary,
        data: [ 0, 1, 0.5, 1, 0.3, 1.6, 1.4, 2]
    }]
}
var ctx = document.getElementById("linecharts-bitcoin").getContext("2d");
var LineChartDemo = new Chart(ctx).Line(linecharts, {
    pointDotRadius: 2,
    pointDotStrokeWidth: 5,
    pointDotStrokeColor: "#ffffff",
    bezierCurve: false,
    scaleShowVerticalLines: false,
    scaleGridLineColor: "#eeeeee"
});

var morris_chart = {
    init: function() {
        $(function() {
            Morris.Donut({
                element: 'bitcoin-morris',
                data: [{
                    value: 40,
                    label: "سرمایه گذاری"
                },
                    {
                        value: 8,
                        label: "سرمایه گذاری"
                    },
                    {
                        value: 10,
                        label: "سرمایه گذاری"
                    }],
                backgroundColor: endlessAdminConfig.primary,
                labelColor: "#999999",
                colors: [endlessAdminConfig.primary ,"#f6f6f6" ,endlessAdminConfig.secondary],
                formatter: function(a) {
                    return a + "%"
                }
            });
        });
    }
};
(function($) {
    "use strict";
    morris_chart.init()
})(jQuery);


new Chartist.Bar('.market-chart', {
    labels: ['100', '200', '300', '400', '500', '600', '700', '800'],
    series: [
        [2.5, 3, 3, 0.9, 1.3, 1.8, 3.8, 1.5],
        [3.8, 1.8, 4.3, 2.3, 3.6, 2.8, 2.8, 2.8]
    ]
}, {
    seriesBarDistance: 2,
    chartPadding: {
        left: -10,
        right: 0,
        bottom: -15,
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
