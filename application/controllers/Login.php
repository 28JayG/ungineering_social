<?php

defined('BASEPATH') OR exit('No direct script access allowed');

session_start();

class Login extends CI_Controller {

    public function login_form() {
        session_destroy();
        //if (isset($_SESSION['id'])) {
        //    $this->load->view('login_form_loggedin');
        //} else {
            $this->load->view('login_form');
        //}
    }

    public function login_submit() {
        $response = array();
        $conn = $this->load->model('user');
        if (!$conn) {
            $response['mode'] = 1;
            $response['success'] = false;
            $response['message'] = "Connection failed: " . mysqli_connect_error();
            echo json_encode($response);
            exit();
        }
        $email = $_POST['email'];
        $password = $_POST['password'];
        $row = array();
        $result = $this->user->get_data_from_table($email);

        if (!$result) {
            $response['mode'] = 2;
            $response['success'] = false;
            $response['message'] = "This email is not registered with us.";
            echo json_encode($response);
            exit();
        } else {
            $row['id'] = $result[0]->id;
            $row['name'] = $result[0]->name;
            $row['email'] = $result[0]->email;
            $row['password'] = $result[0]->password;

            if ($password == $row['password']) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $response['success'] = true;
                $response['message'] = "Hello ".$row['name'];
                echo json_encode($response);
            } else {
                $response['success'] = false;
                $response['mode'] = 3;
                $response['message'] = "Password mismatch";
                echo json_encode($response);
            }
        }
    }

    public function register_form() {
        session_destroy();
        $this->load->view('register_form');
    }

    public function register_submit() {
        $response = array();

        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confpass = $_POST['conf_pass'];

        if ($name != "" && $email != "" && $password != "" && $confpass != "") {
            if ($confpass == $password) {
                $this->load->model('user');
                $r = $this->user->registration($data);
                if (!$r) {
                    $response['success'] = $r;
                    $response['message'] = "Error: Connection Failed";
                    echo json_encode($response);
                    exit();
                }
                $response['success'] = $r;
                $response['message'] = "Registration successful";
                echo json_encode($response);
            }
        }
    }

    public function logout() {
        session_start();
        session_destroy();

        header('location: /social_media/index.php/home/home');
    }

}
