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

		return <<<MD
---

# A basic generated markdown file
## Another sub title...

The following was your request: {$markdownData}
MD;
	}
}