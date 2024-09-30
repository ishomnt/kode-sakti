<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.7/theme/default.min.css">
    <link rel="stylesheet" href="{{ asset('css/compiler.css') }}">
</head>
<body>

<div class="editor-container">
    <h1 class="text-center mb-4">PHP Compiler</h1>
    <div class="row">
        <div class="col-md-6">
            <div id="phpEditor"></div>
            <div class="row">
                <div class="col-md-6">
                    <button class="run" onclick="runPHPCode()">Run</button>
                    <a style="text-decoration: none; color:white" href="{{ route('chatbot') }}"><button class="chatbot">ChatBot</button></a>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="output-title">Output</div>
            <iframe class="m-0" id="outputFrame"></iframe>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/mode/php/php.min.js"></script>
<script>
    var editor = CodeMirror(document.getElementById("phpEditor"), {
        mode: "text/x-php",
        lineNumbers: true,
        theme: "default",
    });

    function runPHPCode() {
        var phpCode = editor.getValue();
        fetch('/execute-code?code=' + encodeURIComponent(phpCode))
            .then(response => response.text())
            .then(data => {
                document.getElementById("outputFrame").srcdoc = data;
            })
            .catch(error => console.error('Error:', error));
    }
</script>

</body>
</html>
