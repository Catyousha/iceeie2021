<?php namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

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
	    throw PageNotFoundException::forPageNotFound();
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
     * Travel
     */
    public function travel(){
        $this->view('pages/travel');
    }

    /**
     * For Author > Submission Guideline
     */
    public function submissionGuideline(){
        $this->view('pages/submission-guideline');
    }

    /**
     * For Author > Paper Submission
     */
    public function paperSubmission(){
        $this->view('pages/paper-submission');
    }

    /**
     * For Author > Important Dates
     */
    public function paperImportantDates(){
        $this->view('pages/paper-important-dates');
    }

    /**
     * For Author > Template
     */
    public function paperTemplate(){
        $this->view('pages/paper-template');
    }

    /**
     * Conference
     * @param string section
     */
    public function conference($section = null){
        if(!in_array($section, ['venue', 'fee', 'schedule'])){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $this->view('pages/conference-'.$section);
    }

    /**
     * Contacts
     */
    public function contacts(){
        $this->view('pages/contacts');
    }
}
