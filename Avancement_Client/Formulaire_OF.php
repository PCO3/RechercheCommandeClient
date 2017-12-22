<?php $this->load->helper('url'); ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/test.css">
    </head>

       <form action = "" method = "post" align="center">
       		 <?php echo validation_errors(); ?>
			     Rentrer le numéro d'OF : <input type="search" placeholder="Entrez un mot-clé" name="RechercheOF" >
		</form>
		

	</body>

</html>