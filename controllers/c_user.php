<?php
session_start();
require_once "m_user.php";

class c_user {
    private $model;

    public function __construct() {
        $this->model = new m_user();
    }

    public function login() {
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $data = $this->model->login($username, $password);

            if ($data) {
                $_SESSION['id'] = $data['id'];
                $_SESSION['username'] = $data['username'];
                $_SESSION['role'] = $data['role'];
                $_SESSION['kelas'] = $data['kelas'];

                // Redirect sesuai role
                if ($data['role'] == 'admin') {
                    header("Location: dashboard_admin.php");
                } else {
                    header("Location: dashboard_siswa.php");
                }
            } else {
                echo "<script>alert('Username atau Password salah');</script>";
            }
        }
    }
}

$controller = new c_user();
$controller->login();