<?php
function strip_html($input) {
	return preg_replace('/<\/?[^>]+>/', '', $input);
}

function truncate($input, $maxlength) {
	$output = $input;

	while(mb_strpos($output, ' ', 0, 'UTF-8') !== false && mb_strlen($output, 'UTF-8') > $maxlength) {
		$output = mb_substr($output, 0, mb_strrpos($output, ' ', 0, 'UTF-8'), 'UTF-8');
	}
	if($input != $output) {
		$output .= ' ...';
	}

	return $output;
}

require_once('config.php');

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

$mysqli->query("SET NAMES 'utf8'");
$mysqli->query("SET CHARACTER SET 'utf8'");

$result = $mysqli->query('SELECT UNIX_TIMESTAMP(online_date) date, text FROM news ORDER BY online_date DESC, news_id DESC LIMIT 0, 10');
if(!$result) {
	die('Database error.');
}
else {
	$max_date = 0;
	$items = array();
	while($news = $result->fetch_object()) {
		$items[] = array(
				'title' => truncate(strip_html($news->text), 50),
				'guid' => md5($news->text . $news->date),
				'pub_date' => date('D, d M Y H:i:s O', $news->date),
				'text' => $news->text
			);

		if($news->date > $max_date) {
			$max_date = $news->date;
		}
	}

	$pub_date = date('D, d M Y H:i:s O', $max_date);

	$result->close();
}
$mysqli->close();

header('Content-Type: application/rss+xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';

?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel>
		<atom:link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/rss.xml" rel="self" type="application/rss+xml" />
		<title>ntp.rueckgr.at :: News</title>
		<link>http://ntp.rueckgr.at/</link>
		<description>ntp.rueckgr.at</description>
		<language>en-us</language>
		<pubDate><?php echo $pub_date; ?></pubDate>
		<?php foreach($items as $item): ?>

		<item>
			<title><?php echo $item['title']; ?></title>
			<link>http://ntp.rueckgr.at/</link>
			<guid isPermaLink="false"><?php echo $item['guid']; ?></guid>
			<description><![CDATA[<?php echo $item['text']; ?>]]></description>
			<pubDate><?php echo $item['pub_date']; ?></pubDate>
			<author>ntp@rueckgr.at (Paul Staroch)</author>
		</item>

		<?php endforeach; ?>
	</channel>
</rss>

