<?php
echo '<pre>';
var_dump(towerBuilder(6));
echo '</pre>';
function towerBuilder( $n ) {



  $tower = new Tower($n);
  return $tower->build();
}

class Tower {
  protected $height;
  protected $tower = [];
  
  public function __construct(int $height) {
	$this->height = $height;
  }
  
  public function build() {
	for ($i = 0; $i < $this->height; $i++) {
	  $this->tower[] = $this->addFloor($i);
	}
	
	return $this->tower;
  }
  
  protected function addFloor(int $floor) {
	$result = "";
	$floor++;
	// You can add parameters to these method calls
	$result .= $this->addMargin($floor); 
	$result .= $this->addBricks($floor);
	$result .= $this->addMargin($floor);
	
	return $result;
  }
  // DO NOT MODIFY THE CODE ABOVE WITH THE EXCEPTION OF METHOD addFloor
  // Write addMargin and addBricks methods here
  
  protected function addMargin(int $floor) {
	  $margin = '';
	  $margin_lenght = $this->height - $floor;
	  for ($i = 0; $i < $margin_lenght; $i++) {
		  $margin = $margin." "; 
	  }
	  
	  return $margin;
  }
  
  protected function addBricks(int $floor) {
	  $bricks = '';
	  $number_of_bricks = $floor * 2 - 1;
	  for ($i = 0; $i < $number_of_bricks; $i++) {
		  $bricks = $bricks ."*"; 
	  }
	  return $bricks;
  }	
}
?>
