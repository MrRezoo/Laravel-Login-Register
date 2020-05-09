var myLineChart = {
    labels: ["","2009", "2010", "2011", "2012", "2013", "2014"],
    datasets: [{
        fillColor: "transparent",
        strokeColor: endlessAdminConfig.primary,
        pointColor: endlessAdminConfig.primary,
        data: [20, 33, 20, 50, 20, 33, 20, 0]
    }]
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

var myLineChart1 = {
    labels: ["","2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016"],
    datasets: [{
        fillColor: "transparent",
        strokeColor: endlessAdminConfig.primary,
        pointColor: endlessAdminConfig.primary,
        data: [5, 0, 5, 0, 15, 0, 5, 0, 5]
    }]
}
var ctx = document.getElementById("profitchart").getContext("2d");
var LineChartDemo = new Chart(ctx).Line(myLineChart1, {
    pointDotRadius: 2,
    pointDotStrokeWidth: 5,
    pointDotStrokeColor: "#ffffff",
    bezierCurve: false,
    scaleShowVerticalLines: false,
    scaleGridLineColor: "#eeeeee"
});

