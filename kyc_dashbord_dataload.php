<?php
// include "../config/config.php";
include 'conn.php';
// $staff_id=verifyAutho();
$requestData = $_REQUEST;
include './kyc_dashbord_functions.php';
if ($requestData['flag_type1'] == 1) {
    // YTD Data
    all_kyc_count($conn,date("y-m-d"),$requestData['start_date'],$requestData['end_date']);
}
elseif ($requestData['flag_type1'] == 2) {
    // Today Data
    echo "this data is for TODAY";
}
elseif ($requestData['flag_type1'] == 3) {
    // last 1 Week
    echo "this data is for last 1 week";
}
elseif ($requestData['flag_type1'] == 4) {
    // last 1 Month
    echo "this data is for last 1 Month";
}
elseif ($requestData['flag_type1'] == 5) {
    // last 6 Month
    echo "this data is for last 6 Month";
}
elseif ($requestData['flag_type1'] == 6) {
    // last 1 Year
    echo "this data is for last 1 Year";
}
elseif ($requestData['flag_type1'] == 7) {
    // custom date
    echo "this data is for Custom date";
}
?>