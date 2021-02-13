<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "Database.php";

class Crud extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function tampilData($table, $id = null)
    {
        $sql = "SELECT * FROM $table";
        if ($id != null) {
            $sql .= " WHERE id = $id";
        }
        $rows = [];
        $query = $this->koneksi->query($sql) or die($this->koneksi->error);
        while ($row = $query->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function tambahData($table, $data)
    {
        $kolom = implode(',', array_keys($data));
        $values = '("' . join('","', array_values($data)) . '")';
        $sql = "INSERT INTO $table ($kolom) VALUES $values";
        if (isset($_POST["tambah"])) {
            $query = $this->koneksi->query($sql) or die($this->koneksi->error);
            if (!$query) {
                echo "
                <script>
                    alert('Data gagal di tambah');
                </script>
                ";
                return false;
            } else {
                echo "
                <script>
                    alert('Data berhasil di tambah');
                </script>
                ";
                return true;
            }
        }
    }

    public function update($table, $data, $id, $id_val)
    {
        $sql = "UPDATE $table SET ";
        $sql .= implode(',', $data);
        $sql .= " WHERE $id = $id_val";
        $query = $this->koneksi->query($sql) or die($this->koneksi->error);
        if (!$query) {
            echo "
            <script>
                alert('Data gagal di ubah !')
            </script>
            ";
            return false;
        } else {
            echo "
            <script>
                alert('Data berhasil di ubah')
            </script>
            ";
            return true;
        }
    }

    public function delete($table, $id, $id_val)
    {
        $sql = "DELETE FROM $table WHERE $id = $id_val";
        $query = $this->koneksi->query($sql) or die($this->koneksi->error);
        if (!$query) {
            echo "
            <script>
                alert('Data gagal di delete')
            </script>
            ";
            return false;
        } else {
            echo "
            <script>
                alert('Data berhasil di delete')
            </script>
            ";
            return true;
        }
    }
}
