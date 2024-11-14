<?php

namespace App\Services;

class PDFService
{
    public static function generate()
    {
        $data = DataService::prepareData();

        $html = view('pdf.invoice', $data)->render();

        $pdf = app('snappy.pdf.wrapper');
        $pdf->setTemporaryFolder(storage_path('temp'));
        $pdf->setPaper('a4');
        $filename = 'invoice.pdf';
        $path = storage_path('invoices') . '/' . $filename;

        if (file_exists($path)) {
            unlink($path);
        }

        $pdf->generateFromHtml($html, $path);

        return $path;
    }
}
