<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "company_profile";
    protected $koneksi;

    public function __construct()
    {
        $this->host;
        $this->username;
        $this->password;
        $this->db;
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->db) or die($this->koneksi->error);
        if (!$this->koneksi) {
            return false;
        }
    }
}
