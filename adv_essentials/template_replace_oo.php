<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>";
?>
<?php
	class Template {

		public $filename;
	  public $assigned_vars=array();

		public function set($key, $value) {
	    $this->assigned_vars[$key] = $value;
	  }

		public function display() {
		  if(file_exists($this->filename)) {
		    $output = file_get_contents($this->filename);
		    foreach($this->assigned_vars as $key => $value) {
		      $output = preg_replace('/{'.$key.'}/', $value, $output);
		    }
		    echo $output;
		  } else {
		    echo "*** Missing template error ***";
		  }
		}
	}

	$template = new Template();
	$template->filename = "template2.php";
	$template->set('page_title', "Template Test");
	$template->set('content', "This is a test of templating using search and replace.");
	$template->display();

?>
