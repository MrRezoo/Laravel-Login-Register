(function($) {
    "use strict";
    /*Line chart*/
    setTimeout(function () {
        $("#chart-widget-top-first").sparkline([25, 50, 30, 40, 60, 80, 50, 10, 50, 13, 0, 10, 30, 40, 10, 15, 20], {
            type: 'line',
            width: '100%',
            height: '100px',
            tooltipClassname: 'chart-sparkline',
            lineColor: '#4466f2',
            fillColor: 'rgba(68, 102, 242, 0.5)',
            spotColor: '#4466f2',
            highlightLineColor: "#4466f2",
            highlightSpotColor: "#4466f2",
            sliceColors: ["#4466f2", "#4466f2", "#4466f2"],
            targetColor: "#4466f2",
            performanceColor: "#4466f2",
            boxFillColor: "#4466f2",
            medianColor: "#4466f2",
            minSpotColor: "#4466f2",
        });
        $("#chart-widget-top-second").sparkline([25, 35, 70, 100, 90, 50, 60, 80, 40, 50, 60, 40, 80, 70, 60, 50, 100], {
            type: 'line',
            width: '100%',
            height: '100px',
            tooltipClassname: 'chart-sparkline',
            lineColor: '#4466f2',
            fillColor: 'rgba(68, 102, 242, 0.5)',
            spotColor: '#4466f2',
            highlightLineColor: "#4466f2",
            highlightSpotColor: "#4466f2",
            targetColor: "#4466f2",
            performanceColor: "#4466f2",
            boxFillColor: "#4466f2",
            medianColor: "#4466f2",
            minSpotColor: "#4466f2",
        });
        $("#chart-widget-top-third").sparkline([50, 100, 80, 60, 50, 60, 40, 80, 40, 50, 60, 40, 60, 70, 40, 50, 20], {
            type: 'line',
            width: '100%',
            height: '100px',
            tooltipClassname: 'chart-sparkline',
            lineColor: '#4466f2',
            fillColor: 'rgba(68, 102, 242, 0.5)',
            spotColor: '#4466f2',
            highlightLineColor: "#4466f2",
            highlightSpotColor: "#4466f2",
            targetColor: "#4466f2",
            performanceColor: "#4466f2",
            boxFillColor: "#4466f2",
            medianColor: "#4466f2",
            minSpotColor: "#4466f2",
        });
    });

    /*Bar-chart*/
    $("#chart-bar-widget-first").sparkline([100.00,100.00,90.00,80.00,95.00,75,100.00,90.00,110.00,80.00,90.00,105,95,85], {
        type: 'bar',
        barWidth: '20px',
        barSpacing: '10px',
        space:'10px',
        height: '200px',
        tooltipClassname: 'chart-sparkline',
        barColor: '#4058ef'
    });
    $("#chart-bar-widget-second").sparkline([90.00,110.00,80.00,90.00,105,95,85,100.00,100.00,90.00,80.00,95.00,75,100.00], {
        type: 'bar',
        barWidth: '20px',
        barSpacing: '10px',
        space:'10px',
        height: '200px',
        tooltipClassname: 'chart-sparkline',
        barColor: '#4058ef'
    });

    //Monthly Sale graph
    $(function() {
        var data = [],
            totalPoints = 300;

        function getRandomData() {
            if (data.length > 0)
                data = data.slice(1);

            while (data.length < totalPoints) {
                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;

                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }
                data.push(y);
            }

            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }
            return res;
        }

        // Set up the control widget
        var updateInterval = 30;
        $("#updateInterval").val(updateInterval).change(function () {
            var v = $(this).val();
            if (v && !isNaN(+v)) {
                updateInterval = +v;
                if (updateInterval < 1) {
                    updateInterval = 1;
                } else if (updateInterval > 2000) {
                    updateInterval = 2000;
                }
                $(this).val("" + updateInterval);
            }
        });
    });

    //Live product graph
    var chart = new Chartist.Line('.live-products', {
        labels: ['1', '2', '3', '4', '5', '6'],
        series: [
            [1, 5, 2, 5, 4, 3, 6],
        ]
    }, {
        low: 0,
        showArea: true,
        showPoint: false,
        fullWidth: true
    });
    chart.on('draw', function(data) {
        if(data.type === 'line' || data.type === 'area') {
            data.element.animate({
                d: {
                    begin: 2000 * data.index,
                    dur: 2000,
                    from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                    to: data.path.clone().stringify(),
                    easing: Chartist.Svg.Easing.easeOutQuint
                }
            });
        }
    });

    //turnover graph
    new Chartist.Bar('.turnover', {
        labels: ['1', '2', '3', '4', '5', '6'],
        series: [
            [1.9, 4.4, 1.5, 5, 4.4, 3.4],
            [6.4, 5.7, 7, 4, 5.5, 3.5],
            [5, 2.3, 3.6, 6, 3.6, 2.3]

        ]
    })
    new Chartist.Bar('.monthly', {
        labels: ['M1', 'M2', 'M3', 'M4', 'M5', 'M6', 'M7', 'M8', 'M9', 'M10'],
        series: [
            [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000],
            [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000],
            [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000]
        ]
    }, {
        stackBars: true,
        axisY: {
            labelInterpolationFnc: function(value) {
                return (value / 1000) + 'k';
            }
        }
    }).on('draw', function(data) {
        if(data.type === 'bar') {
            data.element.attr({
                style: 'stroke-width: 15px'
            });
        }
    });
    //uses graph
    var chart = new Chartist.Line('.uses', {
        labels: ['1', '2', '3', '4', '5', '6'],
        series: [
            [1, 5, 2, 5, 4, 3],
            [2, 3, 4, 8, 1, 2],
            [5, 4, 3, 2, 1, 0.5]
        ]
    }, {
        low: 0,
        showArea: true,
        showPoint: false,
        fullWidth: true
    });
    chart.on('draw', function(data) {
        if(data.type === 'line' || data.type === 'area') {
            data.element.animate({
                d: {
                    begin: 2000 * data.index,
                    dur: 2000,
                    from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                    to: data.path.clone().stringify(),
                    easing: Chartist.Svg.Easing.easeOutQuint
                }
            });
        }
    });

    //browser-uses-chart
    $(function() {
        Morris.Donut({
            element: 'browser-uses-chart',
            data: [{
                value: 90,
                label: "گوگل کروم"
            },
                {
                    value: 70,
                    label: "موزیلا فایرفاکس"
                },
                {
                    value: 80,
                    label: "سافاری"
                },
                {
                    value: 60,
                    label: "مرورگر اوپرا"
                }],
            backgroundColor: "rgba(68, 102, 242, 0.5)",
            labelColor: "#999999",
            colors: ["rgba(68, 102, 242, 0.4)", "rgba(30, 166, 236, 0.4)" ,"rgba(68, 102, 242, 0.4)" ,"rgba(30, 166, 236, 0.4)" ,"rgba(68, 102, 242, 0.4)", "rgba(30, 166, 236, 0.4)" ,"rgba(68, 102, 242, 0.4)"],
            formatter: function(a) {
                return a + "%"
            }
        });
    });

    //website-visiter-chart
    $(function() {
        Morris.Donut({
            element: 'website-visiter-chart',
            data: [{
                value: 35,
                label: "کشورهای شمالی"
            },
                {
                    value: 56,
                    label: "کشورهای جنوب"
                },
                {
                    value: 80,
                    label: "کشورهای شرق"
                },
                {
                    value: 86,
                    label: "کشورهای غربی"
                }],
            backgroundColor: "rgba(68, 102, 242, 0.5)",
            labelColor: "#999999",
            colors: ["rgba(68, 102, 242, 0.4)", "rgba(30, 166, 236, 0.4)" ,"rgba(68, 102, 242, 0.4)" ,"rgba(30, 166, 236, 0.4)" ,"rgba(68, 102, 242, 0.4)", "rgba(30, 166, 236, 0.4)" ,"rgba(68, 102, 242, 0.4)"],
            formatter: function(a) {
                return a + "%"
            }
        });
    });

    //finance graph
    $("#finance-graph").sparkline([5, 30, 27, 35, 30, 50, 70], {
        type: 'line',
        width: '100%',
        height: '101%',
        tooltipClassname: 'chart-sparkline',
        chartRangeMax: '50',
        lineColor: '#274de8',
        fillColor: '#5c77e4',
        highlightLineColor: "#274de8",
        highlightSpotColor: "#274de8",
        spotColor: '#274de8',
    });

    $("#finance-graph").sparkline([0, 5, 10, 7, 25, 20, 30], {
        type: 'line',
        width: '100%',
        height: '101%',
        composite: '!0',
        tooltipClassname: 'chart-sparkline',
        chartRangeMax: '40',
        lineColor: '#274de8',
        fillColor: '#5c77e4',
        highlightLineColor: "#274de8",
        highlightSpotColor: "#274de8",
        spotColor: '#274de8',
    });
    
    //order graph
    $("#order-graph").sparkline([40, 15, 25, 20, 15, 20, 10, 25, 35, 13,35, 10, 30, 20, 10, 15, 20], {
        type: 'line',
        width: '100%',
        height: '101%',
        tooltipClassname: 'chart-sparkline',
        lineColor: '#0c8ed2',
        fillColor: '#55b4e4',
        spotColor: '#0c8ed2',
        highlightLineColor: "#0c8ed2",
        highlightSpotColor: "#0c8ed2",
        sliceColors: ["#fff", "#fff", "#fff"],
        targetColor: "#fff",
        performanceColor: "#fff",
        boxFillColor: "#fff",
        medianColor: "#fff",
        minSpotColor: "#0c8ed2"
    });

    //skill-graph chart
    $("#skill-graph").sparkline([5, 10, 20, 14, 17, 21, 20, 10, 4, 13,0, 10, 30, 40, 10, 15, 20], {
        type: 'line',
        width: '100%',
        height: '100%',
        tooltipClassname: 'chart-sparkline',
        lineColor: '#274de8',
        fillColor: '#5c77e4',
        spotColor: '#274de8',
        //lineColor: "#bca0ee",
        //fillColor: "#bca0ee",
        highlightLineColor: "#274de8",
        highlightSpotColor: "#274de8",
        //sliceColors: ["#5e6db3", "#00ca95", "#fd7b6c"],
        targetColor: "#fff",
        performanceColor: "#fff",
        boxFillColor: "#fff",
        medianColor: "#fff",
        minSpotColor: "#274de8",
    });
})(jQuery);
