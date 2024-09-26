<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML, CSS, JavaScript Compiler</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: stretch;
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

        .col-md-6 {
            flex: 1;
            margin: 0 10px;
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
    <h2 class="text-center mb-4">Compiler</h2>
    <div class="row">
        <div class="col-md-6">
            <textarea id="codeEditor" placeholder="Masukkan kode HTML, CSS, dan JavaScript di sini..."></textarea>
            <button onclick="runCode()">Run</button>
        </div>
        <div class="col-md-6">
            <div class="output-title">Output</div>
            <iframe class="m-0" id="outputFrame"></iframe>
        </div>
    </div>
</div>

<script>
    function runCode() {
        var fullCode = document.getElementById("codeEditor").value;

        var cssCode = fullCode.match(/<style[^>]*>([\s\S]*?)<\/style>/i);
        cssCode = cssCode ? "<style>" + cssCode[1] + "</style>" : "";

        var jsCode = fullCode.match(/<script[^>]*>([\s\S]*?)<\/script>/i);
        jsCode = jsCode ? "<script>" + jsCode[1] + "<\/script>" : "";

        var htmlCode = fullCode.replace(/<style[^>]*>([\s\S]*?)<\/style>/i, "")
                                .replace(/<script[^>]*>([\s\S]*?)<\/script>/i, "");

        var outputCode = htmlCode + cssCode + jsCode;

        var outputFrame = document.getElementById("outputFrame");
        outputFrame.srcdoc = outputCode;
    }
</script>

</body>
</html>
