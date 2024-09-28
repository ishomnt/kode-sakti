<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Throwable;

class CodeController extends Controller
{
    public function executeCode(Request $request)
    {
        if ($request->has('code')) {
            $code = $request->input('code');
            ob_start();
            try {
                eval('?>' . $code);
            } catch (Throwable $t) {
                echo 'Error: ' . htmlspecialchars($t->getMessage());
            }
            $output = ob_get_clean();
            return response($output ?: "Code tidak sesuai.", 200)->header('Content-Type', 'text/plain'); // Return the output
        }

        return response('No code provided', 400);
    }
}
