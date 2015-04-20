<?php include 'header.php'; ?>
    
<!-- Arquivos utilizados pelo jQuery lightBox plugin -->
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" />    
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
<!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->

<script>
$( document ).ready(function() {
	document.getElementById("inicio").className = "";
	document.getElementById("cont").className = "active";
});
</script>

<!-- Ativando o jQuery lightBox plugin -->
<script type="text/javascript">
$(function() {
    $('.lightbox').lightBox();
});
</script>


<body class="subpage">

<div id="tooplate_wrapper">
	
	<?php include 'logo.php';?>
    
    <?php include 'menu.php';?>
    
    <div id="tooplate_middle_subpage">
        <!--<h2>Contact Information</h2>
        <h6>Sed placerat mattis iaculis. Nunc a bibendum tellus. Morbi nec sapien ut orci aliquet ullamcorper. Etiam dui eros, pellentesque vitae luctus at, laoreet in ipsum. Vivamus venenatis dignissim leo eget posuere. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</h6>-->
    </div>
        
    <div id="tooplate_main">
        <div class="col_w960 col_w960_last">
		
            <div class="col_w450 float_l">
           	  	<h3>Entre em contato conosco</h3>
           	  	<h6>Todos os campos são obrigatórios.</h6><br>
              	<div id="cp_contact_form">
				
                    <form method="post" action="enviaremail.php"> 
						
						<label for="author">Nome:</label> 
                        <input name="author" type="text" class="required input_field" id="author" maxlength="40" required /> 
					    <div class="cleaner h10"></div>
					    
					    <label for="endereco">Endereço:</label> 
                        <input name="endereco" type="text" class="required input_field" id="endereco" maxlength="40" required /> 
					    <div class="cleaner h10"></div> 
	
						<label for="email">Email:</label> 
                        <input name="email" type="text" class="validate-email required input_field" id="email" maxlength="40" required /> 
					    <div class="cleaner h10"></div>
					    
					    <label for="tel">Tel:</label> 
                        <input name="tel" type="text" class="required input_field" id="tel" maxlength="40" required /> 
					    <div class="cleaner h10"></div>
					    
					    <label for="condominio">Condominio:</label> 
                        <input name="condominio" type="text" class="required input_field" id="condominio" maxlength="40" required /> 
					    <div class="cleaner h10"></div>
					    
					    <label for="sindico">Síndico:</label> 
                        <input name="sindico" type="text" class="required input_field" id="sindico" maxlength="40" required /> 
					    <div class="cleaner h10"></div> 
	
						<label for="subject">Assunto:</label> 
                  		<input name="subject" type="text" class="validate-subject required input_field" id="subject" maxlength="80" required /> 
					    <div class="cleaner h10"></div> 
	
						<label for="text">Mensagem:</label> 
                		<textarea id="text" name="text" rows="0" cols="0" class="required" required></textarea> 
						<div class="cleaner h10"></div>                
	
						<input type="submit" value="Enviar" id="submit" name="submit" class="submit_btn float_l" /> 
						<!-- <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />  --> 
	
					</form>
    
            	</div>
            </div>
            
            <div class="col_w450 float_r" id="map">
            	<h3>Localização</h3>
            	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.938043769842!2d-41.349982000000004!3d-21.74392749999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbdd4653dab0cff%3A0xeb9194e5689d2876!2sAv.+S%C3%A3o+Fid%C3%A9lis%2C+522+-+Nova+Bras%C3%ADlia%2C+Campos+dos+Goytacazes+-+RJ%2C+28055-512!5e0!3m2!1spt-BR!2sbr!4v1428704357396" width="400" height="300" frameborder="0" style="border:0"></iframe>  -->
                <a class="lightbox" href="images/mapa_neoporter.png" title="Our Location">
                    <img src="images/thumb_neoporter.png" alt="" />
                </a>

				<div class="cleaner h30"></div>
                                
                <h3>Nosso Endereço</h3>
                <h6>Neoporter</h6>
                Avenida São Fidelis, 522<br />
                Campos dos Goytacazes/RJ<br /><br />
				
                Tel: (22) 2732-7336<br />
				Cel: (22) 99762-3421<br />
				E-mail: <a id="email">vendas@scout24horas.com.br</a><br />
            </div>
            
            <div class="cleaner"></div>
		</div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->
        
</div> <!-- end of wrapper -->

<?php include 'footer.php';?>

</body>
</html>
