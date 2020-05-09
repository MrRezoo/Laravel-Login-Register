var lineArea = new Chartist.Line('.ct-svg', {
    labels: ['01', '02', '03', '04', '05', '06', '07', '08'],
    series: [
        [0, 2, 1.2, 4, 2, 3, 1.5, 0],
        [0, 1, 2.2, 1.5, 3, 1.5, 2.25, 0]
    ]
}, {
    low: 0,
    showArea: true,
    fullWidth: true,
    onlyInteger: true,
    chartPadding: {
        left: -22,
        top: 0,
        right: 0,
        bottom: -14,
    },
    axisY: {
        low: 0,
        scaleMinSpace: 50,
    },
    axisX: {
        showGrid: false
    }
});

lineArea.on('created', function (data) {
    var defs = data.svg.elem('defs');
    defs.elem('linearGradient', {
        id: 'gradient1',
        x1: 0,
        y1: 0,
        x2: 1,
        y2: 1
    }).elem('stop', {
        offset: 0,
        'stop-color': endlessAdminConfig.primary
    }).parent().elem('stop', {
        offset: 1,
        'stop-color': endlessAdminConfig.secondary
    });
});



var lineArea1 = new Chartist.Line('.small-chart-gradient-1', {
    labels: ['01', '02', '03', '04', '05', '06', '07'],
    series: [
        [0, 2, 1.2, 4, 2, 3, 1.5, 0]
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
        id: 'gradient2',
        x1: 1,
        y1: 1,
        x2: 0,
        y2: 0
    }).elem('stop', {
        offset: 0,
        'stop-color': endlessAdminConfig.primary
    }).parent().elem('stop', {
        offset: 1,
        'stop-color': endlessAdminConfig.secondary
    });
});

var lineArea2 = new Chartist.Line('.small-chart-gradient-2', {
    labels: ['01', '02', '03', '04', '05', '06'],
    series: [
        [0, 2, 1.2, 4, 2, 3, 0]
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

lineArea2.on('created', function (data) {
    var defs = data.svg.elem('defs');

    defs.elem('linearGradient', {
        id: 'gradient3',
        x1: 1,
        y1: 1,
        x2: 0,
        y2: 0
    }).elem('stop', {
        offset: 0,
        'stop-color': endlessAdminConfig.primary
    }).parent().elem('stop', {
        offset: 1,
        'stop-color': endlessAdminConfig.secondary
    });
});

var lineArea3 = new Chartist.Line('.small-chart-gradient-3', {
    labels: ['01', '02', '03', '04', '05', '06', '07'],
    series: [
        [0, 2, 1.2, 4, 2, 3, 1.5, 2, 0]
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

lineArea3.on('created', function (data) {
    var defs = data.svg.elem('defs');

    defs.elem('linearGradient', {
        id: 'gradient4',
        x1: 1,
        y1: 1,
        x2: 0,
        y2: 0
    }).elem('stop', {
        offset: 0,
        'stop-color': endlessAdminConfig.primary
    }).parent().elem('stop', {
        offset: 1,
        'stop-color': endlessAdminConfig.secondary
    });
});


(function($) {
    "use strict";
    new Chartist.Line('.smooth-chart', {
        labels: ['2009', '2010', '2011', '2012'],
        series: [
            [0, 6, 2, 6],
            [0, 7, 1, 8]
        ]
    }, {
        fullWidth: true,
        chartPadding: {
            right: 8,
            left: -10,
            top: 14,
            bottom: -14,
        }
    });
})(jQuery);
