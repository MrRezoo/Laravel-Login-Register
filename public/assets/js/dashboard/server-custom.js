
var data = [];
var dataset;
var totalPoints = 50;
var updateInterval = 1000;
var now = new Date().getTime();


function GetData() {
  data.shift();

  while (data.length < totalPoints) {
    var y = Math.random() * 100;
    var temp = [now += updateInterval, y];

    data.push(temp);
  }
}

var options = {
  series: {
    lines: {
      show: true,
      lineWidth: 1.2,
      fill: true
    }
  },
  xaxis: {
    mode: "time",
    tickSize: [2, "second"],
    tickFormatter: function (v, axis) {
      var date = new Date(v);

      if (date.getSeconds() % 20 == 0) {
        var hours = date.getHours() < 10 ? "0" + date.getHours() : date.getHours();
        var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
        var seconds = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();

        return hours + ":" + minutes + ":" + seconds;
      } else {
        return "";
      }
    },
    axisLabel: "Time",
    axisLabelUseCanvas: false,
    axisLabelFontSizePixels: 12,
    axisLabelPadding: 10
  },
  yaxis: {
    min: 0,
    max: 100
  },
  legend: {
    labelBoxBorderColor: "#fff"
  },
  grid: {
    borderWidth: 0
  },
};

(function($) {
  "use strict";
  GetData();

  dataset = [
    { label: "CPU", data: data, color: endlessAdminConfig.primary }
  ];

  $.plot($("#cpu-updating"), dataset, options);

  function update() {
    GetData();

    $.plot($("#cpu-updating"), dataset, options)
    setTimeout(update, updateInterval);
  }

  update();
})(jQuery);

var lineGraphData = {
  labels: ["1 min.", "10 min.", "20 min.", "30 min.", "40 min.", "50 min.", "60 min.", "70 min.", "80 min.", "90 min.", "100 min"],
  datasets: [{
    label: "My First dataset",
    fillColor: "transparent",
    strokeColor: endlessAdminConfig.primary,
    pointColor: endlessAdminConfig.primary,
    pointStrokeColor: "#fff",
    pointHighlightFill: "#fff",
    pointHighlightStroke: "#000",
    data: [0, 59, 80, 40, 100, 60, 95, 20, 70, 40, 70]
  }, {
    label: "My Second dataset",
    fillColor: "transparent",
    strokeColor: endlessAdminConfig.secondary,
    pointColor: endlessAdminConfig.secondary,
    pointStrokeColor: "#fff",
    pointHighlightFill: "#000",
    pointHighlightStroke: "rgba(30, 166, 236, 1)",
    data: [0, 48, 30, 19, 86, 27, 90, 60, 30, 70, 40]
    },{
    label: "My third dataset",
    fillColor: "transparent",
    strokeColor: "#22af47",
    pointColor: "#22af47",
    pointStrokeColor: "#fff",
    pointHighlightFill: "#000",
    pointHighlightStroke: "rgba(30, 166, 236, 1)",
    data: [0, 30, 40, 10 , 60, 40, 70, 30, 20, 80, 50]
  }]
};
var lineGraphOptions = {
  scaleShowGridLines: true,
  scaleGridLineColor: "rgba(0,0,0,.05)",
  scaleGridLineWidth: 1,
  scaleShowHorizontalLines: true,
  scaleShowVerticalLines: true,
  bezierCurve: true,
  bezierCurveTension: 0.4,
  pointDot: true,
  pointDotRadius: 4,
  pointDotStrokeWidth: 1,
  pointHitDetectionRadius: 20,
  datasetStroke: true,
  datasetStrokeWidth: 2,
  datasetFill: true,
  legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
};
var lineCtx = document.getElementById("myGraph").getContext("2d");
var myLineCharts = new Chart(lineCtx).Line(lineGraphData, lineGraphOptions);


$(function () {
  var container = '#latency-chart';
  var maximum = 250;
  var data = [];
  var times = [];
  var date = new Date();
  var timeUnitSize = {
    "second": 1000,
    "minute": 60 * 1000,
    "hour": 60 * 60 * 1000,
    "day": 24 * 60 * 60 * 1000,
    "month": 30 * 24 * 60 * 60 * 1000,
    "quarter": 3 * 30 * 24 * 60 * 60 * 1000,
    "year": 365.2425 * 24 * 60 * 60 * 1000
  };
  function getRandomData() {
    if (data.length) {
      data = data.slice(1);
      times.shift();
    }
    while (data.length < maximum) {
      var previous = data.length ? data[data.length - 1] : 50;
      var y = previous + Math.random() * 10 - 5;
      data.push(y < 0 ? 4 : y > 100 ? 100 : y);
      date.setMinutes(date.getMinutes() + 1)
      times.push(date.getTime());
    }
    // zip the generated y values with the x values
    var res = [];
    for (var i = 0; i < data.length; ++i) {
      res.push([times[i], data[i]])
    }
    return res;
  }
  var series = [{
    data: getRandomData(),
    lines: {
      fill: true,
      color: "#000",
      fillColor: { colors: [{ opacity: 0.5 }, { opacity: 0 } ] }
    },
    color: endlessAdminConfig.primary,
  }];
  //
  var MyOptions = {
    grid: {
      borderWidth: 0,
      minBorderMargin: 0,
      labelMargin: 0,
      hoverable: true,
      mouseActiveRadius: 50,
      margin: {
        top: 0,
        bottom: 0,
        right: 0,
      },
      markings: function(axes) {
        var markings = [];
        var xaxis = axes.xaxis;
        var tick = timeUnitSize[xaxis.tickSize[1]] * xaxis.tickSize[0] ;
        var then = new Date(times[0]);
        var now = new Date(times[times.length - 1]);
        var mils = 1000 - new Date(then).getMilliseconds()
        var secs = 60 - new Date(then).getSeconds();
        var mins = (60 - new Date(then).getMinutes()) % 30;
        var next = (60 - new Date(then).getMinutes());
        var unti = mils + ((secs -1) * 1000) + ((mins - 1) * 60 * 1000);

        for (var x = then.getTime(); x < now.getTime(); x += tick * 2) {

          var mils = 1000 - new Date(x).getMilliseconds()
          var secs = 60 - new Date(x).getSeconds();
          var mins = (60 - new Date(x).getMinutes()) % 30;
          var next = (60 - new Date(then).getMinutes());
          var unti = mils + ((secs -1) * 1000) + ((mins - 1) * 60 * 1000);
        }

        return markings;
      }
    },
    yaxis: {
      show: false
    },
    xaxis: {
      show: false
    },
    legend: {
      show: true,
    }
  };
  setInterval(function updateRandom() {
    series[0].data = getRandomData();
    //plot.setData(series);
    var options = $.extend({}, MyOptions, {
      xaxis: {
        mode: "time",
        timeformat: "%H:%M",
        min: (new Date(times[0])).getTime(),
        max: (new Date(times[times.length - 1])).getTime(),
        minTickSize: [1, "minute"],
        tickSize: [30, 'minute'],
        color: '#fff'
      }
    });

    var plot = $.plot(container, series, options);
    plot.draw();
  }, 200);

});

$(document).ready(function() {
  $('product-list').DataTable();
  // Basic table example
  $('#basic-1').DataTable();
});