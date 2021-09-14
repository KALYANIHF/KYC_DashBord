<?php
// include "../config/config.php";
include 'conn.php';
// $staff_id=verifyAutho();
$requestData = $_REQUEST;
// define a function to count all type of kyc
function all_kyc_count($conn,$timeflag){
    // total kyc
    $data = [];
    $sql = "select * from kyc_table";
    $result = mysqli_query($conn,$sql);
    array_push($data,$result->num_rows);

    // total self
    $sql = "select * from kyc_table where kyc_type='self'";
    $result = mysqli_query($conn,$sql);
    array_push($data,$result->num_rows);

    // total shg
    $sql = "select * from kyc_table where kyc_type='shg'";
    $result = mysqli_query($conn,$sql);
    array_push($data,$result->num_rows);

    // total mfg
    $sql = "select * from kyc_table where kyc_type='mfg'";
    $result = mysqli_query($conn,$sql);
    array_push($data,$result->num_rows);

    // total organization
    $sql = "select * from kyc_table where kyc_type='or'";
    $result = mysqli_query($conn,$sql);
    array_push($data,$result->num_rows);

    // total jlg
    $sql = "select * from kyc_table where kyc_type='jlg'";
    $result = mysqli_query($conn,$sql);
    array_push($data,$result->num_rows);

    // send the data
    echo json_encode($data);
}
if ($requestData['flag_type1'] == 1) {
    all_kyc_count($conn,"ytd");
}elseif ($requestData['flag_type1'] == 2) {
    echo "this data is for YTD";
} else {
    echo "no data is found";
}
?>