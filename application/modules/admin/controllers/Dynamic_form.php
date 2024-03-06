<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dynamic_form extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('dynamic_form');
    }

//     Array
    // (
    // [vFullName1] => mukesh prasad
    // [vEmail1] => him@gmail.com
    // [vZipCode1] => 248001
    // [vFullName2] => raman bhardwaj
    // [vEmail2] => raman@gmail.com
    // [vZipCode2] => 231205
    // [license_count] => 2
    // )
    public function save_detail()
    {
       
        $request = $this->input->post();
        // print_r($request);die;

        $data_arr = array();
        for ($m = 1; $m <= $request['license_count']; $m++) {
            $data_arr = array(
                'vFullName' => $request['vFullName' . $m],
                'vEmail' => $request['vEmail' . $m],
                'vZipCode' => $request['vZipCode' . $m],
            );
            $result = $this->db->insert('dynamic_form', $data_arr);

        }

        // echo "<pre>";
        // print_r($data_arr);die;

        if ($result) {
            echo '<script>
            alert("data inserted successfully");
            </script>';
        }
        redirect('admin/dynamic_form');

    }
}