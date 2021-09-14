<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyc DashBord</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets/main.css">
</head>
<body>
    <div class="container-fluid">
        <!-- main header section -->
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <div class="chart-title">
                    <h5 id="chart-figure" class="display-4" class="figure">Netware KYC DashBord Status</h5>
                    <h3 id="chart-figure-type" class="type">Your Login Date and Time: <script>document.write(new Date().toLocaleString("en-US", {timeZone:
                        "Asia/Kolkata"}))</script></h3>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 justify-content mt-2">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <select class="custom-select" id="date_range">
                            <option value="1" selected>YTD</option>
                            <option value="2">Today</option>
                            <option value="3">Last 1 Week</option>
                            <option value="4">Last 1 Month</option>
                            <option value="5">Last 6 Month</option>
                            <option value="6">Last 1 Year</option>
                            <option value="7">Custom Date</option>
                        </select>
                        <div id="custom_date">
                            <!-- pick date part -->
                            <div class="form-row">
                                <div class="col">
                                    <label for="start-date">Start Date</label>
                                    <input type="date" name="start_date" id="start_date">
                                </div>
                                <div class="col">
                                    <label for="end-date">End Date</label>
                                    <input type="date" name="end_date" id="end_date">
                                </div>
                                <div class="col align_item">
                                    <button class="btn btn-success btn-sm mt-4" id="check_date" type="submit" name="check_date">Check</button>
                                </div>
                            </div>
                            <!-- pick date part end -->
                        </div>
                </form>
            </div>
        </div>
        <!-- main header section end -->
        <!-- grid section for showing the data -->
        <div class="container mt-5 mb-5">
            <div class="grid-system">

            </div>
        </div>
        <!-- grid section end -->
        <!-- main two pie chart section -->
        <div class="row p-4">
            <div class="col-sm-6 col-md-6">
                <div class="error_massage">
                    <div class="massage_text">
                        <h5>No date is found</h5>
                        <h6>Please select a Date Range</h6>
                    </div>
                </div>
                <div class="inside rounded" id="dynamic_chart_">
                    <div class="select_menu mt-5 justify-content">
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                            <select class="custom-select" id="kyc_type">
                                <option value="1" selected>TOTAL KYC</option>
                                <option value="2">SELF</option>
                                <option value="3">SHG</option>
                                <option value="4">MFG</option>
                                <option value="5">Organization</option>
                                <option value="6">JLG</option>
                            </select>
                        </form>
                    </div>
                    <!-- left pie chart -->
                        <canvas id="myChart1" width="300px" height="300px"></canvas>
                    <!-- left pie chart end -->
                    <h6 id="chart_text1" class="text-center pt-2 text-uppercase"></h6>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="error_massage">
                    <div class="massage_text">
                        <h5>No date is found</h5>
                        <h6>Please select a Date Range</h6>
                    </div>
                </div>
                <div class="inside rounded" id="dynamic_chart">
                    <div class="select_menu mt-5 justify-content">
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                            <select class="custom-select" id="filter_type">
                                <option value="1" selected>Gender</option>
                                <option value="2">Caste</option>
                                <option value="3">Religion</option>
                                <option value="4">Marital Status</option>
                            </select>
                        </form>
                    </div>
                    <!-- right pie chart -->
                        <canvas id="myChart2" width="300px" height="300px"></canvas>
                    <!-- right pie chart end -->
                        <h6 id="chart_text2" class="text-center pt-2 text-uppercase"></h6>
                </div>
            </div>
        </div>
        <!-- main two pie chart section end -->
        <!-- bar chart start -->
        <div class="row p-4">
            <div class="col-sm-12 col-md-12">
                <div class="error_massage">
                    <div class="massage_text">
                        <h5>No date is found</h5>
                        <h6>Please select a Date Range</h6>
                    </div>
                </div>
                <div class="inside_ rounded" id="dynamic_barchart">
                        <canvas id="myChart3"></canvas>
                        <h6 id="chart_text3" class="text-center pt-2 text-uppercase"></h6>
                </div>
            </div>
        </div>
        <!-- bar chart end -->
    </div>
    <!-- footer section start -->
        <div class="footer p-3 bg-secondary">
            <div class="container">
                <div class="content">
                    <h6 class="letter_space">Netware All Right Reserved &copy; <script>document.write(new Date().getFullYear())</script></h6>
                </div>
            </div>
        </div>
    <!-- footer section end -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="./assets/function.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- default global color section -->
    <script>
        kyc_color_set = [
            '#f2f2c0',
            '#c2f261',
            '#91f291',
            '#61f2c2'
        ]
        gender_color_set= [
            '#fe5f55',
            '#f0b67f',
            '#d6d1b1'
        ]
        cust_color_set = [
            '#aa4465',
            '#edf0da',
            '#a89b8c',
            '#f0dfad',
            '#8f5c38'
        ]
        religion_color_set = [
            '#ee6055',
            '#60d394',
            '#aaf683',
            '#ffd97d'
        ]
        married_color_set = [
            '#9e2b25',
            '#51355a',
            '#2a0c4e'
        ]
        barchart_color_set = [
            '#d72638',
            '#3f88c5',
            '#f49d37',
            '#140f2d',
            '#f22b29'
        ]
        kyc_label_set = ['approve','reject','pending','seek clarification'];
        gender_label_set = ['Male','Female','Transgender'];
        kyc_barchart_label = ['Self','Shg','Mfg','Organization','Jlg'];
        main_fieldSet = ["total_kyc","self","shg","mfg","Organization","jlg"];
        // main_fieldSet = ["alpha","beta","gama","delta","nano","pico","sudo","ls"];
        main_colorSet = ['#555','#d72638','#3f88c5','#f49d37','#140f2d','#f22b29'];
        // main_colorSet = ['#555','#d72638','#3f88c5','#f49d37','#140f2d','#140f36','#140f9d','#0f0'];
    </script>
    <!-- default global color section end -->
    <!-- main vanilla script ES6 -->
    <script>
        window.addEventListener('load',()=>{
            flag0 = Number(document.getElementById('date_range').value);
            flag1 = Number(document.getElementById('kyc_type').value);
            flag2 = Number(document.getElementById('filter_type').value);
            // console.log(flag0,flag1,flag2);
            $('.error_massage').hide();
            $('#custom_date').hide();
            // Total data load
            // call the ajex to get the data
            total_count = Total_Kyc_Count(flag0,flag1,flag2);
            console.log(total_count);
            onload_TotalData([250,85,90,75,110,37],main_fieldSet,main_colorSet);
            // chart1
            // name of the argumants of this function (dataSet,colorSet,labelSet)
            LeftPieChart([50,30,17,25],kyc_color_set,kyc_label_set,'kyc by status till YTD');
            // chart2
            // name of the argumants of this function (dataSet,colorSet,labelSet)
            RightPieChart([45,30,12],gender_color_set,gender_label_set,'kyc status by gender till YTD');
            // chart3
            // same as above
            BottomBarChart([64,85,90,75,110,98],barchart_color_set,[2000,2001,2002,2003,2004,2005,2006,2007,2008,2010,2011,2012],'All Kyc DataSheet till YTD');
            const countElements = document.querySelectorAll('.count');
            // const speed  = 200;
            const inc = 0;
            countElements.forEach(e=>{
                // define a function to incement the value of the element
                const updateCount = ()=>{
                    const target = e.getAttribute('data-target');
                    // console.log(target);
                    const count =+ e.innerHTML;
                    // console.log(count);
                    // increment the value by devide the target value with the speed value
                    const inc =+ 1;
                    if (count < target) {
                        // Add inc to count and output in counter
                        e.innerText = count + inc;
                        // Call function every 3ms count delay
                        setTimeout(updateCount, 1.5);
                    }else{
                        e.innerHTML = target;
                    }
                };
                updateCount();
            });
        })
    </script>
    <!-- main vanilla script end ES6 -->
    <!-- all other data manupulation -->
    <script> 
        // total data value change
        document.getElementById('date_range').addEventListener('change',()=>{
            flag0 = Number(document.getElementById('date_range').value);
            flag1 = Number(document.getElementById('kyc_type').value);
            flag2 = Number(document.getElementById('filter_type').value);
            // console.log(flag0, flag1, flag2);
            // Till YTD
            // Combination for the first drop down

            if (flag0 === 1 && flag1 === 1 && flag2 === 1) {
                $('#custom_date').hide();
                $('.inside,.inside_').show();
                $('.error_massage').hide();
                // TotalData([250,85,90,75,110,55]);
                dynamic_TotalData([250,85,90,75,110,55],main_fieldSet,main_colorSet);
                LeftPieChart([60,40,20,35],kyc_color_set,kyc_label_set,'kyc by status till YTD');
                RightPieChart([40,20,35],gender_color_set,gender_label_set,'Total Kyc By Gender till YTD');
                BottomBarChart([85,90,75,110,55],barchart_color_set,kyc_barchart_label,'All Kyc DataSheet till YTD');
            }
            if (flag0 === 2 && flag1 === 1 && flag2 === 1) {
                $('#custom_date').hide();
                $('.inside,.inside_').show();
                $('.error_massage').hide();
                dynamic_TotalData([150,65,70,85,90,35],main_fieldSet,main_colorSet);
                LeftPieChart([60,40,20,35],kyc_color_set,kyc_label_set,'kyc by status till Today');
                RightPieChart([40,20,35],gender_color_set,gender_label_set,'Total Kyc By Gender till Today');
                BottomBarChart([85,64,55,40,36],barchart_color_set,kyc_barchart_label,'All Kyc DataSheet till Today');
            }
            if (flag0 === 3 && flag1 === 1 && flag2 === 1) {
                $('#custom_date').hide();
                $('.inside,.inside_').show();
                $('.error_massage').hide();
                dynamic_TotalData([100,80,60,45,70,55],main_fieldSet,main_colorSet);
                LeftPieChart([25,12,50,30],kyc_color_set,kyc_label_set,'kyc by status till last Week');
                RightPieChart([50,25,40],gender_color_set,gender_label_set,'Total Kyc By Gender till last Week');
                BottomBarChart([45,28,25,15,32],barchart_color_set,kyc_barchart_label,'All Kyc DataSheet till last Week');
            }
            if (flag0 === 4 && flag1 === 1 && flag2 === 1) {
                $('#custom_date').hide();
                $('.inside,.inside_').show();
                $('.error_massage').hide();
                dynamic_TotalData([90,25,30,35,20,15],main_fieldSet,main_colorSet);
                LeftPieChart([25,12,50,30],kyc_color_set,kyc_label_set,'kyc by status till last Month');
                RightPieChart([30,20,50],gender_color_set,gender_label_set,'Total Kyc By Gender till last Month');
                BottomBarChart([40,20,30,25,5],barchart_color_set,kyc_barchart_label,'All Kyc DataSheet till last Month');
            }
            if (flag0 === 5 && flag1 === 1 && flag2 === 1) {
                $('#custom_date').hide();
                $('.inside,.inside_').show();
                $('.error_massage').hide();
                dynamic_TotalData([140,55,57,65,20,45],main_fieldSet,main_colorSet);
                LeftPieChart([25,12,50,30],kyc_color_set,kyc_label_set,'kyc by status till last 6 Month');
                RightPieChart([50,20,30],gender_color_set,gender_label_set,'Total Kyc By Gender till last 6 Month');
                BottomBarChart([30,25,28,12,45],barchart_color_set,kyc_barchart_label,'All Kyc DataSheet till last 6 Month');
            }
            if (flag0 === 6 && flag1 === 1 && flag2 === 1) {
                $('#custom_date').hide();
                $('.inside,.inside_').show();
                $('.error_massage').hide();
                dynamic_TotalData([110,35,10,15,30,55],main_fieldSet,main_colorSet);
                LeftPieChart([35,45,40,25],kyc_color_set,kyc_label_set,'kyc by status till last 1 Year');
                RightPieChart([50,30,25],gender_color_set,gender_label_set,'Total Kyc By Gender till last 1 Year');
                BottomBarChart([40,25,25,15,15],barchart_color_set,kyc_barchart_label,'All Kyc DataSheet till last 1 Year');
            }
            if (flag0 === 7 && flag1 === 1 && flag2 === 1) {
                $('#custom_date').show();
                document.querySelectorAll(".count").forEach(e=>{
                    e.innerHTML='0';
                })
                $('.inside,.inside_').hide();
                $('.error_massage').show();
            }
        })
        // left drop down
        document.getElementById('kyc_type').addEventListener('change',()=>{
            // for the all kyc type
            if (flag1 === 1) {
                LeftPieChart([50,30,17,25,35],['green','yellow','pink','red','royalblue'],['Self','Shg','Mfg','Organization','Jlg'],'kyc by status');
            }
            // self
            if (flag1 === 2) {
                LeftPieChart([50],['green','white'],['Self'],'kyc by self');
            }
            // shg
            if (flag1 === 3) {
                LeftPieChart([30,(100-30)],['yellow','white'],['Shg'],'kyc by shg');
            }
            // mfg
            if (flag1 === 4) {
                LeftPieChart([17,(100-17)],['pink','white'],['Mfg'],'kyc by mfg');
            }
            // organization
            if (flag1 === 5) {
                LeftPieChart([25,(100-25)],['red','white'],['Organization'],'kyc by organization');
            }
            // jlg
            if (flag1 === 6) {
                LeftPieChart([35,(100-35)],['royalblue','white'],['Jlg'],'kyc by jlg');
            }
        })
        // right drop down
        document.getElementById('filter_type').addEventListener('change',()=>{
            if (flag2 === 1) {
                RightPieChart([45,30,12],['green','yellow','pink'],['Male','Female','Transgender'],"self kyc by gender");
            }
            if (flag2 === 2) {
                RightPieChart([50,40,18,20,25],['lime','royalblue','pink','green','yellow'],['ST','SC','OBC','GENERAL','MINORITY'],"self kyc by Caste");
            }
            if (flag2 === 3) {
                RightPieChart([60,50,45,100],['royalblue','green','lime','yellow'],['Hindu','Muslim','Christian','Others'],"self kyc by religion");
            }
            if (flag2 === 4) {
                RightPieChart([60,50,45],['black','green','lime'],['Marrid','Unmarrid','Others'],"self kyc by marital status");
            }
        });
        // On custom data data value
        document.getElementById('check_date').addEventListener('click',(e)=>{
            const start_date = document.querySelector('#start_date').value;
            const end_date = document.querySelector('#end_date').value;
            // if ((start_date == null || start_date == '') && (end_date == null || end_date == '')) {
            //     e.preventDefault();
            //     alert('Please Select Date Range Before Click Fetch');
            // }else{
            //     console.log(start_date,end_date);
            // }
            if ((start_date == null || start_date == '') && (end_date == null || end_date == '')) {
                e.preventDefault();
                alert('Please Select Date Range Before Click Fetch');
            }else{
                e.preventDefault();
                // console.log(start_date,end_date);
                $('#custom_date').hide();
                $('.inside,.inside_').show();
                $('.error_massage').hide();
                dynamic_TotalData([160,35,30,45,50,15],main_fieldSet,main_colorSet);
                LeftPieChart([35,45,40,25],kyc_color_set,kyc_label_set,`All Kyc DataSheet Between ${start_date} and ${end_date}`);
                RightPieChart([50,30,25],gender_color_set,gender_label_set,`All Kyc DataSheet Between ${start_date} and ${end_date}`);
                BottomBarChart([40,25,25,15,15],barchart_color_set,kyc_barchart_label,`All Kyc DataSheet Between ${start_date} and ${end_date}`);
            }
        })
    </script>
    <!-- end of JS script for data manupulation -->
</body>
</html>
