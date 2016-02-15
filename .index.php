<?php

	$directory = "./" . $_SERVER['PATH_INFO'];

?>
<!doctype html>
<style>
	* {
		margin: 0;
	}

	body {
		color: #333;
		background: #eee;
		font-family: sans-serif;
	}

	h1 {
		text-align: center;
		padding: 1em 0 .5em 0;
		margin: 0;
	}

	table {
		width: 100%;
		padding: 0 1em;
		background-color: #f3f3f3;
		border: collapse;
	}

	th {
		padding: .3em .7em;
		background-color: #fe4902;
		color: #fff;
		text-align: left;
	}

	tr:nth-of-type(odd) {
		background-color: #E6E6E6;
	}

	td {
		padding: .3em .5em;
	}

	a {
		text-decoration: none;
	}

</style>


	<h1>Directory Contents</h1>

	<table>
		<th>Filename

<?php
	$contents = scandir($directory, SCANDIR_SORT_ASCENDING);

	foreach ($contents as $entry) {
		// Hide entries starting with '.', ls-style.
		// Except for '..' - thats useful.
		if ($entry[0] === '.' && $entry !== '..')
			continue;

?>
		<tr><td><a href="<?=htmlspecialchars($entry)?>">
			<?=htmlspecialchars($entry)?>

<?php
	}
?>
