<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use App\Services\PDFService;

class PDFController
{
    public static function generate()
    {
        try {
            $pdf = PDFService::generate();
            return response()->download($pdf)->deleteFileAfterSend(true);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to generate PDF.']);
        }
    }
}
