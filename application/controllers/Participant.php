<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Participant extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Participant_model');
    } 

    /*
     * Listing of participants
     */
    function index()
    {
        $data['participants'] = $this->Participant_model->get_all_participants();
        
        $data['_view'] = 'participant/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new participant
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nom_participant','Nom Participant','required');
		$this->form_validation->set_rules('telephone_participant','Telephone Participant','required');
		$this->form_validation->set_rules('email_participant','Email Participant','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'state' => $this->input->post('state'),
				'id_event' => $this->input->post('id_event'),
				'nom_participant' => $this->input->post('nom_participant'),
				'telephone_participant' => $this->input->post('telephone_participant'),
				'email_participant' => $this->input->post('email_participant'),
				'createAt' => $this->input->post('createAt'),
            );
            
            $participant_id = $this->Participant_model->add_participant($params);
            redirect('participant/index');
        }
        else
        {
			$this->load->model('Event_model');
			$data['all_events'] = $this->Event_model->get_all_events();
            
            $data['_view'] = 'participant/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a participant
     */
    function edit($id_participant)
    {   
        // check if the participant exists before trying to edit it
        $data['participant'] = $this->Participant_model->get_participant($id_participant);
        
        if(isset($data['participant']['id_participant']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nom_participant','Nom Participant','required');
			$this->form_validation->set_rules('telephone_participant','Telephone Participant','required');
			$this->form_validation->set_rules('email_participant','Email Participant','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'state' => $this->input->post('state'),
					'id_event' => $this->input->post('id_event'),
					'nom_participant' => $this->input->post('nom_participant'),
					'telephone_participant' => $this->input->post('telephone_participant'),
					'email_participant' => $this->input->post('email_participant'),
					'createAt' => $this->input->post('createAt'),
                );

                $this->Participant_model->update_participant($id_participant,$params);            
                redirect('participant/index');
            }
            else
            {
				$this->load->model('Event_model');
				$data['all_events'] = $this->Event_model->get_all_events();

                $data['_view'] = 'participant/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The participant you are trying to edit does not exist.');
    } 

    /*
     * Deleting participant
     */
    function remove($id_participant)
    {
        $participant = $this->Participant_model->get_participant($id_participant);

        // check if the participant exists before trying to delete it
        if(isset($participant['id_participant']))
        {
            $this->Participant_model->delete_participant($id_participant);
            redirect('participant/index');
        }
        else
            show_error('The participant you are trying to delete does not exist.');
    }
    
}
