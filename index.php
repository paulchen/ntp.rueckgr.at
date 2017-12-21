<?php echo '<?xml version="1.0" ?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="application/xhtml; charset=UTF-8" />
		<title>ntp.rueckgr.at</title>

		<link rel="alternate" type="application/rss+xml" title="ntp.rueckgr.at :: News" href="rss.xml" />

		<style type="text/css">
			body {
				font-family: Arial, Verdana, Helvetica, sans-serif;
			}

			img {
				border: none;
			}
		</style>
	</head>

	<body>
		<h1>ntp.rueckgr.at</h1>

		<div>
			Welcome to ntp.rueckgr.at.

			<br /><br />

			You're probably visiting this site because you entered the URL <a href="http://pool.ntp.org">pool.ntp.org</a>.
			If you want to visit the web page of the NTP pool project, please visit <a href="http://www.pool.ntp.org">www.pool.ntp.org</a>.

			<br /><br />

			This is one of two freely available  <a href="http://en.wikipedia.org/wiki/Network_Time_Protocol">NTP</a> servers in the domain rueckgr.at
			Both servers are running <a href="http://www.debian.org/releases/squeeze/">Debian Jessie</a>.

			You are free to use any of the two servers in your NTP configuration:

			<ul>
				<li><strong>ntp1.rueckgr.at</strong>: 5.9.110.236 (IPv4), 2a01:4f8:162:51e2::2 (IPv6), stratum 2</li>
				<li><strong>ntp2.rueckgr.at</strong>: 88.99.174.22 (IPv4), 2a01:4f8:c0c:2dd::2 (IPv6), stratum 2</li>
			</ul>

			<b>ntp1</b> is a dedicated server, <b>ntp2</b> is a vserver, both
			hosted by <a href="http://www.hetzner.de/">Hetzner Online AG</a> in
			<a href="http://www.openstreetmap.org/index.html?mlat=49.45&amp;mlon=11.07&amp;zoom=10">Nuremberg, Germany</a>

			<br /><br />

			You may use the hostname <b>ntp.rueckgr.at</b> that maps to both servers.

			<br /><br />
		       	You are free to use these servers within your NTP client.
			To do so, you have to change your configuration appropriately.
			E.g., when using <a href="http://www.ntp.org/">ntpd</a> in Linux or another UNIX-like operating system, insert this line into your <code>ntpd.conf</code>:

			<br /><br />

			<code>server ntp.rueckgr.at</code>

			<br /><br />

			You may change <b>ntp.rueckgr.at</b> to <b>ntp1.rueckgr.at</b> or <b>ntp2.rueckgr.at</b> depending on which server(s) you want to use.

			<br /><br />

			Both servers also take part in the <a href="http://www.pool.ntp.org">NTP pool project</a>
			(Zones <a href="http://www.pool.ntp.org/zone/@">@</a>,
			<a href="http://www.pool.ntp.org/zone/europe">europe</a>,
			<a href="http://www.pool.ntp.org/zone/de">de</a>), <b>ntp1.rueckgr.at</b> also belongs to the
			<a href="http://www.pool.ntp.org/zone/tr">tr</a> zone.
			If you want to use this pool within your NTP client,
			follow the instructions on the page &quot;<a href="http://www.pool.ntp.org/en/use.html">How do I use pool.ntp.org?</a>&quot;.

			<br /><br />

			If you have a computer with static IP address and a stable internet connection that is not overloaded
			(bandwidth is not so important), please consider <a href="http://www.pool.ntp.org/join.html">joining the pool</a>.

			<br /><br />

			<a href="stats.html">Some stats</a> about the NTP servers.

			<br /><br />

			Mirrors of this page: <a href="//ntp1.rueckgr.at/">ntp1</a> <a href="//ntp2.rueckgr.at/">ntp2</a>
		</div>

		<hr />

		<h2>Status <a href="rss.xml" style="text-decoration: none;"><img src="rss.gif" alt="RSS" /></a></h2>

		<?php
			require_once('config.php');

			$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

			$mysqli->query("SET NAMES 'utf8'");
			$mysqli->query("SET CHARACTER SET 'utf8'");

			$result = $mysqli->query('SELECT UNIX_TIMESTAMP(online_date) date, text FROM news ORDER BY online_date DESC, news_id DESC');
			if(!$result) {
				echo '<div>Database error.</div>';
			}
			else {
				while($news = $result->fetch_object()) {
					$date = date('M j, Y', $news->date);
					$text = $news->text;

					echo "<div><strong>$date</strong> - $text</div>";
				}

				$result->close();
			}
			$mysqli->close();
		?>

		<hr />

		<div>
			<a href="http://validator.w3.org/check?uri=referer" style="text-decoration: none;">
				<img src="valid-xhtml11-blue.png" alt="Valid XHTML 1.1" height="31" width="88" />
			</a>

			<a href="http://validator.w3.org/feed/check.cgi?url=http%3A//ntp.rueckgr.at/rss.xml" style="text-decoration: none;">
				<img src="valid-rss.png" alt="Valid RSS" title="Valid RSS" />
			</a>

			<a href="http://www.hetzner.de/" style="text-decoration: none;">
				<img src="hetzner.jpg" alt="hetzner.de" />
			</a>

			<br /><br />
			<i><a href="mailto:ntp@rueckgr.at">Paul Staroch</a></i> &ndash; <a href="//rueckgr.at/">rueckgr.at</a>
		</div>
	</body>
</html>


