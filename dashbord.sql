/*
==========================================================
   All the KYC Count query accroding to timeflag total KYC
==========================================================
*/
-- get the total kyc data
select * from kyc_table;
-- get the data for today
select * from kyc_table where date(created_at) = current_date;
-- get last week data
select * from kyc_table where week(created_at) = week(now())-1;
-- get last month data
select * from kyc_table where created_at> now() - INTERVAL 1 month;
-- get last 6 month data
select * from kyc_table where created_at> now() - INTERVAL 6 month;
-- get last 1 year data
select * from kyc_table where created_at> now() - INTERVAL 12 month;
-- get data between custom date
select * from kyc_table where (DATE(created_at) BETWEEN '2021-09-13' AND '2021-09-14');  

/*
====================================================================================================
   All the KYC Count querys Split into (approved,reject,pending,seek Clerification) ## for total_KYC
====================================================================================================
*/

-- get the total kyc data (which is approve)
select * from kyc_table where status = 'approve';
select * from kyc_table where status = 'reject';
select * from kyc_table where status = 'pending';
select * from kyc_table where status = 'seek_con';

-- get the data for today
select * from kyc_table where date(created_at) = current_date and status ='approve';
select * from kyc_table where date(created_at) = current_date and status ='reject';
select * from kyc_table where date(created_at) = current_date and status ='pending';
select * from kyc_table where date(created_at) = current_date and status ='seek_con';

-- get last week data
select * from kyc_table where week(created_at) = week(now())-1 and status='approve';
select * from kyc_table where week(created_at) = week(now())-1 and status='reject';
select * from kyc_table where week(created_at) = week(now())-1 and status='pending';
select * from kyc_table where week(created_at) = week(now())-1 and status='seek_con';

-- get last month data
select * from kyc_table where month(created_at) = month(now())-1 and status='approve';
select * from kyc_table where month(created_at) = month(now())-1 and status='reject';
select * from kyc_table where month(created_at) = month(now())-1 and status='pending';
select * from kyc_table where month(created_at) = month(now())-1 and status='seek_con';

-- get last 6 month data
select * from kyc_table where created_at> now() - INTERVAL 6 month and status='approve';
select * from kyc_table where created_at> now() - INTERVAL 6 month and status='reject';
select * from kyc_table where created_at> now() - INTERVAL 6 month and status='pending';
select * from kyc_table where created_at> now() - INTERVAL 6 month and status='seek_con';

-- get last 12 month data
select * from kyc_table where created_at> now() - INTERVAL 12 month and status='approve';
select * from kyc_table where created_at> now() - INTERVAL 12 month and status='reject';
select * from kyc_table where created_at> now() - INTERVAL 12 month and status='pending';
select * from kyc_table where created_at> now() - INTERVAL 12 month and status='seek_con';

-- get data between two custom date
select * from kyc_table where (DATE(created_at) BETWEEN '2021-09-13' AND '2021-09-14') and status='approve';
select * from kyc_table where (DATE(created_at) BETWEEN '2021-09-13' AND '2021-09-14') and status='reject';
select * from kyc_table where (DATE(created_at) BETWEEN '2021-09-13' AND '2021-09-14') and status='pending';
select * from kyc_table where (DATE(created_at) BETWEEN '2021-09-13' AND '2021-09-14') and status='seek_con';


/*
============================================================================================
   All the KYC Count querys Split into (approved,reject,pending,seek Clerification) for SELF
============================================================================================
*/

-- get the total kyc data (which is approve)
select * from kyc_table where status = 'approve' and kyc_type='self';
select * from kyc_table where status = 'reject' and kyc_type='self';
select * from kyc_table where status = 'pending' and kyc_type='self';
select * from kyc_table where status = 'seek_con' and kyc_type='self';

-- get the data for today
select * from kyc_table where date(created_at) = current_date and status ='approve' and kyc_type='self';
select * from kyc_table where date(created_at) = current_date and status ='reject' and kyc_type='self';
select * from kyc_table where date(created_at) = current_date and status ='pending' and kyc_type='self';
select * from kyc_table where date(created_at) = current_date and status ='seek_con' and kyc_type='self';

-- get last week data
select * from kyc_table where week(created_at) = week(now())-1 and status='approve' and kyc_type='self';
select * from kyc_table where week(created_at) = week(now())-1 and status='reject' and kyc_type='self';
select * from kyc_table where week(created_at) = week(now())-1 and status='pending' and kyc_type='self';
select * from kyc_table where week(created_at) = week(now())-1 and status='seek_con' and kyc_type='self';

-- get last month data
select * from kyc_table where month(created_at) = month(now())-1 and status='approve' and kyc_type='self';
select * from kyc_table where month(created_at) = month(now())-1 and status='reject' and kyc_type='self';
select * from kyc_table where month(created_at) = month(now())-1 and status='pending' and kyc_type='self';
select * from kyc_table where month(created_at) = month(now())-1 and status='seek_con' and kyc_type='self';

-- get last 6 month data
select * from kyc_table where created_at> now() - INTERVAL 6 month and status='approve' and kyc_type='self';
select * from kyc_table where created_at> now() - INTERVAL 6 month and status='reject' and kyc_type='self';
select * from kyc_table where created_at> now() - INTERVAL 6 month and status='pending' and kyc_type='self';
select * from kyc_table where created_at> now() - INTERVAL 6 month and status='seek_con' and kyc_type='self';

-- get last 12 month data
select * from kyc_table where created_at> now() - INTERVAL 12 month and status='approve' and kyc_type='self';
select * from kyc_table where created_at> now() - INTERVAL 12 month and status='reject' and kyc_type='self';
select * from kyc_table where created_at> now() - INTERVAL 12 month and status='pending' and kyc_type='self';
select * from kyc_table where created_at> now() - INTERVAL 12 month and status='seek_con' and kyc_type='self';

-- get data between two custom date
select * from kyc_table where (DATE(created_at) BETWEEN '2021-09-13' AND '2021-09-14') and status='approve' and kyc_type='self';
select * from kyc_table where (DATE(created_at) BETWEEN '2021-09-13' AND '2021-09-14') and status='reject' and kyc_type='self';
select * from kyc_table where (DATE(created_at) BETWEEN '2021-09-13' AND '2021-09-14') and status='pending' and kyc_type='self';
select * from kyc_table where (DATE(created_at) BETWEEN '2021-09-13' AND '2021-09-14') and status='seek_con' and kyc_type='self';

/*
============================================================================================
  All the KYC Count querys Split into (approved,reject,pending,seek Clerification) for SHG
============================================================================================
*/