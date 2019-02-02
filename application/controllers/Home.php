<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        
        $this->load->model('status');
        
        $status= $this->status->fetch_all_statuses();
        //print_r($status);
        $this->load->view('homepage',['data'=>$status]);
    }

    public function status_submit() {

        session_start();

        $hostname = "localhost";
        $username = "root";
        $db_password = "123456";
        $db_name = "social_media";

        $response = array();
        $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
        if (!$this->load->database()) {
            $response['success'] = false;
            $response['message'] = "Connection failed: " . mysqli_connect_error();
            echo json_encode($response);
            exit();
        }

        $status = $_POST['status'];
        $status = mysqli_real_escape_string($conn, $status);
        $id = $_SESSION['id'];

        if ($status == NULL) {
            $response['success'] = false;
            $response['message'] = "please put some status";
            echo json_encode($response);
        } else {
            $data = array(
                    'status'=> $status,
                    'user_id'=> $id,
            );
            $this->load->model('status');
            
            $sql = $this->status->insert_status($data);

            if (!$sql) {
                $response['success'] = false;
                $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
                echo json_encode($response);
                exit();
            }


            $response['success'] = true;
            $response['message'] = "status updated";
            echo json_encode($response);
        }
    }

}


