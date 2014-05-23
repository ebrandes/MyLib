<?

class Uteis {

	
	public function loadCss($arrayCss){

		foreach ($arrayCss as $css) {
			echo "<link rel='stylesheet' type='text/css' href='/html/css/$css' />"
		}

	}

	public function loadJs($arrayJS){

	 	foreach ($arrayJS as $js) {
			echo "<script type='text/javascript' src='/html/js/$js'></script>";
		}

	}
	
}
