<?php

class login_model extends CI_Model{
    public function cek_login($username, $password){
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        return $this->db->get('user');
    }
    public function getLoginData($user,$pass){
        $u = $user;
        $p = MD5($pass);

        $query_ceklogin = $this->db->get_where('user', array ('username' => $su, 'password' => $p));

        if (count($query_ceklogin->result()) > 0 ) {
            foreach ($query_ceklogin->result() as $qck) {
                foreach ($query_ceklogin->result() as $ck) {
                    $sees_data ['logged_in'] = TRUE;
                    $sees_data ['username'] = $ck->username;
                    $sees_data ['password'] = $ck->password;
                    $sees_data ['level'] = $ck->level;
                    $this->session->set_userdata($sess_data);
                }
                redirect('administrator/dasboard');
            }
        }else {
            $this->session->set_flasdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            username atau password anda salah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('administrator/auth');
        }
    }
}



?>