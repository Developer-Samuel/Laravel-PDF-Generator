<?php

namespace App\Http\Controllers;

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
