<?php

class Page
{
	var $title;
	var $content;
	var $css = array();
	
	function show()
	{
		echo '<html>';
			echo '<head>';
				$this->head();
			echo '</head>';
			echo '<body>';
				$this->body();
			echo '</body>';
		echo '<html>';
	}
	function head()
	{
		echo '<title>' . $this->title . '</title>';
		for($i=0; $i < count($this->css); $i++)
		{
			echo $this->css[$i];
		}
	}
	function body()
	{
		echo '<h1>' . $this->title . '</h1>'; 
		echo '<p>' . $this->content . '</p>';
	}
	function css($css)
	{

		if(is_array($css)){
			for($i=0; $i < count($css); $i++)
			{
				$this->css[] = '<link href="' . $css[$i] . '" rel="stylesheet">';
			}
		}else{
			$this->css[] = '<link href="' . $css . '" rel="stylesheet">';
		}
	}
}

$home = new Page();
$home->title = 'INICIO';
$home->content = 'PRIMEIRA PAGINA';
$home->css('style.css');
$home->show();
?>