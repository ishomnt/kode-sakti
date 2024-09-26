<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['code'])) {
    // Ambil kode PHP dari permintaan POST
    $code = $_POST['code'];

    // Mulai output buffering
    ob_start();

    // Gunakan eval() untuk mengeksekusi kode PHP
    try {
        eval('?>' . $code);
    } catch (Throwable $t) {
        // Tangkap kesalahan dan tampilkan pesan kesalahan
        echo 'Error: ' . htmlspecialchars($t->getMessage());
    }

    // Ambil output dan bersihkan buffer
    $output = ob_get_clean();

    // Kembalikan output atau pesan kesalahan
    echo $output ? htmlspecialchars($output) : "No output.";
    exit; // Hentikan eksekusi lebih lanjut setelah mengembalikan output
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Compiler</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
        }
        textarea {
            width: 100%;
            height: 250px;
            margin-bottom: 20px;
            padding: 10px;
            font-family: monospace;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
        }
        button:hover {
            background-color: #45a049;
        }
        #output {
            border: 1px solid #ccc;
            background-color: white;
            padding: 10px;
            border-radius: 4px;
            margin-top: 20px;
        }
        h1 {
            color: #333;
        }
    </style>
</head>
<body>

<h1>PHP Compiler</h1>

<!-- Input PHP Code -->
<h3>Masukkan kode PHP</h3>
<textarea id="phpEditor" placeholder="Masukkan kode PHP di sini..."></textarea>

<!-- Button to run code -->
<button onclick="runPHPCode()">Run</button>

<!-- Output display area -->
<div id="output"></div>

<script>
    function runPHPCode() {
        // Ambil kode PHP dari textarea
        var phpCode = document.getElementById("phpEditor").value;

        // Kirim PHP code ke file yang sama
        fetch(window.location.href, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'code=' + encodeURIComponent(phpCode)
        })
        .then(response => response.text())
        .then(data => {
            // Tampilkan output PHP
            document.getElementById("output").innerHTML = `<pre>${data}</pre>`;
        })
        .catch(error => console.error('Error:', error));
    }
</script>

</body>
</html>
