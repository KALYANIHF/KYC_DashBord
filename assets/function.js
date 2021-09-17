// main function that is responsible for the whole data menupulation
function onload_TotalData(dataSet, fieldSet, colorSet) {
  $(".grid-system").empty();
  var dynamic_data = "";
  for (let i = 0; i < fieldSet.length; i++) {
    dynamic_data += `
                <a onclick='getID(this.id)' id="${fieldSet[i]}-sub">
                  <div class="sub_grid" style="background-color: ${colorSet[i]};">
                        <h6 style="text-transform:uppercase" data-aos="fade-down" data-aos-duration="500">${fieldSet[i]}</h6>
                        <div class="counter" data-aos="fade-up" data-aos-duration="500">
                            <h5 class="count" data-target="${dataSet[i]}" id="${fieldSet[i]}">0</h5>
                        </div>
                   </div>
                </a>
        `;
  }
  // console.log(dynamic_data);
  $(".grid-system").append(dynamic_data);
}
function dynamic_TotalData(dataSet, fieldSet, colorSet) {
  $(".grid-system").empty();
  var dynamic_data = "";
  for (let i = 0; i < fieldSet.length; i++) {
    dynamic_data += `
                <a onclick='getID(this.id)' id="${fieldSet[i]}-sub">
                  <div class="sub_grid" style="background-color: ${colorSet[i]};">
                    <div class="content">
                        <h6 style="text-transform:uppercase" data-aos="fade-down" data-aos-duration="500">${fieldSet[i]}</h6>
                        <div class="counter" data-aos="fade-up" data-aos-duration="500">
                            <h5 class="count" data-target="${dataSet[i]}" id="${fieldSet[i]}">${dataSet[i]}</h5>
                        </div>
                    </div>
                  </div>
                </a>
        `;
  }
  // console.log(dynamic_data);
  $(".grid-system").append(dynamic_data);
}

// function for the left pie chart data change
function LeftPieChart(dataSet, colorSet, labelSet, text) {
  var ocan = document.getElementById("myChart1");
  document.getElementById("dynamic_chart_").removeChild(ocan);
  var canvas = document.createElement("canvas");
  canvas.id = "myChart1";
  document.getElementById("dynamic_chart_").appendChild(canvas);
  var ctx = document.getElementById("myChart1").getContext("2d");
  Chart.defaults.global.defaultFontSize = 16;
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: "pie", // also try bar or other graph types

    // The data for our dataset
    data: {
      labels: labelSet,
      // Information about the dataset
      datasets: [
        {
          backgroundColor: colorSet,
          borderColor: "royalblue",
          data: dataSet,
        },
      ],
    },

    // Configuration options
    options: {
      layout: {
        padding: 5,
      },
      legend: {
        position: "bottom",
      },
      scales: {
        yAxes: [
          {
            scaleLabel: {
              display: true,
              labelString: "Range in Percentage",
            },
          },
        ],
        xAxes: [
          {
            scaleLabel: {
              display: true,
              labelString: text,
            },
          },
        ],
      },
    },
  });

  document.getElementById("chart_text1").innerHTML = text;
}
// function for the right pie chart
function RightPieChart(dataSet, colorSet, labelSet, text) {
  var ocan = document.getElementById("myChart2");
  document.getElementById("dynamic_chart").removeChild(ocan);
  var canvas = document.createElement("canvas");
  canvas.id = "myChart2";
  document.getElementById("dynamic_chart").appendChild(canvas);
  var ctx = document.getElementById("myChart2").getContext("2d");
  Chart.defaults.global.defaultFontSize = 16;
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: "pie", // also try bar or other graph types

    // The data for our dataset
    data: {
      labels: labelSet,
      // Information about the dataset
      datasets: [
        {
          backgroundColor: colorSet,
          borderColor: "royalblue",
          data: dataSet,
        },
      ],
    },

    // Configuration options
    options: {
      layout: {
        padding: 5,
      },
      legend: {
        position: "bottom",
      },
      scales: {
        yAxes: [
          {
            scaleLabel: {
              display: true,
              labelString: "Range in Percentage",
            },
          },
        ],
        xAxes: [
          {
            scaleLabel: {
              display: true,
              labelString: text,
            },
          },
        ],
      },
    },
  });

  document.getElementById("chart_text2").innerHTML = text;
}

// function for the bottom bar chart
function BottomBarChart(dataSet, colorSet, labelSet, text) {
  var ocan = document.getElementById("myChart3");
  document.getElementById("dynamic_barchart").removeChild(ocan);
  var canvas = document.createElement("canvas");
  canvas.id = "myChart3";
  document.getElementById("dynamic_barchart").appendChild(canvas);
  var ctx = document.getElementById("myChart3").getContext("2d");
  Chart.defaults.global.defaultFontSize = 16;
  // break data
  let data0 = dataSet[0];
  let data1 = dataSet[1];
  let data2 = dataSet[2];
  let data3 = dataSet[3];
  let data4 = dataSet[4];
  // break data end
  var myChart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: labelSet,
      datasets: [
        {
          label: "self",
          backgroundColor: `${colorSet[0]}`,
          data: [
            `${data0}`,
            25,
            50,
            35,
            55,
            65,
            `${data0}`,
            25,
            50,
            35,
            55,
            65,
          ],
        },
        {
          label: "shg",
          backgroundColor: `${colorSet[1]}`,
          data: [
            `${data1}`,
            15,
            25,
            30,
            47,
            70,
            `${data0}`,
            25,
            50,
            35,
            55,
            65,
          ],
        },
        {
          label: "mfg",
          backgroundColor: `${colorSet[2]}`,
          data: [
            `${data2}`,
            47,
            40,
            35,
            22,
            43,
            `${data0}`,
            25,
            50,
            35,
            55,
            65,
          ],
        },
        {
          label: "organization",
          backgroundColor: `${colorSet[3]}`,
          data: [
            `${data3}`,
            20,
            30,
            40,
            50,
            52,
            `${data0}`,
            25,
            50,
            35,
            55,
            65,
          ],
        },
        {
          label: "jlg",
          backgroundColor: `${colorSet[4]}`,
          data: [
            `${data4}`,
            25,
            30,
            35,
            45,
            48,
            `${data0}`,
            25,
            50,
            35,
            55,
            65,
          ],
        },
      ],
    },
    options: {
      tooltips: {
        displayColors: true,
        callbacks: {
          mode: "x",
        },
      },
      scales: {
        xAxes: [
          {
            stacked: true,
            gridLines: {
              display: false,
            },
          },
        ],
        yAxes: [
          {
            stacked: true,
            ticks: {
              beginAtZero: true,
            },
            type: "linear",
          },
        ],
      },
      responsive: true,
      maintainAspectRatio: false,
      legend: {
        position: "bottom",
      },
    },
  });
  document.getElementById("chart_text3").innerHTML = text;
}

// ajex call functions
// ######## all count data ########
function Ajax_Call(flag1, flag2, flag3, start_date = "", end_date = "") {
  var response = $.ajax({
    url: "kyc_dashbord_dataload.php",
    type: "post",
    async: false,
    dataType: "json",
    data: {
      flag_type1: flag1,
      flag_type2: flag2,
      flag_type3: flag3,
      start_date: start_date,
      end_date: end_date,
    },
  }).responseText;
  // console.log(typeof response);
  return response;
  // console.log(data_value);
}
