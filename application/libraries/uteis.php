<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Uteis {

	public static function loadCss($arrayCss = null) {
		if($arrayCss != null){
			foreach ($arrayCss as $css ) {
				echo "<link href='/html/css/$css' type='text/css' rel='stylesheet' />";
			}
		} 
	}


	public static function loadJs($arrayJs = null) {
		if($arrayJs != null){
			foreach ($arrayJs as $js ) {
				echo "<script type='text/javascript' src='/html/js/$js'></script>";
			}
		}
	}

}
