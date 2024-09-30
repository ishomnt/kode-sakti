<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.7/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.7/theme/default.min.css">
    <link rel="stylesheet" href="{{ asset('css/compiler.css') }}">

</head>

<body>

    <div class="editor-container">
        <h2 class="text-center mb-4">Compiler</h2>
        <div class="row">
            <div class="col-md-6">
                <textarea id="codeEditor" placeholder="Masukkan kode HTML, CSS, dan JavaScript di sini..."></textarea>
                <button class="run" onclick="runCode()">Run</button>
                <a style="text-decoration: none; color:white" href="{{ route('chatbot') }}"><button
                        class="run">ChatBot</button></a>
            </div>
            <div class="col-md-6">
                <div class="output-title">Output</div>
                <iframe class="m-0" id="outputFrame"></iframe>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.7/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.7/mode/javascript/javascript.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.7/mode/css/css.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.7/mode/xml/xml.min.js"></script>

    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById("codeEditor"), {
            mode: "text/html",
            theme: "default",
            lineNumbers: true,
            matchBrackets: true,
            autoCloseBrackets: true,
            autoCloseTags: true
        });


        function runCode() {
            var fullCode = editor.getValue();

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
