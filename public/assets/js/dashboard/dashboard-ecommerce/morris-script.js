"use strict";
var morris_chart = {
    init: function() {
        Morris.Area({
            element: 'graph123',
            behaveLikeLine: true,
            scaleShowGridLines: true,
            scaleGridLineColor: "rgba(0,0,0,0.05)",
            scaleGridLineWidth: 0.2,
            data: [{
                x: '2009',
                z: 0
            },
                {
                    x: '2010',
                    z: 2.25
                },
                {
                    x: '2011',
                    z: 1.25
                },
                {
                    x: '2012',
                    z: 3
                },
                {
                    x: '2013',
                    z: 1.25
                },
                {
                    x: '2014',
                    z: 2.25
                },
                {
                    x: '2015',
                    z: 0
                }
            ],
            xkey: 'x',
            ykeys: ['z'],
            labels: ['Z'],
            lineColors: [endlessAdminConfig.primary],
        })
    }
};
(function($) {
    "use strict";
    morris_chart.init()
})(jQuery);

$(function() {
    var e = 0,
        f = function(a) {
            for (var b = [], c = 0; c <= 360; c += 50) {
                var d = (a + c) % 360;
                b.push({
                    x: c,
                    z: Math.cos(Math.PI * d / 180).toFixed(9)
                })
            }
            return b
        },
        g = Morris.Line({
            element:'updating-data-morris-chart',
            data: f(0),
            xkey: "x",
            ykeys: ["z"],
            labels: ["cos()"],
            parseTime: !1,
            ymin: -1,
            ymax: 1,
            hideHover: !0,
            lineColors: [endlessAdminConfig.primary],
        }),
        h = function() {
            e++, g.setData(f(5 * e)), $(".reloadStatus").text(e + " reloads")
        };
    setInterval(h, 100)
})
