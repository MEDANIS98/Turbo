<?php

declare(strict_types=1);

function sluggify($string)
{
	$url = trim($string);
	$url = strtolower($url);
	// Remove special characters
	$url = preg_replace('|[^a-z-A-Z0-9 _]|iu', '', $url);
	// Replace slashes by spaces
	$url = preg_replace('/\s+/', ' ', $url);
	// Replace space with dashes -
	$url = str_replace(' ', '-', $url);

	return $url;
}
