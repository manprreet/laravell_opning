<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Zipcode;
use App\Models\CMS;

class SettingController extends Controller
{
    public function index()
    {
        $zipcodes = $this->getZipcode();

        $privacy_policy_en = CMS::where('type','privacy')->where('lang','en')->pluck('content')->first();
        $terms_en = CMS::where('type','terms')->where('lang','en')->pluck('content')->first();

        $privacy_policy_nl = CMS::where('type','privacy')->where('lang','nl')->pluck('content')->first();
        $terms_nl = CMS::where('type','terms')->where('lang','nl')->pluck('content')->first();

        return view('admin.settings.index', ['zipcodes' => $zipcodes, 'privacy_policy_en' => $privacy_policy_en, 'terms_en' => $terms_en, 'privacy_policy_nl' => $privacy_policy_nl, 'terms_nl' => $terms_nl]);
    }

    public function getZipcode()
    {
        $zipcodes = Zipcode::orderBy('id', 'desc')->get();

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

        try 
        {

            $result = Zipcode::updateOrCreate(
                ['id' => $request->id],
                $request->all()
            );

            if($request->id == 0)
            {

                $id = $result->id;
                $zipcode = "zipcode_".$id;
                $min_order_price = "min_order_price_".$id;
                $delivery_charge = "delivery_charge_".$id;
                $status = "status_".$id;
                $is_active = $request->status ? 'checked':'';

                echo "<tr class=zipcode-row-$id>
                    <td>
                      <input type='text' class='form-control text-center w-10r m-auto' value=".$request->zipcode." id=".$zipcode." readonly />
                    </td>
                    <td class='text-center'>
                      <div class='input-group w-5r m-auto'>
                        <span class='input-group-text' id='basic-addon1'>€</span>
                        <input type='number' class='form-control m-auto' value=".$request->min_order_price." id=".$min_order_price." readonly />
                      </div>
                    </td>
                    <td class='text-center'>
                      <div class='input-group w-5r m-auto'>
                        <span class='input-group-text' id='basic-addon1'>€</span>
                        <input type='number' class='form-control m-auto' value=".$request->delivery_charge." id=".$delivery_charge." readonly />
                      </div>
                    </td>
                    <td class='text-center'>
                      <div class='form-check form-switch custom-switch justify-content-center ps-0'>
                        <input class='form-check-input' type='checkbox' role='switch' id=".$status." onchange='changeStatus($id)' $is_active>
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
        } 
        catch (Exception $e) 
        {
            return response::json(['status' => 0, 'message' => 'Something went wrong.']);
        }
    }

    public function saveContent(Request $request)
    {
        $content = CMS::where('type',$request->type)->where('lang',$request->lang)->first();
        $content->content = $request->content;
        $content->save();
        exit;
    }
}
