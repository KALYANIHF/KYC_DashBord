<?php
    // all the flages
    // ==============
        /*time flag*/
    // ==============
    $today = "date(created_at) = current_date";
    $last_week = "week(created_at) = week(now())-1";
    $last_month = "created_at> now() - INTERVAL 1 month";
    $last_6_month = "created_at> now() - INTERVAL 6 month";
    $last_1_year = "created_at> now() - INTERVAL 12 month";
    // $custom_date = "select * from kyc_table where (DATE(created_at) BETWEEN '".2021-09-13."' AND '".2021-09-14.'")";
    $custom_date = "(DATE(created_at) BETWEEN '".$start_date."' AND '".$end_date."')";
    // =================
      /* time flag end*/
    // =================
    ## all the kyc type
    $kyc_type = ['self','shg','mfg','or','jlg'];