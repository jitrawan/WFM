<?PHP
############ DATABASE CONNECTION #################
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "wfm";
$connect = @mysql_connect($host, $user, $pass,true) or die(mysql_error());
//$connect = mysqli_connect($host, $user, $pass, $dbname);
$data = mysql_query($dbname);
$objDB = mysql_select_db($dbname,$connect)or die(mysql_error());

mysql_query("SET NAMES UTF8");
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
setlocale(LC_ALL, 'th_TH');

############ GENERAL SETTING ######################
$title = "Working Formula Online";
$version = "?version=1";
?>