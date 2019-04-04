<?php $brand_primary   = "#85b2d1";
	  $brand_secondary = "#464753";
	if($path == 1): ?>

<!-- ******************* Path 1 ******************* -->

<div class="path-wrapper">
	
	<svg version="1.0" id="path1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 224 400" enable-background="new 0 0 224 400" xml:space="preserve">
		
		<path id="line" fill="none" stroke="<?php echo $brand_secondary?>" stroke-width="6" stroke-linecap="round" stroke-miterlimit="20" d="M23,447c0,0,105.8-46.7,106-181 c0.2-121-167-142-38-285.8"/>
		
		<circle id="mark" fill="#FFFFFF" stroke="<?php echo $brand_primary?>" stroke-width="6" stroke-miterlimit="10" cx="112" cy="200" r="0" original-radio="20" />
		
	</svg>
	
</div>
	
	
<?php elseif($path == 2): ?>

<!-- ******************* Path 2 ******************* -->

<div class="path-wrapper">
	
	<svg version="1.0" id="path2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 224 400" enable-background="new 0 0 224 400" xml:space="preserve">
		
		<path id="line" fill="none" stroke="<?php echo $brand_secondary?>" stroke-width="6" stroke-linecap="round" stroke-miterlimit="20" d="M106.6,484.5c0,0-70.3-94.2,15.9-197.1 C217.8,173.7,140.2,139,47.3-10" />
		
		<circle id="mark" fill="#FFFFFF" stroke="<?php echo $brand_primary?>" stroke-width="6" stroke-miterlimit="10" cx="166.1" cy="200" r="0" original-radio="20" />
		
	</svg>
	
</div>


<?php elseif($path == 3): ?>

<!-- ******************* Path 3 ******************* -->

<div class="path-wrapper">

	<svg version="1.0" id="path3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 224 400" enable-background="new 0 0 224 400" xml:space="preserve">
		
		<path id="line" fill="none" stroke="<?php echo $brand_secondary?>" stroke-width="6" stroke-linecap="round" stroke-miterlimit="20" d="M102.3,403.7c0,0,50.8-95.9-29.7-173 C-60.6,103,170,116.5,215.6-12.8" />
		
		<circle id="mark" fill="#FFFFFF" stroke="<?php echo $brand_primary?>" stroke-width="6" stroke-miterlimit="10" cx="47.3" cy="200" r="0" original-radio="20" />
		
	</svg>

</div>

<?php endif; ?>

<!--
    d: path("M 106.6 484.5 c 0 0 -70.3 -94.2  15.9 -197.1 C 217.8 173.7 140.2 139    47.3 -10");
    d: path("M 102.3 403.7 c 0 0  50.8 -95.9 -29.7 -173   C -60.6 103     170 116.5 215.6 -12.8");
-->




