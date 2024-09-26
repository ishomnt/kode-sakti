    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HTML, CSS, JavaScript Compiler Satu TextArea</title>
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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
            iframe {
                width: 100%;
                height: 400px;
                border: 1px solid #ccc;
                margin-top: 20px;
                background-color: white;
                border-radius: 4px;
            }
            h1 {
                color: #333;
            }
        </style>
    </head>
    <body>

    <h1>HTML, CSS, JavaScript Compiler</h1>
    <h3>Masukkan HTML, CSS, dan JavaScript</h3>

    <div class="row">
        <div class="col-md-6">
            <!-- Input HTML, CSS, dan JavaScript -->
            <textarea id="codeEditor" placeholder="Masukkan kode HTML, CSS, dan JavaScript di sini..."></textarea>
            <button onclick="runCode()">Run</button>
        </div>
        <div class="col-md-6">
            <iframe class="m-0" id="outputFrame"></iframe>
        </div>
    </div>
    <!-- Tombol untuk menjalankan kode -->

    <!-- Tempat untuk menampilkan hasil -->

    <script>
        function runCode() {
            // Ambil kode dari textarea
            var fullCode = document.getElementById("codeEditor").value;

            // Cek apakah kode CSS ada di dalam tag <style>
            var cssCode = fullCode.match(/<style[^>]*>([\s\S]*?)<\/style>/i);
            cssCode = cssCode ? "<style>" + cssCode[1] + "</style>" : "";

            // Cek apakah kode JavaScript ada di dalam tag <script>
            var jsCode = fullCode.match(/<script[^>]*>([\s\S]*?)<\/script>/i);
            jsCode = jsCode ? "<script>" + jsCode[1] + "<\/script>" : "";

            // Ambil kode HTML (di luar tag <style> dan <script>)
            var htmlCode = fullCode.replace(/<style[^>]*>([\s\S]*?)<\/style>/i, "")
                                .replace(/<script[^>]*>([\s\S]*?)<\/script>/i, "");

            // Gabungkan kode HTML, CSS, dan JavaScript
            var outputCode = htmlCode + cssCode + jsCode;

            // Tampilkan output di iframe
            var outputFrame = document.getElementById("outputFrame");
            outputFrame.srcdoc = outputCode;
        }
    </script>

    </body>
    </html>
