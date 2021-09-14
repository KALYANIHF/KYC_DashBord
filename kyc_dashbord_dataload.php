<?php
include "../config/config.php";
$staff_id=verifyAutho();
$requestData = $_REQUEST;
$data = [];
if ($requestData['flag_type1'] == 1) {
    // total kyc
    $sql = "select * from kyc_master";
    $result=dBConnect($sql);
    array_push($data,pg_NumRows($result));
    // total self
    $sql = "select * from kyc_master where lower(kyc_type)='sa'";
    $result=dBConnect($sql);
    array_push($data,pg_NumRows($result));
    // total shg
    $sql = "select * from kyc_master where lower(kyc_type)='shg'";
    $result=dBConnect($sql);
    array_push($data,pg_NumRows($result));
    // total mfg
    $sql = "select * from kyc_master where lower(kyc_type)='mfg'";
    $result=dBConnect($sql);
    array_push($data,pg_NumRows($result));
    // total organization
    $sql = "select * from kyc_master where lower(kyc_type)='or'";
    $result=dBConnect($sql);
    array_push($data,pg_NumRows($result));
    // total jlg
    $sql = "select * from kyc_master where lower(kyc_type)='jlg'";
    $result=dBConnect($sql);
    array_push($data,pg_NumRows($result));
    // print all the data value which is store in the data array
    echo json_encode($data);
    // echo $sql;
    // echo $result;
    // echo "total Kyc ". pg_NumRows($result);
}elseif ($requestData['flag_type1'] == 2) {
    echo "this data is for YTD";
} else {
    echo "no data is found";
}
?>