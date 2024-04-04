<?php

namespace App\Http\Controllers\Backend\Stup;

use App\Http\Controllers\Controller;
use App\Models\FeeAmountCategory;
use App\Models\FeeCategory;
use App\Models\StudentClass;
use Illuminate\Http\Request;

class FeeAmountController extends Controller
{
    public function ViewFeeAmount()
    {

        // $data['allData'] = FeeAmountCategory::all();
        $data['allData'] = FeeAmountCategory::select('fee_category_id')->groupBy('fee_category_id')->get();
        return view('backend.setup.fee_amount.view_fee_amount', $data);

    }

    public function AddAmount()
    {
        $data['fee_categories'] = FeeCategory::all();
        $data['classes'] = StudentClass::all();
        return view('backend.setup.fee_amount.add_fee_amount', $data);
    }

    public function StoreFeeAmount(Request $request)
    {
        $ountClass = count($request->class_id);
        if ($ountClass != NULL) {
            for ($i = 0; $i < $ountClass; $i++) {
                $fee_amount = new FeeAmountCategory();
                $fee_amount->fee_category_id = $request->fee_category_id;
                $fee_amount->class_id = $request->class_id[$i];
                $fee_amount->amount = $request->amount[$i];
                $fee_amount->save();

            }

        }

        $notification = array(
            'message' => 'Fee Amount Inserted Successfully ',
            'alert-type' => 'info'

        );
        return redirect()->route('fee.amount.view')->with($notification);

    }

    public function EditFeeAmount($fee_category_id)
    {
        $data['editData'] = FeeAmountCategory::where('fee_category_id', $fee_category_id)->orderBy('class_id', 'asc')->get();
        // dd($data['editData']->toArray());

        $data['fee_categories'] = FeeCategory::all();
        $data['classes'] = StudentClass::all();
        return view('backend.setup.fee_amount.edit_fee_amount', $data);
    }


    public function UpdateFeeAmount(Request $request, $fee_category_id)
    {

        if ($request->class_id == NULL) {
            $notification = array(
                'message' => 'Sorry You not select any class amount ',
                'alert-type' => 'error'
            );
            return redirect()->route('fee.amount.edit', $fee_category_id)->with($notification);

        } else {
            $ountClass = count($request->class_id);
            FeeAmountCategory::where('fee_category_id', $fee_category_id)->delete();
            for ($i = 0; $i < $ountClass; $i++) {
                $fee_amount = new FeeAmountCategory();
                $fee_amount->fee_category_id = $request->fee_category_id;
                $fee_amount->class_id = $request->class_id[$i];
                $fee_amount->amount = $request->amount[$i];
                $fee_amount->save();

            }

        }

        $notification = array(
            'message' => 'Data Updated Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('fee.amount.view')->with($notification);
    }


    public function DetailsFeeAmount($fee_category_id)
    {
        $data['detailsData'] = FeeAmountCategory::where('fee_category_id', $fee_category_id)->orderBy('class_id', 'asc')->get();

        return view('backend.setup.fee_amount.details_fee_amount', $data);

    }

}
