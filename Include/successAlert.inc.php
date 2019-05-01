<?php

function successAlert($msg, $href){
	echo '<div class="alert bg-success" role="alert">
			<svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg><' .$msg. '<a href="' .$href. '" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		 </div>';
}