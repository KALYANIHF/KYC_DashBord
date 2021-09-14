-- get total_kyc data;
select count(*) from kyc_table;
-- get total self kyc
select count(*) from kyc_table where kyc_type = 'self';
-- get total shg kyc
select count(*) from kyc_table where kyc_type = 'shg';
-- get total mfg kyc
select count(*) from kyc_table where kyc_type = 'mfg';
-- get total jlg kyc
select count(*) from kyc_table where kyc_type = 'jlg';