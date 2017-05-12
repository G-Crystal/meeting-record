<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/home
	 *	- or -
	 * 		http://example.com/index.php/home/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/home/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct()
    {
            parent::__construct();
            $this->load->model('record_model');
            $this->load->helper('url_helper');
            $this->load->helper('url');
    }

	public function index()
	{
		// $this->load->view('welcome_message');
		$this->listview();
	}

	public function listview($page = 'list')
	{
        if ( ! file_exists(APPPATH.'views/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $title = "Meeting History";
        $data['title'] = ucfirst($title); // Capitalize the first letter

        $data['results'] = $this->record_model->get_list();
		$this->load->view('header', $data);
        $this->load->view($page, $data);
		$this->load->view('footer');
	}
}
