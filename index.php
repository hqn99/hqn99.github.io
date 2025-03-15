<?php
//DBアクセス用の変数呼び出し
require_once('./func_pub_db.php');
$html_str = "";
//クエリ作成
$SQL_STAT = "SELECT * FROM  works ORDER BY id DESC LIMIT 5;";
//クエリ実行
$QueryObj = DB_Access($SQL_STAT);
while ($SelectALL = $QueryObj->fetch()) {
	$html_str .= "<tr>\n";
	$html_str .= "<td>" . $SelectALL['completed'] . "</td>\n";
	$html_str .= "<td><a class='php-link' href='00_det.php?id=" . $SelectALL['id'] . "'>" . $SelectALL['name'] . "を更新しました。</a></td>\n";
	$html_str .= "</tr>\n";
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Matayoshi</title>
	<link rel="stylesheet" href="./css/conf.css" type="text/css">
</head>

<body>
	<div id="wrapper">

		<header class="header">
			<center>
				<nav class="Matayoshi">
					<h4 style="margin-top: 0px;">
						<a href="index.php">Matayoshi</a>
					</h4>
				</nav>
			</center>
			<nav class="header_nav">
				<a href="page2.php">About</a>
			</nav>
			<div class="header_section">
				<center>
					<a href="page1.php" style="height: 0px;">Works</a>
					<a href="page3.php" style="height: 0px;">News</a>
					<a href="page5.php" style="height: 0px;">Grade</a>
					<a href="page4.php" style="height: 0px;">Contact</a>
				</center>
			</div>
		</header>

		<main>
			<center>
				<div id="ims">
					<center>
						<h1>「 My Portfolio 」</h1>
					</center>
				</div>
			</center>

			<div id="gazo_outer">
				<div id="gazo_inner">
					<div id="ims_but1"><a href="#">1</a></div>
					<div id="ims_but2"><a href="#">2</a></div>
					<div id="ims_but3"><a href="#">3</a></div>
					<div id="ims_but4"><a href="#">4</a></div>
					<div id="ims_but5"><a href="#">5</a></div>
					<div id="ims_but6"><a href="#">6</a></div>
					<div id="ims_but7"><a href="#">7</a></div>
					<div id="ims_but8"><a href="#">
							<center>Works</center>
						</a></div>
					<div id="ims_but9"><a href="#">9</a></div>
					<div id="ims_but10"><a href="#">10</a></div>
					<div id="ims_but11"><a href="#">11</a></div>
					<div id="ims_but12"><a href="#">12</a></div>
					<div id="ims_but13"><a href="#">13</a></div>
					<div id="ims_but14"><a href="#">14</a></div>
					<div id="ims_but15"><a href="#">15</a></div>
					<div id="ims_but16"><a href="page1.html">View more</a></div>
				</div>
			</div>

			<center>
				<h2>NEWS</h2>
				<table border="1">
					<?= $html_str; ?>
				</table>
			</center>

			<div id="square_outer">
				<div id="square_inner">
					<div id="square_but1"><a href="https://x.com/ait_creators">X</a></div>
					<div id="square_but2"><a href="https://www.instagram.com/ait.creators/">Instagram</a></div>
				</div>
			</div>
			<br>
		</main>

		<footer>Copyright(C) AIT.All rights reserved.</footer>

	</div>
</body>

</html>
