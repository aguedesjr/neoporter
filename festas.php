<?php include 'header.php'; ?>
    
<script>
$( document ).ready(function() {
	document.getElementById("inicio").className = "";
	document.getElementById("cli").className = "active";
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
           	  	<h3>Agendamento de Festas</h3>
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
            
            <!--<div class="col_w450 float_r" id="map"> 
            	<h3>Acesso Restrito</h3>
            	<iframe height="200" width="410" src="http://www.sistemaacol.com.br/clientes/login/" frameborder="0" style="border:0></iframe>
				
				<div class="cleaner h30"></div>
                                
                
                
            </div>  -->
            
            <div class="cleaner"></div>
		</div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->
        
</div> <!-- end of wrapper -->

<?php include 'footer.php';?>

</body>
</html>
