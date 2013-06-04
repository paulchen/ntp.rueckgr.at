<?php
echo '<?xml version="1.0" ?>';
$hostname = trim(`hostname`);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="application/xhtml; charset=UTF-8" />
		<meta http-equiv="refresh" content="60;stats.html" />
		<title>ntp.rueckgr.at - Statistics</title>

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
		<h1>ntp.rueckgr.at - Statistics</h1>

		<div><b>ntp1.rueckgr.at:</b></div>

		<ul>
			<li><a href="#ntp1_offset">NTP time offset</a></li>
			<li><a href="#ntp1_bytes_v4">NTP byte traffic (IPv4)</a></li>
			<li><a href="#ntp1_bytes_v6">NTP byte traffic (IPv6)</a></li>
			<li><a href="#ntp1_packets">NTP packet traffic (all protocols)</a></li>
			<li><a href="#ntp1_packets_v4">NTP packet traffic (IPv4)</a></li>
			<li><a href="#ntp1_packets_v6">NTP packet traffic (IPv6)</a></li>
			<?php if($hostname == 'alpha'): ?>
				<li><a href="#upstream">Upstream servers</a></li>
				<li><a href="#uptime">Current uptime</a></li>
			<?php endif; ?>
		</ul>

		<div><b>ntp2.rueckgr.at:</b></div>

		<ul>
			<li><a href="#ntp2_offset">NTP time offset</a></li>
			<li><a href="#ntp2_bytes_v4">NTP byte traffic (IPv4)</a></li>
			<li><a href="#ntp2_bytes_v6">NTP byte traffic (IPv6)</a></li>
			<li><a href="#ntp2_packets">NTP packet traffic (all protocols)</a></li>
			<li><a href="#ntp2_packets_v4">NTP packet traffic (IPv4)</a></li>
			<li><a href="#ntp2_packets_v6">NTP packet traffic (IPv6)</a></li>
			<?php if($hostname != 'alpha'): ?>
				<li><a href="#upstream">Upstream servers</a></li>
				<li><a href="#uptime">Current uptime</a></li>
			<?php endif; ?>
		</ul>

		<hr />

		<h2>ntp1.rueckgr.at</h2>

		<h3><a id="ntp1_offset"></a>NTP time offset</h3>
		<div>
			<table>
				<tr>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_offset-day.png" alt="NTP time offset - by day" />
					</td>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_offset-week.png" alt="NTP time offset - by week" />
					</td>
				</tr>
				<tr>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_offset-month.png" alt="NTP time offset - by month" />
					</td>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_offset-year.png" alt="NTP time offset - by year" />
					</td>
				</tr>
			</table>
		</div>

		<h3><a id="ntp1_bytes_v4"></a>NTP byte traffic (IPv4)</h3>
		<div>
			<table>
				<tr>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_bytes_v4-day.png" alt="NTP byte traffic (IPv4) - by day" />
					</td>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_bytes_v4-week.png" alt="NTP byte traffic (IPv4) - by week" />
					</td>
				</tr>
				<tr>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_bytes_v4-month.png" alt="NTP byte traffic (IPv4) - by month" />
					</td>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_bytes_v4-year.png" alt="NTP byte traffic (IPv4) - by year" />
					</td>
				</tr>
			</table>
		</div>

		<h3><a id="ntp1_bytes_v6"></a>NTP byte traffic (IPv6)</h3>

		<div>
			<table>
				<tr>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_bytes_v6-day.png" alt="NTP byte traffic (IPv6) - by day" />
					</td>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_bytes_v6-week.png" alt="NTP byte traffic (IPv6) - by week" />
					</td>
				</tr>
				<tr>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_bytes_v6-month.png" alt="NTP byte traffic (IPv6) - by month" />
					</td>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_bytes_v6-year.png" alt="NTP packet traffic (IPv6) - by year" />
					</td>
				</tr>
			</table>
		</div>

		<h3><a id="ntp1_packets"></a>NTP packet traffic (all protocols)</h3>
		<div>
			<table>
				<tr>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_packets-day.png" alt="NTP packet traffic - by day" />
					</td>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_packets-week.png" alt="NTP packet traffic - by week" />
					</td>
				</tr>
				<tr>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_packets-month.png" alt="NTP packet traffic - by month" />
					</td>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_packets-year.png" alt="NTP packet traffic - by year" />
					</td>
				</tr>
			</table>
		</div>

		<h3><a id="ntp1_packets_v4"></a>NTP packet traffic (IPv4)</h3>
		<div>
			<table>
				<tr>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_packets_v4-day.png" alt="NTP packet traffic (IPv4) - by day" />
					</td>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_packets_v4-week.png" alt="NTP packet traffic (IPv4) - by week" />
					</td>
				</tr>
				<tr>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_packets_v4-month.png" alt="NTP packet traffic (IPv4) - by month" />
					</td>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_packets_v4-year.png" alt="NTP packet traffic (IPv4) - by year" />
					</td>
				</tr>
			</table>
		</div>

		<h3><a id="ntp1_packets_v6"></a>NTP packet traffic (IPv6)</h3>

		<div>
			<table>
				<tr>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_packets_v6-day.png" alt="NTP packet traffic (IPv6) - by day" />
					</td>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_packets_v6-week.png" alt="NTP packet traffic (IPv6) - by week" />
					</td>
				</tr>
				<tr>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_packets_v6-month.png" alt="NTP packet traffic (IPv6) - by month" />
					</td>
					<td>
						<img src="/graphs/alpha.rueckgr.at/ntp_packets_v6-year.png" alt="NTP packet traffic (IPv6) - by year" />
					</td>
				</tr>
			</table>
		</div>

		<?php if($hostname == 'beta'): ?>
			<h3><a id="upstream"></a>Upstream servers (ntp1.rueckgr.at)</h3>
			<div>
				<pre>
<?php system('ntpq -pn'); ?>
				</pre>
			</div>

			<hr />

			<h3><a id="uptime"></a>Current uptime (ntp1.rueckgr.at)</h3>
			<div>
				<pre>
<?php system('uptime'); ?>
				</pre>
			</div>
		<?php endif; ?>

		<hr />

		<h2>ntp2.rueckgr.at</h2>

		<h3><a id="ntp2_offset"></a>NTP time offset</h3>
		<div>
			<table>
				<tr>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_offset-day.png" alt="NTP time offset - by day" />
					</td>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_offset-week.png" alt="NTP time offset - by week" />
					</td>
				</tr>
				<tr>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_offset-month.png" alt="NTP time offset - by month" />
					</td>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_offset-year.png" alt="NTP time offset - by year" />
					</td>
				</tr>
			</table>
		</div>

		<h3><a id="ntp2_bytes_v4"></a>NTP byte traffic (IPv4)</h3>
		<div>
			<table>
				<tr>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_bytes_v4-day.png" alt="NTP byte traffic (IPv4) - by day" />
					</td>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_bytes_v4-week.png" alt="NTP byte traffic (IPv4) - by week" />
					</td>
				</tr>
				<tr>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_bytes_v4-month.png" alt="NTP byte traffic (IPv4) - by month" />
					</td>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_bytes_v4-year.png" alt="NTP byte traffic (IPv4) - by year" />
					</td>
				</tr>
			</table>
		</div>

		<h3><a id="ntp2_bytes_v6"></a>NTP byte traffic (IPv6)</h3>

		<div>
			<table>
				<tr>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_bytes_v6-day.png" alt="NTP byte traffic (IPv6) - by day" />
					</td>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_bytes_v6-week.png" alt="NTP byte traffic (IPv6) - by week" />
					</td>
				</tr>
				<tr>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_bytes_v6-month.png" alt="NTP byte traffic (IPv6) - by month" />
					</td>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_bytes_v6-year.png" alt="NTP packet traffic (IPv6) - by year" />
					</td>
				</tr>
			</table>
		</div>

		<h3><a id="ntp2_packets"></a>NTP packet traffic (all protocols)</h3>
		<div>
			<table>
				<tr>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_packets-day.png" alt="NTP packet traffic - by day" />
					</td>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_packets-week.png" alt="NTP packet traffic - by week" />
					</td>
				</tr>
				<tr>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_packets-month.png" alt="NTP packet traffic - by month" />
					</td>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_packets-year.png" alt="NTP packet traffic - by year" />
					</td>
				</tr>
			</table>
		</div>

		<h3><a id="ntp2_packets_v4"></a>NTP packet traffic (IPv4)</h3>
		<div>
			<table>
				<tr>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_packets_v4-day.png" alt="NTP packet traffic (IPv4) - by day" />
					</td>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_packets_v4-week.png" alt="NTP packet traffic (IPv4) - by week" />
					</td>
				</tr>
				<tr>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_packets_v4-month.png" alt="NTP packet traffic (IPv4) - by month" />
					</td>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_packets_v4-year.png" alt="NTP packet traffic (IPv4) - by year" />
					</td>
				</tr>
			</table>
		</div>

		<h3><a id="ntp2_packets_v6"></a>NTP packet traffic (IPv6)</h3>

		<div>
			<table>
				<tr>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_packets_v6-day.png" alt="NTP packet traffic (IPv6) - by day" />
					</td>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_packets_v6-week.png" alt="NTP packet traffic (IPv6) - by week" />
					</td>
				</tr>
				<tr>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_packets_v6-month.png" alt="NTP packet traffic (IPv6) - by month" />
					</td>
					<td>
						<img src="/graphs/gamma.rueckgr.at/ntp_packets_v6-year.png" alt="NTP packet traffic (IPv6) - by year" />
					</td>
				</tr>
			</table>
		</div>
		<?php if($hostname == 'alpha'): ?>
			<h3><a id="upstream"></a>Upstream servers (ntp1.rueckgr.at)</h3>
		<?php else: ?>
			<h3><a id="upstream"></a>Upstream servers (ntp2.rueckgr.at)</h3>
		<?php endif; ?>
		<div>
			<pre>
<?php system('ntpq -pn'); ?>
			</pre>
		</div>

		<hr />

		<?php if($hostname == 'alpha'): ?>
			<h3><a id="uptime"></a>Current uptime (ntp1.rueckgr.at)</h3>
		<?php else: ?>
			<h3><a id="uptime"></a>Current uptime (ntp2.rueckgr.at)</h3>
		<?php endif; ?>
		<div>
			<pre>
<?php system('uptime'); ?>
			</pre>
		</div>

		<hr />

		<div>
			<a href="index.html">Back to the index page</a>

			<br /><br />
		</div>

		<div>
			<a href="http://validator.w3.org/check?uri=referer">
				<img src="valid-xhtml11-blue.png" alt="Valid XHTML 1.1" height="31" width="88" />
			</a>

			<br /><br />
			<i><a href="mailto:ntp@rueckgr.at">Paul Staroch</a></i>
		</div>
	</body>
</html>


