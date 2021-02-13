<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("Database.php");

class Users extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($username, $password)
    {
        if (empty($username) || empty($password)) {
            echo "
                <script>
                    alert('Form login tidak boleh kosong');
                    </script>
                ";
        } else {
            $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
            $query = $this->koneksi->query($sql);
            if (mysqli_num_rows($query) > 0) {
                if ($query->fetch_assoc()) {
                    echo "
                    <script>
                        alert('Login success');
                        window.location='admin/index.php';
                    </script>
                    ";
                } else {
                    echo "
                    <script>
                        alert('Login failed');
                        window.location='login.php';
                    </script>
                    ";
                }
            } else {
                echo "
                    <script>
                        alert('Username atau password salah');
                    </script>
                    ";
            }
        }
    }
}
