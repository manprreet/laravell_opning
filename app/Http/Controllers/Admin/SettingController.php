<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Zipcode;
use App\Models\CMS;
use App\Models\User;
use App\Models\RestaurantDetail;
use App\Models\OperatingHour;
Use App\Models\Order;
Use App\Models\OrderDetail;
use App\Models\OrderUserDetail;
use App\Enums\OrderStatus;
use App\Enums\RefundStatus;
use App\Enums\OrderType;
use Auth;
use Hash;
use Response;

class SettingController extends Controller
{
    public function index(Request $request)
    {
        $perPage = isset($request->per_page) ? $request->per_page : 10;

        $zipcodes = $this->getZipcode($perPage);
        $orders = $this->getOrders($perPage);
        $refundRequests = $this->getRefundRequests($perPage);

        $privacy_policy_en = CMS::where('type', 'privacy')->where('lang', 'en')->pluck('content')->first();
        $terms_en = CMS::where('type', 'terms')->where('lang', 'en')->pluck('content')->first();

        $privacy_policy_nl = CMS::where('type', 'privacy')->where('lang', 'nl')->pluck('content')->first();
        $terms_nl = CMS::where('type', 'terms')->where('lang', 'nl')->pluck('content')->first();

        $user = RestaurantDetail::where('user_id', Auth::user()->id)->firstOrFail();
        $operating_days = OperatingHour::all();


        /*echo "<pre>";
        print_r($orders);
        exit;*/
        
        return view('admin.settings.index', [
            'operating_days' => $operating_days,
            'user' => $user,
            'zipcodes' => $zipcodes,
            'privacy_policy_en' => $privacy_policy_en,
            'terms_en' => $terms_en,
            'privacy_policy_nl' => $privacy_policy_nl,
            'terms_nl' => $terms_nl,
            'perPage' => $perPage,

            'orders' => $orders,
            'refundRequests' => $refundRequests
        ]);
    }

    public function getZipcode($perPage)
    {
        $zipcodes = Zipcode::orderBy('id', 'desc')->paginate($perPage);

        return $zipcodes;
    }

    public function deleteZipcode(Request $request)
    {
        try {
            Zipcode::where('id', $request->id)->delete();
        } catch (Exception $e) {
            return response::json(['status' => 0, 'message' => 'Something went wrong.']);
        }
    }

    public function changeStatus(Request $request)
    {
        try {
            $zipcode = Zipcode::find($request->id);
            $zipcode->status = $request->status;
            $zipcode->save();
        } catch (Exception $e) {
            return response::json(['status' => 0, 'message' => 'Something went wrong.']);
        }
    }

    public function saveZipcode(Request $request)
    {
        /*print_r ($request->all());
        exit();*/

        try {

            $result = Zipcode::updateOrCreate(
                ['id' => $request->id],
                $request->all()
            );

            if ($request->id == 0) {

                $id = $result->id;
                $zipcode = "zipcode_" . $id;
                $min_order_price = "min_order_price_" . $id;
                $delivery_charge = "delivery_charge_" . $id;
                $status = "status_" . $id;
                $is_active = $request->status ? 'checked' : '';

                echo "<tr class=zipcode-row-$id>
                    <td>
                      <input type='text' class='form-control text-center w-10r m-auto' value=" . $request->zipcode . " id=" . $zipcode . " readonly />
                    </td>
                    <td class='text-center'>
                      <div class='input-group w-5r m-auto'>
                        <span class='input-group-text' id='basic-addon1'>€</span>
                        <input type='number' class='form-control m-auto' value=" . $request->min_order_price . " id=" . $min_order_price . " readonly />
                      </div>
                    </td>
                    <td class='text-center'>
                      <div class='input-group w-5r m-auto'>
                        <span class='input-group-text' id='basic-addon1'>€</span>
                        <input type='number' class='form-control m-auto' value=" . $request->delivery_charge . " id=" . $delivery_charge . " readonly />
                      </div>
                    </td>
                    <td class='text-center'>
                      <div class='form-check form-switch custom-switch justify-content-center ps-0'>
                        <input class='form-check-input' type='checkbox' role='switch' id=" . $status . " onchange='changeStatus($id)' $is_active>
                      </div>
                    </td>
                    <td class='text-center'>
                      <a class='btn btn-custom-yellow btn-icon me-2' tabindex='0' href='javascript:void(0);' id='zipcode-edit-btn-$id' onclick='editZipcode($id)'>
                        <i class='fa-solid fa-pen-to-square'></i>
                      </a>
                      <a class='btn btn-custom-yellow btn-icon' id='zipcode-remove-btn-$id' onclick='deleteZipcode($id)'>
                        <i class='fa-regular fa-trash-can'></i>
                      </a>

                      <button type='button' class='btn btn-custom-yellow text-uppercase font-sebibold w-100' id='zipcode-save-btn-$id' style='display: none;' onclick='saveZipcode($id)'>Save</button>
                    </td>
                  </tr>";

                exit;
            }
        } catch (Exception $e) {
            return response::json(['status' => 0, 'message' => 'Something went wrong.']);
        }
    }

    public function saveContent(Request $request)
    {
        $content = CMS::where('type', $request->type)->where('lang', $request->lang)->first();
        $content->content = $request->content;
        $content->save();
        exit;
    }

    public function changePassword(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);

        if (!Hash::check($request->old_password, $user->password)) {
            echo 2;
            exit;
        }

        $user->password = Hash::make($request->new_password);

        if ($user->save()) {
            echo 1;
            exit;
        } else {
            return response::json(
                [
                    'status' => 0,
                    'message' => 'Something went wrong.'
                ]
            );
        }
    }

    public function saveProfile(Request $request)
    {
        $user_id = Auth::user()->id;

        $restaurant = RestaurantDetail::whereUserId($user_id)->first();

        if($request->has('image')){
            $restaurantImage = uploadImageToBucket($request, 'restaurant/', '');
            $restaurant->restaurant_logo = $restaurantImage;
        }

        if($request->has('permit-doc')){
            $permitDoc = uploadPermitDocImageToBucket($request, 'restaurant/', '');
            $restaurant->permit_doc = $permitDoc;
        }

        $restaurant->online_order_accept = $request->online_order_accept ? '1' : '0';
        $restaurant->restaurant_name = $request->restaurant_name;
        $restaurant->permit_id = $request->permit_id;
        $restaurant->phone_no = $request->phone_no;
        $restaurant->rest_address = $request->rest_address;
        $restaurant->service_charge = $request->service_charge;
        $restaurant->latitude = $request->latitude;
        $restaurant->longitude = $request->longitude;
        $restaurant->save();

        $owner = User::find($user_id);
        $owner->name = $request->owner_name;
        $owner->save();

        foreach ($request->id as $key => $timeId) {
            $day = OperatingHour::find($timeId);
            $day->start_time = $request->start_time[$key];
            $day->end_time = $request->end_time[$key];
            $day->save();
        }

        return redirect("/settings");
    }

    public function getOrders($perPage)
    {
        $orders = Order::where('is_cart','0')->where('order_status',OrderStatus::Delivered)->orderBy('id','desc')->paginate($perPage);

        return $orders;
    }

    public function getRefundRequests($perPage)
    {
        $refundReq = Order::where('is_cart','0')->where('order_status',OrderStatus::Delivered)->where('refund_status','>=',0)->orderBy('id','desc')->paginate($perPage);

        return $refundReq;
    }

    public function changeRefundStatus(Request $request)
    {
        $order = Order::find($request->order_id);
        $order->refund_status = $request->status;

        $status_text = $request->status == RefundStatus::Rejected ? 'Rejected' : 'Accepted';

        if($request->status == RefundStatus::Accepted && $order->transaction_id)
        {
            $paymentCtrl = new \App\Http\Controllers\User\WebhookController;
            $result = $paymentCtrl->refundPayment($order->transaction_id,$order->total_amount);

            if(!empty($result) && isset($result->status) && $result->status == 'succeeded')
            {
                if($order->save())
                {
                    return response::json(['status' => 1, 'message' => '','data' => ['status_text' => $status_text]]);
                }
            }
            else
            {
                return $result;
            }
        }

        if($order->save())
        {
            return response::json(['status' => 1, 'message' => '','data' => ['status_text' => $status_text]]);
        }

        return response::json(['status' => 0, 'message' => 'Something went wrong.']);
    }

    
}
