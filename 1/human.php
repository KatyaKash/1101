<?php
	abstract class Human {
		private $name;
		private $surname;
		private $patronimyc;

		public function __construct($n, $s, $p) {
			$this->name = $n;
			$this->surname = $s;
			$this->patronimyc = $p;
		}

		public function display() {
		echo sprintf('%s %s %s ', $this->surname, $this->name, $this->patronimyc);
	}
}
?>