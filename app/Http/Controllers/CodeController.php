<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Throwable;

class CodeController extends Controller
{
    public function executeCode(Request $request)
    {
        // Check if 'code' is present in the request
        if ($request->has('code')) {
            $code = $request->input('code');
            ob_start(); // Start output buffering
            try {
                eval('?>' . $code); // Evaluate the PHP code
            } catch (Throwable $t) {
                echo 'Error: ' . htmlspecialchars($t->getMessage()); // Catch and display errors
            }
            $output = ob_get_clean(); // Get the output from the buffer
            return response($output ?: "Code tidak sesuai.", 200)->header('Content-Type', 'text/plain'); // Return the output
        }

        return response('No code provided', 400); // Handle missing code
    }
}
