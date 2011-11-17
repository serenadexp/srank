<?php header("Content-Type: application/rss+xml; charset=ISO-8859-1");
DEFINE ('DB_USER','root');
DEFINE ('DB_PASSWORD','root');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','srank');

$rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
$rssfeed = '<rss version="2.0">';
$rssfeed = '<channel>';
$rssfeed = '<title>My Rss feed</title>';
$rssfeed = '<link>http://localhost:8888/CodeIgniter/index.php/home</link>';
$rssfeed = '<descrption>This is an example RSS feed</description>';
$rssfeed = '<language>en-us</language>';
$rssfeed = '<copyright>Copyright (C)2011</copyright>';

$connection =@mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)
 or die('Could not select database');
 mysql_select_db(DB_NAME)
 or die ('Could not select database');
 
 $query = "SELECT * FROM membership ";
 $result = mysql_query($query) or die ("Could not excute query");
 
 while($row = mysql_fetch_array($result)){
 	extract($row);
 	
 	$rssfeed .='<item>';
 	$rssfeed .='<title>' . $title .'</title>';
 	$rssfeed .='<description>' .$description . '</description>';
	$rssfeed .='<link>' .$link . '</link>';
	$rssfeed .='<pubDate>' . date("D,d M Y H:i:s O", strtotime($date)) .'</pubDate>';
 	$rssfeed .='</item>';
 
 }
 $rssfeed .='</channel>';
 $rssfeed .='</rss>';
 
 echo $rssfeed;
?>