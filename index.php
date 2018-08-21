<!doctype html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Development</title>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/pavilion/2.0.3/pavilion.min.css" rel="stylesheet" />
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
	<style type="text/css">
		html, body {
			background: #eee;
			color: #636b6f;
			font-family: 'Source Sans Pro', sans-serif;
			margin: 0;
		}

		h1, h2, h3, h4, h5, h6 {
			font-family: 'Source Sans Pro', sans-serif;
			font-weight: bold;
		}

		a.link {
			display: block;
			margin: 0 0 3px 0;
			color: #999;
			text-decoration: none;
			padding: 14px 20px;
			background: #fff;
			font-size: 15px;
			transition: color 0.2s ease;
		}

		a.link:hover {
			color: #1473a2;
		}

		a.link i {
			padding: 0 20px 0 0;
			margin: 0 20px 0 0;
			border-right: 1px solid #ddd;
		}

		a.link .typo {
			float: right;
		}

		.bar {
			background: #1473a2;
			padding: 20px 0;
			margin: 0 0 30px 0;
		}

		.bar h1 {
			color: #fff;
			margin: 0;
		}

		.list {
			margin-bottom: 50px;
		}
	</style>
</head>

<body>
	<div class="bar">
		<div class="container">
			<h1>Development</h1>
		</div>
	</div>
	<div class="container list">
		<?php
			$dir = $_SERVER['DOCUMENT_ROOT'];
			$od = opendir($dir);

			while ($entry = readdir($od)) {
				$files[] = $entry;
			}

			sort($files);

			foreach ($files as &$entry) {
				if ($entry != '.' && $entry != '..' && is_dir($entry)) {
					if (file_exists($entry . '/typo3') && is_dir($entry . '/typo3')) {
						echo '<a href="/' . $entry . '" class="link"><i class="fa fa-folder-o"></i>' . str_replace("_"," ",$entry) . '<span class="typo"><i class="fa fa-info"></i> typo3</span></a>';
					}
					else {
						echo '<a href="/' . $entry . '" class="link"><i class="fa fa-folder-o"></i>' . str_replace("_"," ",$entry) . '</a>';
					}
				}
			}

			closedir($od);
		?>
	</div>
</body>

</html>
