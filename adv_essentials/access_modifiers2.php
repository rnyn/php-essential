<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>"; ?>
    <?php
// Setters and Getters

class SetterGetterExample {
  private $a=1;

  public function get_a() {
    return $this->a;
  }

  public function set_a($value) {
    $this->a = $value;
  }
}
$example = new SetterGetterExample();
// restricted: echo $example->a ."<br />";
echo $example->get_a() ."<br />";
$example->set_a(15);
echo $example->get_a() ."<br />";


?>
