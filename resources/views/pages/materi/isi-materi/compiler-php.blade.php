

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
    <h1 class="text-center mb-4">PHP Compiler</h1>
    <div class="row">
        <div class="col-md-6">
            <textarea id="phpEditor" placeholder="Masukkan kode PHP di sini..."></textarea>
            <button class="run" onclick="runPHPCode()">Run</button>
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
    fetch('/execute-code?code=' + encodeURIComponent(phpCode))
        .then(response => response.text())
        .then(data => {
            document.getElementById("outputFrame").srcdoc = data; // Set output to iframe
        })
        .catch(error => console.error('Error:', error));
}

</script>

</body>
</html>
