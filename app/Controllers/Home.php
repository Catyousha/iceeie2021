<?php namespace App\Controllers;

class Home extends BaseController{

    private function view($name){
        echo view('templates/header');
        echo view('templates/navbar_header');
        echo view($name);
        echo view('templates/footer');
        echo view('templates/script_footer');
    }

    /**
     * Home Page
     */
	public function index(){
		$this->view('pages/main');
	}

	/**
     * Paper Status
     */
	public function paperStatus(){
        $this->view('pages/paper-status');
    }

    /**
     * Paper Status
     */
	public function topics(){
        $this->view('pages/topics');
    }

    /**
     * Committee
     */
    public function committee(){
        $this->view('pages/committee');
    }

    /**
     * Contacts
     */
    public function contacts(){
        $this->view('pages/contacts');
    }
}
