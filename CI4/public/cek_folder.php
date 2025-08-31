<?php
echo "<h2>Cek Folder Controllers</h2>";

// Path yang benar dari folder public
$path = __DIR__ . '/../app/Controllers/';
echo "Path: " . $path . "<br><br>";

if (is_dir($path)) {
    echo "✅ Folder Controllers ADA<br>";
    
    if (is_readable($path)) {
        echo "✅ Folder Controllers BISA DIBACA<br><br>";
        
        echo "<h3>File-file di Controllers:</h3>";
        $files = scandir($path);
        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                echo "- " . $file . "<br>";
            }
        }
    } else {
        echo "❌ Folder Controllers TIDAK BISA DIBACA<br>";
    }
} else {
    echo "❌ Folder Controllers TIDAK ADA<br>";
}
?>