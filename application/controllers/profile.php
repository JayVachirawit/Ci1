<?php
 class profile extends CI_controller{}
             function data($var, $var2, $var3){
                 $data = [
                        'nama'   => $var1,
                        'alamat' => $var2,
                        'nohp'   => $var3,
                 ];
                       $this->load->view('v_data_profile', $data);
             }


             public function tambah_data(){
                    $this->load->view('tambah_data_profile_v');
             }













    public function tampil_data(){
           $this->load->model('M_profile');
           $data['profile'] = $this->M_profile->tampil_data()->result();
           $this->load->view('v_tampil_data_profile', $data);
    }
?>