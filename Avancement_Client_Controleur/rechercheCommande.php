<?php
class RechercheCommande extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		
		$this -> load -> database();
		$this -> load -> library('form_validation');
		$this -> affichage();
	
	}

	public function affichage()
	{
		//on recupere la recherche en assurant la sécurité des données XSS
		$rechercheCommande = str_replace(" ","", htmlspecialchars( $this->input->get_post('RechercheCommande')));

		if($this->form_validation->run()== FALSE )
		{
			//afficher les vues 
			$this -> load -> view('Base_HTML/Header');
			$this -> load -> view('Avancement_Client/Formulaire_OF');
			$this -> load -> view('Base_HTML/Footer');
		}
		else
		{
			$this -> load -> view('Base_HTML/Header');			
		}
	}
}
