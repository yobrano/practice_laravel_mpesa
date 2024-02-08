<?php

namespace App\Http\Controllers\payments\mpesa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mpesa;

class MPESAController extends Controller
{
    public function stk(Request $request)
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $request->validate([
            "phone_number",
            "amount"
        ]);

        $BusinessShortCode = env("MPESA_SHORTCODE");
        $LipaNaMpesaPasskey = env("MPESA_PASSKEY");
        $TransactionType = "CustomerPayBillOnline";
        $Amount = $request["amount"];
        $PartyA = $request["phone_number"];
        $PartyB = env("MPESA_SHORTCODE");
        $PhoneNumber = $request["phone_number"];
        $CallBackURL = "https://alquin.co.ke";
        $AccountReference = "This is a drill (don't enter pin)";
        $TransactionDesc = "TransactionDesc";
        $Remarks = "Remarks";
        
        $stkPushSimulation = $mpesa->STKPushSimulation(
            $BusinessShortCode,
            $LipaNaMpesaPasskey,
            $TransactionType,
            $Amount,
            $PartyA,
            $PartyB,
            $PhoneNumber,
            $CallBackURL,
            $AccountReference,
            $TransactionDesc,
            $Remarks
        );

        dd($stkPushSimulation);
    }
}
