<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\UtilisateursModel;

class UserController extends Controller
{
	//Cette fonction sert à afficher la liste des utilisateurs.
	public function listUsers(){
		//$usersList = array(
			//'Googleman', 'Pausewoman', 'Pauseman', 'Roland'
		//);

		$usersModel = new UtilisateursModel();

		$usersList = $usersModel->findAll();

		//Affiche la vue présente dans app/vViews/users/list.php
		//et injecte letableau $usersList sousun nouveau nom $listUsers :
		$this->show('users/list', array('listUsers' => $usersList));
	}


}