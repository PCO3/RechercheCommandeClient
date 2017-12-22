<?php $this->load->helper('url'); ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/test.css">
    </head>

       <form action = "<?php echo base_url();?>index.php/Avancement_Client_Controleur/rechercheCommande" method = "post" align="center">
       		 <?php echo validation_errors(); ?>
			     Rentrer votre numéro de commande : <input type="search" placeholder="Entrez un mot-clé" name="RechercheCommande" >
		</form>
		

	</body>

</html>