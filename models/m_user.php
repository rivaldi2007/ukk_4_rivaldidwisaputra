<?php
class m_user {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "peminjaman_buku");

        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    public function login($username, $password) {
        $username = $this->conn->real_escape_string($username);
        $password = $this->conn->real_escape_string($password);

        $query = "SELECT * FROM user 
                  WHERE username='$username' 
                  AND password='$password'";

        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
}