<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Mail\DownloadLinkMail;
use Illuminate\Support\Facades\Mail;

use App\Models\CFPGPayment;

class ShowPayments extends Controller
{
    public function index(){
        $payments = CFPGPayment::all();
        return view('admin.payments.index',compact('payments'));
    }

    public function requests_payments(){
        $payments = CFPGPayment::where('payment_status','Active')->get();
        return view('admin.payments.requests',compact('payments'));
    }

    public function approve_payment(string $id){
        $pay = CFPGPayment::find($id);
        $pay->payment_status = 'Paid';
        $res = $pay->update();

        $details = [
            'name' => $pay->name,
            'download_link' => route('download-khalo-digital-content') . '?order_id=' . $pay->order_id,
            'email' => $pay->email,
            'message' => 'Please check this email',
        ];

        if(!empty($pay->email)){
            try {
                Mail::to($pay->email)->send(new DownloadLinkMail($details));
                return redirect()->back()->with('success','Payment Approved and Mail Send Successfully');
            } catch (\Exception $e) {
                return redirect()->back()->with('error',$e->getMessage());
            }
        }else{
            return redirect()->back()->with('success','Payment Approved & Mail Not Send');
        }

    }

    public function download_khalo_digital_content(Request $request){
        // return $request->order_id;
        if(!empty($request->order_id)){
            $order = CFPGPayment::where('order_id',$request->order_id)->first();
            if($order){
                if($order->payment_status == 'Paid'){
                    $order->is_downloaded = 1;
                    $order->update();
                    session(['payment_success' => true]);
                    return view('success');
                }elseif($order->payment_status == 'Active'){
                    return redirect()->route('index')->with('error','Payment Under Processing, Please Try Again Later');
                }
            }else {
                return abort(403, 'Unauthorized access');
            }
        }else {
            return abort(403, 'Unauthorized access');
        }
    }

    public function delete_payment(string $id){
        $pay = CFPGPayment::find($id);
        $res = $pay->delete();
        if($res){
            return redirect()->back()->with('success','Payment Deleted Successfully');
        }else{
            return redirect()->back()->with('error','Payment Not Deleted');
        }
    }
}
