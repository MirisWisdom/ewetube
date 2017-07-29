<?php


$markdown = new Markdown();
$markdown->AddRequest($_GET['animal']);

file_put_contents('markdown.md', $markdown->GetMarkdown());

exec('/usr/bin/nodejs ../node_modules/md2gslides/bin/md2gslides.js --no-browser markdown.md > slideshow.url');

echo file_get_contents('slideshow.url');

class Markdown
{
	private $requests = array();

	public function AddRequest($value)
	{
		array_push($this->requests, $value);
	}

	public function GetMarkdown()
	{
		$markdownData = null;

		foreach ($this->requests as $request) {
			$markdownData = "$markdownData $request \n";
		}

		return <<<MD
---

# A basic generated markdown file
## Another sub title...

The following was your request: {$markdownData}
MD;
	}
}