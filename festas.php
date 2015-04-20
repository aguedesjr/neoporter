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
				
                    <form method="post" action="enviaremailfestas.php"> 
						
						<label for="condominio">Condominio:</label> 
                        <input name="condominio" type="text" class="required input_field" id="condominio" maxlength="40" required /> 
					    <div class="cleaner h10"></div>
					    
					    <label for="apto">Apartamento:</label> 
                        <input name="apto" type="text" class="required input_field" id="apto" maxlength="40" required /> 
					    <div class="cleaner h10"></div>
						
						<label for="author">Morador:</label> 
                        <input name="author" type="text" class="required input_field" id="author" maxlength="40" required /> 
					    <div class="cleaner h10"></div>
					    
					    <label for="tel">Tel:</label> 
                        <input name="tel" type="text" class="required input_field" id="tel" maxlength="40" required /> 
					    <div class="cleaner h10"></div>
					    
					    <label for="email">Email:</label> 
                        <input name="email" type="text" class="validate-email required input_field" id="email" maxlength="40" required /> 
					    <div class="cleaner h10"></div>
	
						<label for="data">Data:</label> 
                        <input name="data" type="text" class="validate-email required input_field" id="data" maxlength="40" required /> 
					    <div class="cleaner h10"></div>
					    
					    <label for="hora">Hora:</label> 
                        <input name="hora" type="text" class="required input_field" id="hora" maxlength="40" required /> 
					    <div class="cleaner h10"></div>
					    
					    <label for="nconv">Nº Pessoas:</label> 
                        <input name="nconv" type="text" class="required input_field" id="nconv" maxlength="40" required /> 
					    <div class="cleaner h10"></div>
					    
					    <label for="text">Listagem:</label> 
                		<textarea id="text" name="text" rows="0" cols="0" class="required" required></textarea> 
						<div class="cleaner h10"></div>
					    	
						<label for="obs">Obs:</label> 
                  		<input name="obs" type="text" class="validate-subject required input_field" id="obs" maxlength="80" required /> 
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
