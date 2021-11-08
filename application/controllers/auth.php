<?php
class Auth extends CI_Controller {
      // $this->db->where('email', $Username)->or_where('username', $Username);
       // $query = $this->db->get('$this->table');
       // $user = $query->row;

       // $Username = $request->get('username');
       // return $this->db->where('username', $Username)->get();
       // exit();
        public function login(){
       // public function login($username, $password){

		// $this->db->where('email', $username)->or_where('username', $username);
		// $query = $this->db->get($this->_table);
		// $user = $query->row()

        $this->form_validation->set_rules('username','username', ['required' => 'Username wajib diisi!!']);
        $this->form_validation->set_rules('password','password', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('form_login');
            $this->load->view('templates/footer');
        }else {
            $auth = $this->model_auth->cek_login();


        // cek password
        if(password_verify($password, $user['password'])) {
            $data = [
                'username' => $user['username'],
                'role_id' => $user['role_id']
            ];
            $this->session->set_userdata($data);
            redirect('user');
        }

            if($auth == FALSE)
            {
                $this->session->set_flashdata('pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password anda salah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
              redirect('auth/login');
            }else {
                $this->session->set_userdata('username', $auth
                ->username);
                $this->session->set_userdata('role_id', $auth
                ->role_id);

                switch($auth->role_id){
                    case 1 : redirect('admin/dashboard_admin');
                    break;
                    case 2 : redirect('dashboard');
                    break;
                    default: break;

                }
            }

        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
?>
