<?php
// include "../config/config.php";
include 'conn.php';
// $staff_id=verifyAutho();
$requestData = $_REQUEST;
include './kyc_dashbord_functions.php';
if ($requestData['flag_type1'] == 1 && $requestData['flag_type2'] == 1 && $requestData['flag_type3'] == 1) {
    // YTD Data
    all_kyc_count($conn,$requestData['flag_type1'],date("y-m-d"),$requestData['start_date'],$requestData['end_date']);
    approve_reject_pending_seekClarifiaction($conn,$requestData['flag_type1'],date("y-m-d"),$requestData['start_date'],$requestData['end_date']);
    Kyc_By_Gender($conn,$requestData['flag_type1'],date("y-m-d"),$requestData['start_date'],$requestData['end_date']);
}
if ($requestData['flag_type1'] == 2 && $requestData['flag_type2'] == 1 && $requestData['flag_type3'] == 1) {
    // Today Data
    all_kyc_count($conn,$requestData['flag_type1'],date("y-m-d"),$requestData['start_date'],$requestData['end_date']);
}
if ($requestData['flag_type1'] == 3) {
    // last 1 Week
    // echo "this data is for last 1 week";
    all_kyc_count($conn,$requestData['flag_type1'],date("y-m-d"),$requestData['start_date'],$requestData['end_date']);
}
if ($requestData['flag_type1'] == 4) {
    // last 1 Month
    // echo "this data is for last 1 Month";
    all_kyc_count($conn,$requestData['flag_type1'],date("y-m-d"),$requestData['start_date'],$requestData['end_date']);
}
if ($requestData['flag_type1'] == 5) {
    // last 6 Month
    // echo "this data is for last 6 Month";
    all_kyc_count($conn,$requestData['flag_type1'],date("y-m-d"),$requestData['start_date'],$requestData['end_date']);
}
if ($requestData['flag_type1'] == 6) {
    // last 1 Year
    // echo "this data is for last 1 Year";
    all_kyc_count($conn,$requestData['flag_type1'],date("y-m-d"),$requestData['start_date'],$requestData['end_date']);
}
if ($requestData['flag_type1'] == 7) {
    // custom date
    // echo "this data is for Custom date";
    all_kyc_count($conn,$requestData['flag_type1'],date("y-m-d"),$requestData['start_date'],$requestData['end_date']);
}
?>