<?php

        // define a function to count all type of kyc
        function all_kyc_count($conn,$check_flag,$timeflag,$start_date,$end_date){

        include './flags.php';

        if ($check_flag == 1) {
            $data = [];
            $sql = "select * from kyc_table";
            $result = mysqli_query($conn,$sql);
            array_push($data,$result->num_rows);

            // loop through all the kyc type
            foreach ($kyc_type as $kyc) {
                $sql = "select * from kyc_table where kyc_type= '".$kyc."'";
                $result = mysqli_query($conn,$sql);
                array_push($data,$result->num_rows);
            }

            // send back the data
            echo json_encode($data);
        }
        if ($check_flag == 2) {
            $data = [];
            $sql = "select * from kyc_table where ".$today;
            $result = mysqli_query($conn,$sql);
            array_push($data,$result->num_rows);

            // loop through all the kyc type
            foreach ($kyc_type as $kyc) {
                $sql = "select * from kyc_table where kyc_type= '".$kyc."' and ".$today."";
                $result = mysqli_query($conn,$sql);
                array_push($data,$result->num_rows);
            }

            // send back the data
            echo json_encode($data);
        }
        if ($check_flag == 3) {
            $data = [];
            $sql = "select * from kyc_table where ".$last_week;
            $result = mysqli_query($conn,$sql);
            array_push($data,$result->num_rows);

            // loop through all the kyc type
            foreach ($kyc_type as $kyc) {
                $sql = "select * from kyc_table where kyc_type= '".$kyc."' and ".$last_week."";
                $result = mysqli_query($conn,$sql);
                array_push($data,$result->num_rows);
            }

            // send back the data
            echo json_encode($data);
        }
        if ($check_flag == 4) {
            $data = [];
            $sql = "select * from kyc_table where ".$last_month;
            $result = mysqli_query($conn,$sql);
            array_push($data,$result->num_rows);

            // loop through all the kyc type
            foreach ($kyc_type as $kyc) {
                $sql = "select * from kyc_table where kyc_type= '".$kyc."' and ".$last_month."";
                $result = mysqli_query($conn,$sql);
                array_push($data,$result->num_rows);
            }

            // send back the data
            echo json_encode($data);
        }
        if ($check_flag == 5) {
            $data = [];
            $sql = "select * from kyc_table where ".$last_6_month;
            $result = mysqli_query($conn,$sql);
            array_push($data,$result->num_rows);

            // loop through all the kyc type
            foreach ($kyc_type as $kyc) {
                $sql = "select * from kyc_table where kyc_type= '".$kyc."' and ".$last_6_month."";
                $result = mysqli_query($conn,$sql);
                array_push($data,$result->num_rows);
            }

            // send back the data
            echo json_encode($data);
        }
        if ($check_flag == 6) {
            $data = [];
            $sql = "select * from kyc_table where ".$last_1_year;
            $result = mysqli_query($conn,$sql);
            array_push($data,$result->num_rows);

            // loop through all the kyc type
            foreach ($kyc_type as $kyc) {
                $sql = "select * from kyc_table where kyc_type= '".$kyc."' and ".$last_1_year."";
                $result = mysqli_query($conn,$sql);
                array_push($data,$result->num_rows);
            }

            // send back the data
            echo json_encode($data);
        }
        if ($check_flag == 7) {
            $data = [];
            $sql = "select * from kyc_table where ".$custom_date;
            $result = mysqli_query($conn,$sql);
            array_push($data,$result->num_rows);

            // loop through all the kyc type
            foreach ($kyc_type as $kyc) {
                $sql = "select * from kyc_table where kyc_type= '".$kyc."' AND ".$custom_date."";
                $result = mysqli_query($conn,$sql);
                array_push($data,$result->num_rows);
            }

            // send back the data
            echo json_encode($data);
        }
}

// left pie chart accroding to the filter and flag
// break the data accroding to the 
/*
 1. approve
 2. reject
 3. pending
 4. seek clarification
*/
function approve_reject_pending_seekClarifiaction($conn,$check_flag,$timeflag,$start_date,$end_date){
    // first declare a empty array which will contain all the data values and return it (here mean echo).
    include './flags.php';
    if ($check_flag == 1) {
        $data = [];
        // for all kyc
        // YTD
        $sql = $approve;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $reject;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $pending;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $seek_con;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        echo json_encode($data);
    }
    if ($check_flag == 2) {
        $data = [];
        // today
        // for all kyc
        // $approve, $reject, $pending, $seek_con is coming from the flag.php (reson of making -- reduce the repitation of code)
        $sql = $approve." and ".$today;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $reject ." and ". $today;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $pending ." and ". $today;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $seek_con ." and ". $today;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        echo json_encode($data);
    }
    if ($check_flag == 3) {
        $data = [];
        // for all kyc
        // last week
        // $approve, $reject, $pending, $seek_con is coming from the flag.php (reson of making -- reduce the repitation of code)
        $sql = $approve." and ".$last_week;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $reject ." and ". $last_week;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $pending ." and ". $last_week;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $seek_con ." and ". $last_week;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        echo json_encode($data);
    }
    if ($check_flag == 4) {
        $data = [];
        // for all kyc
        // last 1 month
        // $approve, $reject, $pending, $seek_con is coming from the flag.php (reson of making -- reduce the repitation of code)
        $sql = $approve." and ".$last_month;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $reject ." and ". $last_month;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $pending ." and ". $last_month;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $seek_con ." and ". $last_month;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        echo json_encode($data);
    }
    if ($check_flag == 5) {
        $data = [];
        // for all kyc
        // last 6 month
        // $approve, $reject, $pending, $seek_con is coming from the flag.php (reson of making -- reduce the repitation of code)
        $sql = $approve." and ".$last_6_month;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $reject ." and ". $last_6_month;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $pending ." and ". $last_6_month;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $seek_con ." and ". $last_6_month;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        echo json_encode($data);
    }
    if ($check_flag == 6) {
        $data = [];
        // for all kyc
        // last 1 year
        // $approve, $reject, $pending, $seek_con is coming from the flag.php (reson of making -- reduce the repitation of code)
        $sql = $approve." and ".$last_1_year;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $reject ." and ". $last_1_year;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $pending ." and ". $last_1_year;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $seek_con ." and ". $last_1_year;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        echo json_encode($data);
    }
    if ($check_flag == 7) {
        $data = [];
        // for all kyc
        // custom date
        // $approve, $reject, $pending, $seek_con is coming from the flag.php (reson of making -- reduce the repitation of code)
        $sql = $approve." and ".$custom_date;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $reject ." and ". $custom_date;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $pending ." and ". $custom_date;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $seek_con ." and ". $custom_date;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        echo json_encode($data);
    }
}

// split data accroding to the gender
function Kyc_By_Gender($conn,$check_flag,$timeflag,$start_date,$end_date){
    include './flags.php';
    if ($check_flag == 1) {
        $data = [];
        // for all kyc
        // YTD
        $sql = $gender_male;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $gender_female;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $gender_trans;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        echo json_encode($data);
    }
    if ($check_flag == 2) {
        $data = [];
        // for all kyc
        // today
        $sql = $gender_male." and ". $today;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $gender_female." and ".$today;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $gender_trans." and ".$today;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        echo json_encode($data);
    }
    if ($check_flag == 3) {
        $data = [];
        // for all kyc
        // last week
        $sql = $gender_male." and ". $last_week;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $gender_female." and ".$last_week;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $gender_trans." and ".$last_week;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        echo json_encode($data);
    }
    if ($check_flag == 4) {
        $data = [];
        // for all kyc
        // last month
        $sql = $gender_male." and ". $last_month;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $gender_female." and ".$last_month;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $gender_trans." and ".$last_month;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        echo json_encode($data);
    }
    if ($check_flag == 5) {
        $data = [];
        // for all kyc
        // last 6 month
        $sql = $gender_male." and ". $last_6_month;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $gender_female." and ".$last_6_month;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $gender_trans." and ".$last_6_month;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        echo json_encode($data);
    }
    if ($check_flag == 6) {
        $data = [];
        // for all kyc
        // last 1 year
        $sql = $gender_male." and ". $last_1_year;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $gender_female." and ".$last_1_year;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $gender_trans." and ".$last_1_year;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        echo json_encode($data);
    }
    if ($check_flag == 7) {
        $data = [];
        // for all kyc
        // custom date
        $sql = $gender_male." and ". $custom_date;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);
        $sql = $gender_female." and ".$custom_date;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);

        $sql = $gender_trans." and ".$custom_date;
        $result = mysqli_query($conn,$sql);
        array_push($data,$result->num_rows);
        echo json_encode($data);
    }
    
}