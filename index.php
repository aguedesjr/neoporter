<?php include 'header.php'; ?>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:5200, //Tempo de transicao de slides e frases
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

<body class="homepage">

<div id="tooplate_wrapper">
	<div id="tooplate_header">
    	
        <div id="site_title"><img src="images/neoporter_logo.png" width="190" height="80" alt="" /></div>
        
        <div class="cleaner"></div>
    </div>
    
    <?php include 'menu.php';?>
    
    <div id="tooplate_middle">
    
        <div id="slider">
            <a href="#"><img src="images/slideshow/portaria_vazia1.jpg" alt="" title="Troque os custos desnecessários pela economia." /></a>
            <a href="#"><img src="images/slideshow/pe_portao.jpg" alt="" title="Troque a incerteza pela segurança." /></a>
            <a href="#"><img src="images/slideshow/familia.jpg" alt="" title="Valoriza seu maior patrimônio." /></a>
            <a href="#"><img src="images/slideshow/interfone_chave.jpg" alt="" title="Troque o fixo pelo móvel." /></a>
            <a href="#"><img src="images/slideshow/seguranca.jpg" alt="" title="Seu imóvel seguro 7 dias por semana 24h por dia." /></a>
        </div>
	</div>
        
    <div id="tooplate_main">
    	
        <div class="col_w960">
        	<h2>Serviço de Portaria Inteligente</h2>
            <div class="col_w450 float_l">
            	<div class="wwd_box">
                	<img src="images/icon2.png" alt="" />
                    <h3><a href="#">Serviço Confiável</a></h3>
                     <p>Melhoria da segurança através do controle de acesso com gravação.</p>
                     <!-- <a href="#" class="more float_r">More</a>  -->
                  <div class="cleaner"></div>
                </div><br />
                
                <div class="wwd_box">
                	<img src="images/icon4.png" alt="" />
                    <h3><a href="#">Sistema Seguro</a></h3>
                    <p>Rede privada para garantir uma conexão segura com seus clientes.</p>
                     <!-- <a href="#" class="more float_r">More</a>  -->
                  <div class="cleaner"></div>
                </div>
            </div>
            
            <div class="col_w450 float_r">
              	<div class="wwd_box">
                	<img src="images/icon3.png" alt="" />
                    <h3><a href="#">Investimento</a></h3>
                    <p>Redução de custos com Portaria de até 50%.</p>
                     <!-- <a href="#" class="more float_r">More</a>  -->
                    <div class="cleaner"></div>
                </div>
            </div>
            
            <div class="cleaner"></div>
		</div>
    
    	<div class="col_w960 col_w960_last">
        	<h2>Vídeos</h2>
            <div class="lp_box">
                <h6>Demonstração</h6>

				<iframe width="350" height="240" src="https://www.youtube.com/embed/Vph0ijcdVAk" frameborder="0" allowfullscreen></iframe>
                
                <p>Neoporter - Portaria Inteligente.</p>
                <!-- <a href="#" class="more float_r">More</a>  -->
                <div class="cleaner"></div>
        	</div>
			
            <!-- <div class="lp_box">
                <h6>Sed aliquam mauris</h6>
                <a href="#"><img src="images/tooplate_image_02.jpg" alt="Image 02" /></a>
              	<p>Donec ullamcorper feugiat nunc ut tempus. Sed sodales, nibh ut ultricies pulvinar.</p>
                <a href="#" class="more float_r">More</a>
                    <div class="cleaner"></div>
        	</div>
			
			<div class="lp_box lp_box_last">
                <h6>Aliquam aliquet sem</h6>
                <a href="#"><img src="images/tooplate_image_03.jpg" alt="Image 03" /></a>
				<p>Praesent auctor quam quis libero venenatis dapibus. Donec ullamcorper   feugiat nunc ut tempus.</p>
                <a href="#" class="more float_r">More</a>
                <div class="cleaner"></div>
            </div> -->
			
            <div class="cleaner"></div>
        </div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->
        
</div> <!-- end of wrapper -->

<?php include 'footer.php';?>

</body>
</html>
