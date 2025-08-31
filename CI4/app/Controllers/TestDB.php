<?php

namespace App\Controllers;

class TestDB extends BaseController
{
    public function index()
    {
        echo "<h2>Test Koneksi Database</h2>";
        
        // Cek extension
        if (extension_loaded('mysqli')) {
            echo "✅ Extension MySQLi tersedia<br>";
        } else {
            echo "❌ Extension MySQLi TIDAK tersedia<br>";
            return;
        }
        
        // Test koneksi manual
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'mahasiswa';
        
        try {
            $mysqli = new \mysqli($host, $user, $pass, $dbname);
            
            if ($mysqli->connect_error) {
                echo "❌ Koneksi gagal: " . $mysqli->connect_error;
                return;
            }
            
            echo "✅ Koneksi database berhasil!<br>";
            echo "Database: $dbname<br><br>";
            
            // Test query sederhana
            $result = $mysqli->query("SHOW TABLES");
            
            if ($result) {
                echo "<h3>Tabel yang ada:</h3>";
                while ($row = $result->fetch_array()) {
                    echo "- " . $row[0] . "<br>";
                }
                
                // Test query biodata
                echo "<hr><h3>Test tabel biodata:</h3>";
                $result = $mysqli->query("SELECT COUNT(*) as total FROM biodata");
                if ($result) {
                    $count = $result->fetch_assoc();
                    echo "Total data di tabel biodata: " . $count['total'] . "<br>";
                } else {
                    echo "❌ Error: " . $mysqli->error;
                }
                
            } else {
                echo "❌ Error query: " . $mysqli->error;
            }
            
            $mysqli->close();
            
        } catch (Exception $e) {
            echo "❌ Exception: " . $e->getMessage();
        }
    }
}