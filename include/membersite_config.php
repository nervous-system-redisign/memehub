<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('memehub.gear.host');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('jacob.papiez@hotmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'ftp.gear.host',
                      /*username*/'memehub\$memehub',
                      /*password*/'KvhFBGA4QkdisgNDa2SL1jllvPRJ0twXZ5zscijbkHba4aqrKuSboDPPF8ia',
                      /*database name*/'memehubaccounts',
                      /*table name*/'fgusers3');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>