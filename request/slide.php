<?php

$markdown = new Markdown();
$markdown->AddRequest("latitude", "latitude_blank");
$markdown->AddRequest("longitude", "longitude_blank");

echo $markdown->GetMarkdown();

file_put_contents('markdown.md', $markdown->GetMarkdown());

exec('/usr/bin/node ../node_modules/md2gslides/bin/md2gslides.js -a 17eOlNMEuThT0-1-Fd1TU2azTqanpSNbWL1qUkp4ITtQ -e --no-browser markdown.md > slideshow.url');

echo file_get_contents('slideshow.url');

class Markdown
{
	private $requests = array();

	public function AddRequest($variableName, $defaultValue)
	{
		array_push($this->requests, $this->HandleVariable($variableName, $defaultValue));
	}

    private function HandleVariable($variableName, $defaultValue)
    {
        if (!isset($_GET[$variableName])) {
            $_GET[$variableName] = $defaultValue;
            return $_GET[$variableName];
        } else {
            return $_GET[$variableName];
        }
    }

	public function GetMarkdown()
	{
		$markdownData = null;

		foreach ($this->requests as $request) {
			$markdownData .= "$request :: ";
		}

		return <<<MARKDOWN
---

# Sheep Meat Production (tonnes)

![](https://ewetube.space/yourdata/$session.png){.backgroup}

---

# $location & surrounds

Latitude:  $long
Longitude: $lat

![](https://maps.googleapis.com/maps/api/staticmap?zoom=13&size=800x600&maptype=roadmap&center=$long,$lat&key=AIzaSyDtVieK0cM4pxxaRO1-2brs97E1CgakUoo){.background}

MARKDOWN;
	}
}