/**
 * --------------------------------------------------------
 * This demo was created using amCharts V4 preview release.
 *
 * V4 is the latest installement in amCharts data viz
 * library family, to be released in the first half of
 * 2018.
 *
 * For more information and documentation visit:
 * https://www.amcharts.com/docs/v4/
 * --------------------------------------------------------
 
 am4core.color("#0F5D7F"),
      am4core.color("#1581B0"),
      am4core.color("#1FBCFF"),
      am4core.color("#5A8E00"),
      am4core.color("#83CE00"),
      am4core.color("#C1E600"),
      am4core.color("#FFE700"), 
      am4core.color("#FFB500"),
      am4core.color("#FF7D00"),
      am4core.color("#FF6CDB"),
      am4core.color("#D046B6"),
      am4core.color("#653789")
 
 */
am4core.options.commercialLicense = true;

function am4themes_cs(target) {
  if (target instanceof am4core.ColorSet) {
    target.list = [
      am4core.color("#2876BC"),
      am4core.color("#1FBCFF"),
      am4core.color("#00B800"),
      am4core.color("#83CE00"),
      am4core.color("#FEE83F"),
      am4core.color("#FFCF00"),
      am4core.color("#FFA500"),
      am4core.color("#FF7D00"),
      am4core.color("#EE5A30"),
      am4core.color("#D046B6"),                                                                     
      am4core.color("#653789"),
      am4core.color("#2A49A0")
    ];
  }
  if (target instanceof am4core.Tooltip) {
    target.getFillFromObject = false;
    target.getStrokeFromObject = false;
    target.background.strokeOpacity = 0.4;
    target.background.fill = am4core.color("#000");
  }
  if (target instanceof am4core.Label) {
    target.fill = am4core.color("#555");
  }
  if (target instanceof am4charts.Axis) {
    target.cursorTooltipEnabled = false;
  }
  if (target instanceof am4charts.AxisRendererY) {
    target.grid.template.strokeOpacity = 0;
    // target.line.strokeOpacity = 1;
  }
  if (target instanceof am4charts.Grid) {
    target.strokeOpacity = 0.1;
    target.stroke = am4core.color("#000");
  }
  if (target instanceof am4core.InterfaceColorSet) {
    target.setFor("text", am4core.color("#333"));
    target.setFor("primaryButton", am4core.color("#666"));
    target.setFor("primaryButtonHover", am4core.color("#1FBCFF"));
    target.setFor("primaryButtonDown", am4core.color("#1FBCFF").lighten(-0.2));
    target.setFor(
      "primaryButtonActive",
      am4core.color("#1FBCFF").lighten(-0.2)
    );
    // target.setFor("primaryButtonText", am4core.color("#FFFFFF"));
    // target.setFor("primaryButtonStroke", am4core.color("#467B88"));
    // target.setFor("secondaryButton", am4core.color("#6DC0D5"));
    // target.setFor("secondaryButtonHover", am4core.color("#6DC0D5").lighten(-0.2));
    // target.setFor("secondaryButtonDown", am4core.color("#6DC0D5").lighten(-0.2));
    // target.setFor("secondaryButtonActive", am4core.color("#6DC0D5").lighten(-0.2));
    // target.setFor("secondaryButtonText", am4core.color("#FFFFFF"));
    // target.setFor("secondaryButtonStroke", am4core.color("#467B88"));
    // stroke
    // fill
    // disabledBackground
    // positive
    // negative
    // alternativeText
    // background
    // alternativeBackground
    // grid
    //target.setFor("grid", am4core.color("#ebebeb"));
  }
}

am4core.useTheme(am4themes_cs);

var data = [
  {
    id: 10001,
    name: "Features and Functionality",
    count: 35,
    children: [
      { id: 10002, name: "Salesforce Integration", count: 9 },
      { id: 10003, name: "API", count: 3 },
      { id: 10004, name: "Multi-currency", count: 2 },
      { id: 10005, name: "Automation", count: 4 },
      { id: 10006, name: "Email Integration", count: 3 },
      { id: 10007, name: "Data Access", count: 1 },
      { id: 10008, name: "SuccessCycles", count: 4 },
      { id: 10009, name: "Subscriptions", count: 2 },
      { id: 10010, name: "Usage", count: 1 },
      { id: 10011, name: "Reporting", count: 8 },
      { id: 10012, name: "Email Int", count: 3 },
      { id: 10013, name: "Data ", count: 1 },
      { id: 10014, name: "Succe", count: 4 },
      { id: 10015, name: "Subsc", count: 2 },
      { id: 10016, name: "Usa", count: 1 },
      { id: 10017, name: "Rep and Analytics", count: 8 }
    ]
  },
  {
    id: 10018,
    name: "Competitive Threat",
    count: 24,
    children: [
      { id: 10019, name: "Hubspot", count: 9 },
      { id: 10020, name: "Salesforce", count: 3 },
      { id: 10021, name: "Internal Tools Audit", count: 2 },
      { id: 10022, name: "Gainsight", count: 4 },
      { id: 10023, name: "Natero", count: 3 },
      { id: 10024, name: "Strikedeck", count: 1 },
      { id: 10025, name: "Other", count: 4 }
    ]
  },
  {
    name: "Relationship",
    count: 13,
    children: [
      { id: 10026, name: "Subscription Opt-out", count: 1 },
      { id: 10027, name: "Lack of executive Relationships", count: 1 },
      { id: 10028, name: "Lack of engagement", count: 10 },
      { id: 10029, name: "Key sponsor turnover", count: 1 }
    ]
  },
  {
    name: "Product",
    count: 9,
    children: [
      { name: "Product stability and uptime", count: 3 },
      { name: "Usage down", count: 4 },
      { name: "Product fit", count: 1 },
      { name: "Requirements gap", count: 1 }
    ]
  },
  {
    name: "Other",
    count: 6,
    children: [
      { name: "Not interested in auto-renew", count: 1 },
      { name: "Product adoption", count: 5 }
    ]
  },
  {
    name: "Client Dynamics",
    count: 5,
    children: [
      { name: "Too early in company evalution", count: 1 },
      { name: "Lack of resources/bandwidth", count: 4 }
    ]
  },
  {
    name: "Business Viablity",
    count: 4,
    children: [
      { name: "Acquisition", count: 2 },
      { name: "Pivoting business", count: 2 }
    ]
  }
];

// create chart
var piechart = am4core.create("chartdiv", am4charts.PieChart);
piechart.data = data;
piechart.maskBullets = false;
piechart.padding(am4core.percent(0), 120, am4core.percent(0), 120);
piechart.margin(0, 0, 0, 0);
// piechart.innerRadius = am4core.percent(0);

var series = piechart.series.push(new am4charts.PieSeries());
series.dataFields.value = "count";
series.dataFields.category = "name";
series.dataFields.children = "children";
series.labels.template.maxWidth = 150;
series.labels.template.wrap = true;
// series.labels.template.text = "[bold]{category}:[/] {percent}";

var slicehover = series.slices.template.states.create("hover");

slicehover.properties.shiftRadius = 0;
slicehover.properties.scale = 1;
slicehover.properties.fillOpacity = 1;

series.slices.template.events.on("hit", function(ev) {

    //setup single select
    var series = ev.target.dataItem.component;
    series.slices.each(function(item) {
      if (item.isActive && item != ev.target) {
        item.isActive = false;
      }
    });
    
    reasonsActiveLocal = [];

    // this eventually needs to loop through active[] elements
    var catName = ev.target.dataItem.dataContext.name;
    var catValues =
      Math.round(ev.target.dataItem.values.value.percent * 10) / 10 +
      "% (" +
      ev.target.dataItem.values.value.value +
      ")";

    updateCatTitle(catName, catValues);
  
    barchart.invalidateData();
    barchart.data = [];
    barchart.data = ev.target.dataItem.dataContext.children;
    console.log('bardata items', ev.target.dataItem.dataContext.children.length);

    barSeries.columns.template.fill = ev.target.fill;
    barSeries.columns.template.stroke = ev.target.fill;
  },
  this
);

var barchart = am4core.create("barchart", am4charts.XYChart);
// barchart.paddingRight = 0;
barchart.paddingLeft = 0;
barchart.zoomOutButton.disabled = true;

barchart.data = data[0].children;

barchart.adapter.add("data", function(data) {
  data.sort(function(a, b) {
    return a.count - b.count;
  });
  return data;
});

var catAxis = barchart.yAxes.push(new am4charts.CategoryAxis());
catAxis.dataFields.category = "name";
catAxis.renderer.minGridDistance = 1;
catAxis.renderer.grid.template.location = 0;
catAxis.renderer.labels.template.align = "bottom";
catAxis.renderer.labels.template.maxWidth = 200;
catAxis.renderer.labels.template.truncate = true;
catAxis.renderer.labels.template.tooltipText = "{category}";

var valAxis = barchart.xAxes.push(new am4charts.ValueAxis());
valAxis.min = 0;
valAxis.maxPrecision = 0;
valAxis.renderer.opposite = true;

var barSeries = barchart.series.push(new am4charts.ColumnSeries());
barSeries.dataFields.valueX = "count";
barSeries.dataFields.categoryY = "name";
barSeries.columns.template.height = 20;

var bullet = barSeries.bullets.push(new am4charts.LabelBullet());
bullet.label.dx = 10;
bullet.label.text = "[bold]{valueX}[/]";
bullet.label.horizontalCenter = "left";
bullet.label.textAlign = "left";

function updateCatTitle(title, stats) {
  var catHeaderText = document.getElementById("cat-header-text");
  var catHeaderStats = document.getElementById("cat-header-stats");
  catHeaderText.innerHTML = title;
  catHeaderStats.innerHTML = stats;
}

var defaultState = barSeries.columns.template.states.create("default");

var activeState = barSeries.columns.template.states.create("active");
activeState.properties.strokeOpacity = 1;
activeState.properties.strokeWidth = 1;
activeState.properties.fillOpacity = 1;

var notSelected = barSeries.columns.template.states.create("notSelected");
notSelected.properties.fillOpacity = 0.2;
notSelected.properties.strokeOpacity = 0.2;

// Auto adjust container height based on # of data items
var cellSize = 43;
var reasonsActiveLocal = [];

barchart.events.on("datavalidated", function(ev) {
  console.log("barchart datavalidated");
  // Get objects of interest
  var chart = ev.target;
  var categoryAxis = chart.yAxes.getIndex(0);

  // Calculate how we need to adjust chart height
  var adjustHeight = chart.data.length * cellSize - categoryAxis.pixelHeight;
  // get current chart height
  var targetHeight = chart.pixelHeight + adjustHeight;

  console.log("chart height",chart.svgContainer.htmlElement.offsetHeight);
  console.log("chart chunks",chart.svgContainer.htmlElement.offsetHeight/cellSize);
  console.log("chart target height", targetHeight);
  if (targetHeight > 550) {
    console.log("add scrollbar");
    chart.scrollbarY = new am4core.Scrollbar();
    chart.scrollbarY.hideGrips = true;
    // Set height on chart's container
    chart.svgContainer.htmlElement.style.height = targetHeight + "px";
    chart.mouseWheelBehavior = "panY";
    categoryAxis.zoomToIndexes(chart.data.length - 12, chart.data.length);
  } else {
    console.log("chart new height", targetHeight);
    // Set it on chart's container
    chart.svgContainer.htmlElement.style.height = targetHeight + "px";
    chart.scrollbarY = false;
    categoryAxis.zoomToIndexes(0, chart.data.length);
    chart.mouseWheelBehavior = "none";
  }
  
  console.log(ev.target.data);

});

barSeries.columns.template.events.on("toggled", function(ev) {

  console.log("hit event");

  var currentId = ev.target.dataItem.dataContext.id;
  console.log("ev id", currentId);

  if (reasonsActiveLocal.includes(currentId) && !ev.target.isActive) {
    var itemIndex = reasonsActiveLocal.indexOf(currentId);
    reasonsActiveLocal.splice(itemIndex, 1);
  } else if (ev.target.isActive) {
    reasonsActiveLocal.push(currentId);
  }

  console.log("reasons active", reasonsActiveLocal);
  console.log("reasonSeries items", barSeries.columns.length);
  console.log("barchart items", barchart.data.length);
  console.log("barchart component", ev.target.dataItem.component.columns.length);

  barSeries.columns.each(function(column) {

    // if(!column.isDisposed()){
      if (reasonsActiveLocal.length > 0) {
        if (!reasonsActiveLocal.includes(column.dataItem.dataContext.id)) {
          //console.log("set notSelected state", column.dataItem.dataContext.id);
          column.setState("notSelected");
          column.isActive = false;
        } else {
          //console.log("set active state", column.dataItem.dataContext.id);
          column.setState("active");
          column.isActive = true;
        }
      } else {
        console.log("set default state");
        column.defaultState.properties.fillOpacity = 1;
        column.setState("default");
        column.isActive = false;
      }
    // } else {
    //   console.log('dispose column');
    //   column.dispose();
    // }
  });
});