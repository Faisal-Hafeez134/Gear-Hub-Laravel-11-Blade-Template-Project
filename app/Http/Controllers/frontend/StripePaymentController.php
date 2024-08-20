<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\CartModel;
use Illuminate\Http\Request;





use Session;
use Stripe;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {



        return view('frontend.stripe');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {

        if (session()->has('id')) {
            // Retrieve user's cart items
            $usercart = CartModel::where('customerId', session('id'))->get();

            if ($usercart->isEmpty()) {
                // Handle case where user's cart is empty
                // return "Cart is empty.";
            }

            $bill = 0;

            // Calculate total bill by iterating through each item
            foreach ($usercart as $item) {
                // Assuming $item has 'quantity' and 'price' attributes
                $subtotal = $item->quantity * 9;
                $bill += $subtotal;
            }

            // Optionally, you can format the bill amount
            $formattedBill = number_format($bill, 2); // Format to 2 decimal places if needed

            // Return or use the total bill amount
            // return "Total bill for items in cart: RS " . $formattedBill;
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            Stripe\Charge::create ([
                    "amount" => $bill,
                    "currency" => "usd",
                    "source" => $request->stripeToken,

                    "description" => "Test Charge"
            ]);

            Session::flash('success', 'Payment successful!');

            return back();
        } else {
            // Handle case where user is not logged in
            // return "User is not logged in.";
        }


        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        // Stripe\Charge::create ([
        //         "amount" => $bill,
        //         "currency" => "usd",
        //         "source" => $request->stripeToken,

        //         "description" => "Test Charge"
        // ]);

        // Session::flash('success', 'Payment successful!');

        // return back();
    }
}









// use Session;
// use Stripe;
// class StripePaymentController extends Controller
// {
//        /**
//      * success response method.
//      *
//      * @return \Illuminate\Http\Response
//      */

//     public function stripe(Request $request)
//     {
//         $bill= $request->input('bill');
//         $fullname = $request->input('fullname');
//         $phone = $request->input('phone');
//         $address = $request->input('address');
//         $city = $request->input('city');
//         $email = $request->input('email');

//         $data = compact('bill','fullname','phone','address','city','email');

//         // return view('frontend.product-details')->with($data);


//         return view('frontend.stripe')->with($data);

//     }

//     /**
//      * success response method.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     // public function stripePost(Request $request)
//     // {
//     //     Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


//     //     Stripe\Charge::create ([
//     //             "amount" => 100 * 100,
//     //             "currency" => "usd",
//     //             "source" => $request->stripeToken,
//     //             "description" => "Test payment from itsolutionstuff.com."
//     //     ]);

//     //     Session::flash('success', 'Payment successful!');}


//     //     return back();
//     // }

//     public function stripePost(Request $request)
//     {
//         Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

//         Stripe\Charge::create ([
//                 "amount" => 100 * 100,
//                 "currency" => "usd",
//                 "source" => $request->stripeToken,
//                 "description" => "Test payment from itsolutionstuff.com."
//         ]);

//         Session::flash('success', 'Payment successful!');

//         return back();
//     }

// }

