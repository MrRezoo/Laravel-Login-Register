var doughnutData = [
    {
        value: 300,
        color: endlessAdminConfig.primary,
        highlight: endlessAdminConfig.primary,
        label: "Frontend"
    },
    {
        value: 30,
        color: endlessAdminConfig.secondary,
        highlight: endlessAdminConfig.secondary,
        label: "Api"
    },
    {
        value: 100,
        color: "#FF5370",
        highlight: "#FF5370",
        label: "Issues"
    }
];
var doughnutOptions = {
    segmentShowStroke: true,
    segmentStrokeColor: "#fff",
    segmentStrokeWidth: 2,
    percentageInnerCutout: 50,
    animationSteps: 100,
    animationEasing: "easeOutBounce",
    animateRotate: true,
    animateScale: false,
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
};
var doughnutCtx = document.getElementById("myDoughnutGraph").getContext("2d");
var myDoughnutChart = new Chart(doughnutCtx).Doughnut(doughnutData, doughnutOptions);

var morris_chart = {
    init: function() {
        $(function() {
            Morris.Bar({
                element: 'github-issues',
                data: [{
                    x: "Mon",
                    y: 3,
                    z: 2
                },
                    {
                        x: "Tue",
                        y: 3,
                        z: null
                    },
                    {
                        x: "Wed",
                        y: 0,
                        z: 1.5
                    },
                    {
                        x: "Thu",
                        y: 2,
                        z: null
                    },
                    {
                        x: "Fri",
                        y: 0,
                        z: 3.5
                    },
                    {
                        x: "Sat",
                        y: 3,
                        z: 2

                    },
                    {
                        x: "Sun",
                        y: 0,
                        z: 2
                    }],
                xkey: "x",
                ykeys: ["y", "z"],
                labels: ["Y", "Z"],
                barColors: [endlessAdminConfig.primary ,endlessAdminConfig.secondary , "#4466f2" ,"#1ea6ec"],
                stacked: !0
            });
        });
    }
};
(function($) {
    "use strict";
    morris_chart.init()
})(jQuery);

var lineArea1 = new Chartist.Line('.project-small-chart-1', {
    labels: ['01', '02', '03', '04', '05', '06'],
    series: [
        [1, 5, 2, 5, 4, 3]
    ]
}, {
    lineSmooth: Chartist.Interpolation.simple({
        divisor: 2
    }),
    fullWidth: !0,
    showArea: !0,
    chartPadding: {
        right: 0,
        left: 0,
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
lineArea1.on('created', function (data) {
    var defs = data.svg.elem('defs');

    defs.elem('linearGradient', {
        id: 'gradient5',
        x1: 1,
        y1: 0,
        x2: 0,
        y2: 1
    }).elem('stop', {
        offset: 0,
        'stop-color': endlessAdminConfig.primary
    }).parent().elem('stop', {
        offset: 1,
        'stop-color': endlessAdminConfig.secondary
    });
});

var lineArea2 = new Chartist.Line('.project-small-chart-2', {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        series: [
            [5, 2, 3, 1, 3, 2]
        ]
    }, {
        low: 0,
        showArea: true,
        showPoint: false,
        fullWidth: true,
        chartpadding: {
            bottom: 0,
            left: 0,
            right: 0
        },
        axisX: {
            low: 0,
            offset: -5,
            showLabel: false,
            showGrid: false
        },
        axisY: {
            low: 0,
            offset: -5,
            showLabel: false,
            showGrid: false
        }
    });
lineArea2.on('created', function (data) {
    var defs = data.svg.elem('defs');

    defs.elem('linearGradient', {
        id: 'gradient6',
        x1: 1,
        y1: 0,
        x2: 0,
        y2: 1
    }).elem('stop', {
        offset: 0,
        'stop-color': endlessAdminConfig.primary
    }).parent().elem('stop', {
        offset: 1,
        'stop-color': endlessAdminConfig.secondary
    });
});

var lineArea3 = new Chartist.Line('.project-small-chart-3', {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        series: [
            [1, 2, 5, 1, 4, 3]
        ]
    }, {
        low: 0,
        showArea: true,
        showPoint: false,
        fullWidth: true,
        chartpadding: {
            bottom: 0,
            left: 0,
            right: 0
        },
        axisX: {
            low: 0,
            offset: -5,
            showLabel: false,
            showGrid: false
        },
        axisY: {
            low: 0,
            offset: -5,
            showLabel: false,
            showGrid: false
        }
    });
lineArea3.on('created', function (data) {
    var defs = data.svg.elem('defs');

    defs.elem('linearGradient', {
        id: 'gradient7',
        x1: 1,
        y1: 0,
        x2: 0,
        y2: 1
    }).elem('stop', {
        offset: 0,
        'stop-color': endlessAdminConfig.primary
    }).parent().elem('stop', {
        offset: 1,
        'stop-color': endlessAdminConfig.secondary
    });
});
var lineArea4 = new Chartist.Line('.project-small-chart-4', {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        series: [
            [1, 2, 4, 3, 2, 3]
        ]
    }, {
        low: 0,
        showArea: true,
        showPoint: false,
        fullWidth: true,
        chartpadding: {
            bottom: 0,
            left: 0,
            right: 0
        },
        axisX: {
            low: 0,
            offset: -5,
            showLabel: false,
            showGrid: false
        },
        axisY: {
            low: 0,
            offset: -5,
            showLabel: false,
            showGrid: false
        }
    });
lineArea4.on('created', function (data) {
    var defs = data.svg.elem('defs');

    defs.elem('linearGradient', {
        id: 'gradient8',
        x1: 1,
        y1: 0,
        x2: 0,
        y2: 1
    }).elem('stop', {
        offset: 0,
        'stop-color': endlessAdminConfig.primary
    }).parent().elem('stop', {
        offset: 1,
        'stop-color': endlessAdminConfig.secondary
    });
});
var lineArea5 = new Chartist.Line('.project-small-chart-5', {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        series: [
            [0, 5, 2, 3, 1, 3]
        ]
    }, {
        low: 0,
        showArea: true,
        showPoint: false,
        fullWidth: true,
        chartpadding: {
            bottom: 0,
            left: 0,
            right: 0
        },
        axisX: {
            low: 0,
            offset: -5,
            showLabel: false,
            showGrid: false
        },
        axisY: {
            low: 0,
            offset: -5,
            showLabel: false,
            showGrid: false
        }
    });
lineArea5.on('created', function (data) {
    var defs = data.svg.elem('defs');

    defs.elem('linearGradient', {
        id: 'gradient9',
        x1: 1,
        y1: 0,
        x2: 0,
        y2: 1
    }).elem('stop', {
        offset: 0,
        'stop-color': endlessAdminConfig.primary
    }).parent().elem('stop', {
        offset: 1,
        'stop-color': endlessAdminConfig.secondary
    });
});
var lineArea6 = new Chartist.Line('.project-small-chart-6', {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        series: [
            [1, 2, 3, 1, 2, 3]
        ]
    }, {
        low: 0,
        showArea: true,
        showPoint: false,
        fullWidth: true,
        chartpadding: {
            bottom: 0,
            left: 0,
            right: 0
        },
        axisX: {
            low: 0,
            offset: -5,
            showLabel: false,
            showGrid: false
        },
        axisY: {
            low: 0,
            offset: -5,
            showLabel: false,
            showGrid: false
        }
    });
lineArea6.on('created', function (data) {
    var defs = data.svg.elem('defs');

    defs.elem('linearGradient', {
        id: 'gradient10',
        x1: 1,
        y1: 0,
        x2: 0,
        y2: 1
    }).elem('stop', {
        offset: 0,
        'stop-color': endlessAdminConfig.primary
    }).parent().elem('stop', {
        offset: 1,
        'stop-color': endlessAdminConfig.secondary
    });
});

$("#tab-1").addClass('visiable');
$(".default").addClass('visiable');
$(".tabs li a").on('click', function () {
    event.preventDefault();
    $(this).parent().parent().find("li").removeClass("current");
    $(this).parent().addClass("current");
    var currunt_href = $(this).attr("href");
    $('#' + currunt_href).show();
    $(this).parent().parent().parent().parent().find(".tab-content").addClass('visiable');
    $(this).parent().parent().parent().parent().find(".tab-content").not('#' + currunt_href).removeClass('visiable');
});

// pie chart budget
$(function() {
    var data = [],
        series = Math.floor(Math.random() * 6) + 3;
    for (var i = 0; i < series; i++) {
        data[i] = {
            label: "Series" + (i + 1),
            data: Math.floor(Math.random() * 100) + 1
        }
    }
    $.plot('#default-pie-flot-chart', data, {
        series: {
            pie: {
                show: true
            }
        },
        colors: ["#4466f2", "#1ea6ec" ,"#22af47" ,"#007bff" ,"#FF5370", "#22af47" ,"#ff9f40"]
    });
});

$(".bar-colours-1").peity("bar", {
    fill: [endlessAdminConfig.primary, endlessAdminConfig.secondary, "#22af47"],
    width: '500',
    height: '50'
})
$(".bar-colours-2").peity("bar", {
    fill: [endlessAdminConfig.primary, endlessAdminConfig.secondary, "#22af47"],
    width: '500',
    height: '50'
})

$(".bar-colours-3").peity("bar", {
    fill: [endlessAdminConfig.primary, endlessAdminConfig.secondary, "#22af47"],
    width: '500',
    height: '50'
})
