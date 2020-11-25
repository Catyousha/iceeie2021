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

    /**
     * Paper Status
     */
	public function topics(){
        echo view('templates/header');
        echo view('templates/navbar_header');
        echo view('pages/topics');
        echo view('templates/footer');
        echo view('templates/script_footer');
    }

    /**
     * Committee
     */
    public function committee(){
        echo view('templates/header');
        echo view('templates/navbar_header');
        echo view('pages/committee');
        echo view('templates/footer');
        echo view('templates/script_footer');
    }

    /**
     * Conference
     * @param string section
     */
    public function conference($section){
        if(!in_array($section, ['venue', 'fee', 'schedule'])){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        echo view('templates/header');
        echo view('templates/navbar_header');
        echo view('pages/conference-'.$section);
        echo view('templates/footer');
        echo view('templates/script_footer');
    }

    /**
     * Contacts
     */
    public function contacts(){
        echo view('templates/header');
        echo view('templates/navbar_header');
        echo view('pages/contacts');
        echo view('templates/footer');
        echo view('templates/script_footer');
    }
}
