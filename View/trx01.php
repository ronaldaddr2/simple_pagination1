        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
<body>


<section id="test" class="test bg-white roomy-60 fix">
                <div class="container">
                    <div class="row">                        
                        <div class="main_test fix">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="head_title text-center fix">
                                    <h2 class="text-uppercase">GENRE 1</h2>
                                    <h5>Clean and Modern design is our best specialist</h5>
                                </div>
                            </div>
<?php
	$no = $this->uri->segment('3') + 1;
	foreach ($listbook->result() as $df){
		//echo '<div id="div2" class="set1"><a href="'.base_url().'index.php/FRM01/issue?id='.$df->Id.'">'.$df->fld1.'</a></div>';

ECHO '
                            <div class="col-md-3">
                                <div class="test_item fix">
                                    <div class="item_img">
                                        <!--<img class="img-thumbnail" src="'.base_url().'assets/images/'.$df->cat.'-'.$df->Id.'.jpg" alt="" />-->
                                        <!--<i class="fa fa-quote-left"></i>-->
                                    </div>
                                                    <div class="port_overlay text-center">
                                                        <img src="'.base_url().'assets/images/'.$df->cat.'-'.$df->Id.'.jpg" alt="" />
                                                        <div class="port_overlay text-center">
															<h5>'.$df->fld1.'</h6>
															<h6><input type="text" id="id" name="id" value="'.$df->Id.'"/></h5>
                                                        </div>
                                                    </div>
									
									
                                    <div class="item_text">
                                        <!--<p>Natus voluptatum enim quod necessitatibus quis
                                            expedita harum provident eos obcaecati id culpa
                                            corporis molestias.</p>--!>
                                    </div>
                                    <div class="port_overlay text-center">
										<div class="business_btn">
											<a href='.base_url(),'index.php/FRM01/issue?id='.$df->Id.' class="btn btn-primary m-top-20">Read</a>
											<!--<input type="submit" value="Read"class="btn btn-primary m-top-20">-->
											
										</div>
                                    </div>
									
                                </div>
                            </div>';

		
	}
?>
                        </div>
                    </div>
                </div>
            </section><!-- End off test section -->
<?php
	echo $links;

?>
</body>
 
