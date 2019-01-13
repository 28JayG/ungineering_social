<?php

defined('BASEPATH') OR exit('No direct script access allowed');

session_start();

class Login extends CI_Controller {

    public function login_form() {
        if (isset($_SESSION['id'])) {
            $this->load->view('login_form_loggedin');
        } else {
            $this->load->view('login_form_not_loggedin');
        }
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

        print_r($result);
        if (!$result) {
            //die("Error: " . $sql . "<br>" . mysqli_error($conn));
            $response['mode'] = 2;
            $response['success'] = false;
            $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
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
                $response['success'] = $result;
                $response['message'] = "Hello " . $row['name'];

                //header('location:dashboard.php');
            } else {
                $response['success'] = false;
                $response['mode'] = 3;
                //$response['message'] = "Login failed";
            }
        }
        echo json_encode($response);
    }

    public function register_form() {
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
        //$data = ['name','email','password'];


        if ($name != "" && $email != "" && $password != "" && $confpass != "") {
            if ($confpass == $password) {
                $this->load->model('user');
                $r = $this->user->registration($data);
                if (!$r) {
                    //die("Error:". $sql. "<br/>". mysqli_error($conn));
                    $response['success'] = $r;
                    $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
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
