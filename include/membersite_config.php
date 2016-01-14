<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('jelletd163.163.axc.nl/Frendr');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('j.kiers@student.tue.nl');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'localhost',
                      /*username*/'jelletd163_user',
                      /*password*/'jellek95',
                      /*database name*/'jelletd163_frendr',
                      /*table name*/'accounts');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>