
<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/style3.css"/>
<script src="<?php echo base_url() ?>assets/js/vendor/jquery-1.11.2.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/fungsi.js"></script> 
<body>

<div class="f01" >
<?php
	foreach ($issue_number->result() as $df){
		echo '<div id="div2" class="set1">'.'<label><b>'.$df->fld1.'</b></label>'.'</div>';
		echo '<div id="div3" class="set1">'.$df->fld2.'</div>';
		
		
	}
?>
</div>
<?php
?>
</div>
</body>
 
