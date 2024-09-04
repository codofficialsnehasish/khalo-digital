<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Session;

use App\Models\CFPGPayment;

class CashfreePaymentController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function create(Request $request)
    {
        return view('payment-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:50|regex:/^[a-zA-Z\s]+$/',
            'mobile' => 'required|digits:10|regex:/^[6789]/|',
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $payment = new CFPGPayment();
        $payment->name = $request->name;
        $payment->mobile = $request->mobile;
        $payment->email = $request->email;
        $payment->amount = 199;
        $payment->order_id = 'order_' . rand(1111111111, 9999999999);
        $payment->payment_status = 'Active';
        if ($request->hasFile('payment_proof')) {
            $img = $request->file('payment_proof');
            $filename = time(). '_' .$img->getClientOriginalName();
            $directory = public_path('web_directory/payment_proof');
            $img->move($directory, $filename);
            $filePath = "web_directory/payment_proof/".$filename;
            $payment->payment_proof = $filePath;
        }
        $res = $payment->save();
        if($res){
            return redirect()->route('payment-success');
        }else{
            return back()->with('error','Try Again!');
        }

    }

    public function pay(){
        return view('pay');
    }

    public function payment_success(){
        // return "payment success";
        return view('payment_success');
    }

    public function success(Request $request)
    {
        $url = "https://sandbox.cashfree.com/pg/orders/".$request->order_id;

        $headers = array(
            "Content-Type: application/json",
            "x-api-version: 2022-01-01",
            "x-client-id: " . env('CASHFREE_API_KEY'),
            "x-client-secret: " . env('CASHFREE_API_SECRET')
        );

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $resp = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($resp);
        // return $response->customer_details->customer_id;die;
        // return $response;die;
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }

        if ($response->order_status === 'PAID') {
            $payment = new CFPGPayment();
            $payment->name = $response->customer_details->customer_name;
            $payment->mobile = $response->customer_details->customer_phone;
            $payment->email = $response->customer_details->customer_email;
            $payment->amount = $response->order_amount;
            $payment->order_id = $response->order_id;
            $payment->payment_status = $response->order_status;
            $payment->payment_link = $response->payment_link;
            $payment->save();
            session(['payment_success' => true]);
            return view('success');
        } else {
            return abort(403, 'Unauthorized access');
        }
    }

    public function download_app(){
        if (session()->has('payment_success') && session('payment_success') === true) {
            $filename = 'base.apk';
            $filePath = storage_path('app/public/download/' . $filename);
            if (file_exists($filePath)) {
                return Response::download($filePath, $filename, [
                    'Content-Type' => 'application/vnd.android.package-archive',
                    'Content-Length: ' . filesize($filePath)
                ]);
            } else {
                return abort(404, 'Data Not Found');
            }
        }else{
            return abort(403, 'Unauthorized access');
        }
    }

    public function download_color_pdf(){
        if (session()->has('payment_success') && session('payment_success') === true) {
            $filename = 'COLOR PREDICTION CHART PATTERN PDF.pdf';
            $filePath = storage_path('app/public/download/' . $filename);
            if (file_exists($filePath)) {
                return Response::download($filePath, $filename, [
                    'Content-Type' => 'application/vnd.android.package-archive',
                    'Content-Length: ' . filesize($filePath)
                ]);
            } else {
                return abort(404, 'Data Not Found');
            }
        }
        return abort(403, 'Unauthorized access');
    }

    public function download_demo_ac_pdf(){
        if (session()->has('payment_success') && session('payment_success') === true) {
            $filename = 'DEMO ACCOUNT ID & PASSWORD.pdf';
            $filePath = storage_path('app/public/download/' . $filename);
            if (file_exists($filePath)) {
                return Response::download($filePath, $filename, [
                    'Content-Type' => 'application/vnd.android.package-archive',
                    'Content-Length: ' . filesize($filePath)
                ]);
            } else {
                return abort(404, 'Data Not Found');
            }
        }
        return abort(403, 'Unauthorized access');
    }

    public function download_gift_pdf(){
        if (session()->has('payment_success') && session('payment_success') === true) {
            $filename = 'GIFT CODES.pdf';
            $filePath = storage_path('app/public/download/' . $filename);
            if (file_exists($filePath)) {
                return Response::download($filePath, $filename, [
                    'Content-Type' => 'application/vnd.android.package-archive',
                    'Content-Length: ' . filesize($filePath)
                ]);
            } else {
                return abort(404, 'Data Not Found');
            }
        }
        return abort(403, 'Unauthorized access');
    }

    public function terms_and_conditions(){
        return view('terms_and_conditions');
    }
}