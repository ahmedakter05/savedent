<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('welcome_message',$output);
	}
	
	public function patient_management()
	{
		
			if(!$this->ion_auth->logged_in())
			{
				redirect('main/auth/login', 'refresh');
			}
			
			if(!$this->ion_auth->in_group('members'))
			{
				return show_error('You must be a member to view this page.');
			}
			
			$crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('patientrecords');
			$crud->columns('visitingdate','reffno', 'fullname', 'contactno', 'email', 'occupation', 'area', 'dateofbirth');
			
			$crud->display_as('visitingdate','Visiting Date')->display_as('reffno', 'ID No')->display_as('fullname', 'Full Name')
				 ->display_as('contactno', 'Contact No')->display_as('area', 'Area')->display_as('dateofbirth', 'Date of birth')
				 ->display_as('occupation', 'Occupation')->display_as('clinicalfindings', 'Clinical Findings')
				 ->display_as('medicalfindings', 'Medical Findings')->display_as('dentalhistory', 'History of Dental treatment')
				 ->display_as('investigationnote', 'Investigation Note')->display_as('diagnosistreatmentplan', 'Diagnosis & Treatment plan')
				 ->display_as('treatmentnote', 'Treatment Note');
			$crud->set_subject('Patient Information');

			//$crud->required_fields('lastName');

			$output = $crud->render();

			//Config Halaman
			$output->judul_besar = 'Patient';
			$output->judul_kecil = 'Management';
			$output->m_patient_management = TRUE;

			$this->_example_output($output);
	}
	
	public function assets_management()
	{
		
			if(!$this->ion_auth->logged_in())
			{
				redirect('main/auth/login', 'refresh');
			}
			
			if(!$this->ion_auth->in_group('members'))
			{
				return show_error('You must be a member to view this page.');
			}
			
			$crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('assetsrecords');
			$crud->columns('name','serialno', 'tagno', 'categoryid', 'checkedin', 'warrantyperiod', 'checkedout', 'location', 'manageby');
			$crud->set_relation('categoryid','assetscategory','categoryname');
			$crud->display_as('modelno','Model No')->display_as('serialno', 'Serial No')->display_as('tagno', 'Assigned Tag No')
				 ->display_as('checkedin', 'Checked In')->display_as('warrantyperiod', 'Warranty Period')->display_as('checkedout', 'Checked Out')
				 ->display_as('manageby', 'Managed By')->display_as('purchaseno', 'Purchase Order No')
				 ->display_as('purchasedate', 'Purchase Date')->display_as('	purchaseprice', 'Purchase Price')
				 ->display_as('vendorname', 'Vendor Name')->display_as('categoryid', 'Category Name');
			$crud->set_subject('Asset Information');

			//$crud->required_fields('lastName');

			$output = $crud->render();

			//Config Halaman
			$output->judul_besar = 'Assets';
			$output->judul_kecil = 'Management';
			$output->m_assets_management = TRUE;

			$this->_example_output($output);
	}
	
	public function assets_category()
	{		
	
			if(!$this->ion_auth->logged_in())
			{
				redirect('main/auth/login', 'refresh');
			}
			
			if(!$this->ion_auth->in_group('members'))
			{
				return show_error('You must be a member to view this page.');
			}
			
			$crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('assetscategory');
			$crud->columns('id', 'categoryname');
			
			/*$crud->display_as('visitingdate','Visiting Date')->display_as('reffno', 'ID No')->display_as('fullname', 'Full Name')*/
			$crud->set_subject('Asset Category');	
			$output = $crud->render();

			//Config Halaman
			$output->judul_besar = 'Assets';
			$output->judul_kecil = 'Category';
			$output->m_assets_category_management = TRUE;

			$this->_example_output($output);
	}
}