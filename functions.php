<?php

function getSearchResults($SearchTerm) {
	$url = "https://www.googleapis.com/customsearch/v1?key=AIzaSyCCNa9p-0on-iTp6NgWSACcUIcHxfvLM1A&cx=009039978746932153158:xwzjnpzbvem&q=" . $SearchTerm . "&alt=json";
	$jsonString = file_get_contents($url);
	$arrayOfSearchResults = json_decode($jsonString);
	return $arrayOfSearchResults;
}

function redirect($url) {
	header('Location: ' . $url);
}
