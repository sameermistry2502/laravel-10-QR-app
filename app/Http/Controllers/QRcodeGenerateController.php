<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRcodeGenerateController extends Controller
{
    // QR code generation
    public function qrcode(){
        $qrCodes = [];
        $qrCodes['simple']        = QrCode::size(150)->generate('https://github.com/sameermistry2502');
        $qrCodes['changeColor']   = QrCode::size(150)->color(255, 0, 0)->generate('https://github.com/sameermistry2502');
        $qrCodes['changeBgColor'] = QrCode::size(150)->backgroundColor(255, 0, 0)->generate('https://github.com/sameermistry2502');
        $qrCodes['styleDot']      = QrCode::size(150)->style('dot')->generate('https://github.com/sameermistry2502');
        $qrCodes['styleSquare']   = QrCode::size(150)->style('square')->generate('https://github.com/sameermistry2502');
        $qrCodes['styleRound']    = QrCode::size(150)->style('round')->generate('https://github.com/sameermistry2502');
        return view('qrcode',$qrCodes);
    }
}
