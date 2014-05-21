<?php
include('admin/config.php');

function getContent($contentName) {
$query= "SELECT * FROM content WHERE content_name='". $contentName."';";
	$result = mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
            if ($row) {
                $content_text = $row['content_text'];
			}
	echo htmlspecialchars_decode($content_text, ENT_NOQUOTES);		
}
?>