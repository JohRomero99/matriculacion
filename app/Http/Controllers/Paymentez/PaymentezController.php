<?php

namespace App\Http\Controllers\Paymentez;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Paymentez\Paymentez;
use Paymentez\Exceptions\PaymentezErrorException;

class PaymentezController extends Controller
{
    // public function paymentezd(){

    //     Paymentez::init($applicationCode, $aplicationKey);

    //     $card = Paymentez::card();

    //     // Success response
    //     $userId = "1";
    //     $listOfUserCards = $card->getList($userId);

    //     $totalSizeOfCardList = $listOfUserCards->result_size;
    //     $listCards = $listOfUserCards->cards;

    //     // Get all data of response
    //     $response = $listOfUserCards->getData();

    //     // Catch fail response
    //     try {
    //         $listOfUserCards = $card->getList("someUID");
    //     } catch (PaymentezErrorException $error) {
    //         // Details of exception
    //         echo $error->getMessage();
    //         // You can see the logs for complete information
    //     }

    // }

    public function paymentez(){

        return view('paymentez.paymentez');

    }
}
