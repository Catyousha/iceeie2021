<?php namespace App\Controllers;

class Home extends BaseController{

    /**
     * Home Page
     */
	public function index(){
		echo view('templates/header');
		echo view('templates/navbar_header');
		echo view('pages/main');
		echo view('templates/footer');
		echo view('templates/script_footer');
	}

	/**
     * Paper Status
     */
	public function paperStatus(){
        echo view('templates/header');
        echo view('templates/navbar_header');
        echo view('pages/paper-status');
        echo view('templates/footer');
        echo view('templates/script_footer');
    }

}
