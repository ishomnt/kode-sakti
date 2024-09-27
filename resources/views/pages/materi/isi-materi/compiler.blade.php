<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/compiler.css')}}">
</head>
<body>

<div class="editor-container">
    <h2 class="text-center mb-4">Compiler</h2>
    <div class="row">
        <div class="col-md-6">
            <textarea id="codeEditor" placeholder="Masukkan kode HTML, CSS, dan JavaScript di sini..."></textarea>
            <button class="run" onclick="runCode()">Run</button>
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
