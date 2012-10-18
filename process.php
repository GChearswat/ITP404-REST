<?php
	require('functions.php');

	if (!isset($_POST['submit'])) {
		redirect('USCSearch.php');
	}
?>

<html>
<head>
	<title>Custom USC Google Search</title>
</head>
<body>

<?php
	if (isset($_POST['submit'])) {
		$SearchTerm = $_POST['SearchTerm']; // query string parameter

		$results = getSearchResults($SearchTerm);

		$resultsArray = $results->items;

		foreach($resultsArray as $result) {
			echo '<div class="results">'.$result->title.'</div>';
		};	

	} else {
		redirect('USCSearch.php');
	}
?>

</body>
</html>
