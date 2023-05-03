<?php

namespace App\Http\Controllers;
use App\Models\TaxDetail;
use App\Models\OtherTaxDetail;
use App\Models\Residential;
use App\Models\currenttaxdetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class taxdetailController extends Controller
{
    public function TaxDetailStore(Request $request, $id)
    {
        $taxdetail = new TaxDetail();

        $taxdetail->resident_id = $id;
        $taxdetail->plot_area = $request->plot_area;
        $taxdetail->property_type = $request->type_of_Property;
        $taxdetail->uses_factor = $request->uses_factor;
        $taxdetail->floor = $request->floor;
        $taxdetail->construction_type = $request->construction_type;
        $taxdetail->constructed_area = $request->construction_area;
        $taxdetail->rate = $request->rate;
        // $property_value = ($request->construction_area * $request->rate);
        $taxdetail->value = $request->value;
        // $descountedvalue = ($property_value/100*10);
        $taxdetail->dicount = $request->discount;
        // $taxable_property_value = ($property_value - $descountedvalue);
        $taxdetail->taxable_property = $request->taxable_property;
        $taxdetail->save();

        Alert::success('Successfully Added Property Tax Details');
        return back();
    }


    public function otherTaxDetailStore(Request $request, $id)
    {
        $Ohertaxdetail = new OtherTaxDetail();

        $Ohertaxdetail->resident_id = $id;
        $Ohertaxdetail->year = $request->year_from.' - '.$request->year_to;
        $Ohertaxdetail->Property_tax = $request->property_tax;
        $Ohertaxdetail->consolidated_tax = $request->consolidated_tax;
        $Ohertaxdetail->urban_dev_tax = $request->urben_dev_tax;
        $Ohertaxdetail->education_tax = $request->education_tax;
        $Ohertaxdetail->service_tax = $request->service_tax;
        $Ohertaxdetail->water_tax = $request->water_tax;
        $Ohertaxdetail->garbage_tax = $request->garbade_fee;
        $Ohertaxdetail->rebate = $request->rebate;
        $Ohertaxdetail->surcharge_fee = $request->surcharge_fee;
        $Ohertaxdetail->advance_deposit = $request->advance_deposit;
        $Ohertaxdetail->total = $request->total;

        $Ohertaxdetail->save();

        Alert::success('Successfully Added Other Tax Details');
        return back();
    }


    public function LandscapeReciept($id)
    {
        $page_title = 'Reciept';
        $taxdetails = TaxDetail::where('resident_id',$id)->get();
        $otherTax = OtherTaxDetail::where('resident_id',$id)->get();

        $Property_Tax_Sum = OtherTaxDetail::where('resident_id',$id)->sum('Property_tax');
        $consolidated_tax_sum = OtherTaxDetail::where('resident_id',$id)->sum('consolidated_tax');
        $urban_dev_tax_sum = OtherTaxDetail::where('resident_id',$id)->sum('urban_dev_tax');
        $education_tax_sum = OtherTaxDetail::where('resident_id',$id)->sum('education_tax');
        $service_tax_sum = OtherTaxDetail::where('resident_id',$id)->sum('service_tax');
        $water_tax_sum = OtherTaxDetail::where('resident_id',$id)->sum('water_tax');
        $garbage_tax_sum = OtherTaxDetail::where('resident_id',$id)->sum('garbage_tax');
        $rebate_sum = OtherTaxDetail::where('resident_id',$id)->sum('rebate');
        $surcharge_fee_sum = OtherTaxDetail::where('resident_id',$id)->sum('surcharge_fee');
        $advance_deposit_sum = OtherTaxDetail::where('resident_id',$id)->sum('advance_deposit');
        $total_sum = OtherTaxDetail::where('resident_id',$id)->sum('total');

        $data = Residential::findOrFail($id);
        return view('landscapeReciept', compact('page_title','data','taxdetails','otherTax','Property_Tax_Sum','consolidated_tax_sum','urban_dev_tax_sum','education_tax_sum','service_tax_sum','water_tax_sum','garbage_tax_sum','rebate_sum','surcharge_fee_sum','advance_deposit_sum','total_sum'
        ));
    }

    public function PotraitReciept($id)
    {
        $page_title = 'Reciept';
        $taxdetails = TaxDetail::where('resident_id',$id)->first();
        $otherTax = OtherTaxDetail::where('resident_id',$id)->first();

        $data = Residential::findOrFail($id);
        return view('potraitreciept', compact('page_title','data','taxdetails','otherTax'
        ));
    }

    public function mainReciept($id)
    {
        $page_title = 'Reciept';
        $taxdetails = TaxDetail::where('resident_id',$id)->first();
        $otherTax = OtherTaxDetail::where('resident_id',$id)->first();
        $currentTax = currenttaxdetail::findOrFail(1);
        $Property_Tax_Sum = OtherTaxDetail::where('resident_id',$id)->sum('Property_tax')+$currentTax->Property_tax;
        $consolidated_tax_sum = OtherTaxDetail::where('resident_id',$id)->sum('consolidated_tax')+$currentTax->consolidated_tax;
        $urban_dev_tax_sum = OtherTaxDetail::where('resident_id',$id)->sum('urban_dev_tax')+$currentTax->urban_dev_tax;
        $education_tax_sum = OtherTaxDetail::where('resident_id',$id)->sum('education_tax')+$currentTax->education_tax;
        $service_tax_sum = OtherTaxDetail::where('resident_id',$id)->sum('service_tax')+$currentTax->service_tax;
        $water_tax_sum = OtherTaxDetail::where('resident_id',$id)->sum('water_tax')+$currentTax->water_tax;
        $garbage_tax_sum = OtherTaxDetail::where('resident_id',$id)->sum('garbage_tax')+$currentTax->garbage_tax;
        $rebate_sum = OtherTaxDetail::where('resident_id',$id)->sum('rebate')+$currentTax->rebate;
        $surcharge_fee_sum = OtherTaxDetail::where('resident_id',$id)->sum('surcharge_fee')+$currentTax->surcharge_fee;
        $advance_deposit_sum = OtherTaxDetail::where('resident_id',$id)->sum('advance_deposit')+$currentTax->advance_deposit;
        $total_sum = OtherTaxDetail::where('resident_id',$id)->sum('total')+$currentTax->total;

        $data = Residential::findOrFail($id);

        return view('mainreciept', compact('page_title','data','taxdetails','otherTax','Property_Tax_Sum','consolidated_tax_sum','urban_dev_tax_sum','education_tax_sum','service_tax_sum','water_tax_sum','garbage_tax_sum','rebate_sum','surcharge_fee_sum','advance_deposit_sum','total_sum','currentTax'
        ));
    }
}
