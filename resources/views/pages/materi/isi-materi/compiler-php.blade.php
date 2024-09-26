<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['code'])) {
    $code = $_GET['code'];
    ob_start();
    try {
        eval('?>' . $code);
    } catch (Throwable $t) {
        echo 'Error: ' . htmlspecialchars($t->getMessage());
    }
    $output = ob_get_clean();
    echo $output ? htmlspecialchars($output) : "Code tidak sesuai.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>PHP Compiler</title>
    <style>
        body {
            padding: 20px;
            background-color: #f4f4f4;
        }

        .editor-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        textarea {
            width: 100%;
            height: 400px;
            padding: 10px;
            font-family: monospace;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: none;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        iframe {
            width: 100%;
            height: 400px;
            border: 1px solid #ccc;
            margin-top: 20px;
            background-color: white;
            border-radius: 4px;
        }

        .output-title {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-radius: 4px 4px 0 0;
            text-align: center;
        }

        @media (max-width: 768px) {
            .row {
                flex-direction: column;
            }
            .col-md-6 {
                margin: 0;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

<div class="editor-container">
    <h1 class="text-center mb-4">PHP Compiler</h1>
    <div class="row">
        <div class="col-md-6">
            <textarea id="phpEditor" placeholder="Masukkan kode PHP di sini..."></textarea>
            <button onclick="runPHPCode()">Run</button>
        </div>
        <div class="col-md-6">
            <div class="output-title">Output</div>
            <iframe class="m-0" id="outputFrame"></iframe>
        </div>
    </div>
</div>

<script>
    function runPHPCode() {
        var phpCode = document.getElementById("phpEditor").value;
        fetch(window.location.href + '?code=' + encodeURIComponent(phpCode))
        .then(response => response.text())
        .then(data => {
            document.getElementById("outputFrame").srcdoc = data; 
        })
        .catch(error => console.error('Error:', error));
    }
</script>

</body>
</html>
