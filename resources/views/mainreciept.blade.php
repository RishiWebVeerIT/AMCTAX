@extends('layouts.master')
@section('page-title', $page_title)
@section('section')
    <div class="pd-60px" id="mainRecieptPrint">
        <div class="text-center">
            <div class="text-center">
                <p class="h3">Muncipal Corporation Amravati</p>
                <p class="h4">Property Tax Assessment Department</p>
                <p class="h5">Year Date {{$currentTax->dateFrom}} To Date {{$currentTax->dateTo}}</p>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <table class="mainrecieptt">
                    <tr>
                        <td>Bill No. </td>
                        <td>: 999999</td>
                    </tr>
                    <tr>
                        <td>Bill Date </td>
                        <td>: {{ date('d') }}-{{ date('m') }}-{{ date('y') }}</td>
                    </tr>
                    <tr>
                        <td>Zone / ward</td>
                        <td>: {{ $data->address->zone . ' / ' . $data->address->ward }}</td>
                    </tr>
                    <tr>
                        <td>Area</td>
                        <td>: Badkas Square</td>
                    </tr>
                    <tr>
                        <td>Plot Area</td>
                        <td>: {{ $taxdetails->plot_area }}</td>
                    </tr>
                    <tr>
                        <td>Mobile </td>
                        <td>: {{ $data->mobile_no }}</td>
                    </tr>
                    <tr>
                        <td>Owner</td>
                        <td>: {{ $data->firstname . ' ' . $data->middlename . ' ' . $data->lastname }}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>: {{ $data->address->address . ' ' . $data->address->city . ' ' . $data->address->zip }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-6">
                <table class="mainrecieptt">
                    <tr>
                        <td>New Property ID</td>
                        <td>: {{ $data->new_property_id }}</td>
                    </tr>
                    <tr>
                        <td>Old Property ID</td>
                        <td>: {{ $data->old_property_id }}</td>
                    </tr>
                    <tr>
                        <td>Uses Factor</td>
                        <td>: {{ $data->uses_factor }}</< /td>
                    </tr>
                    <tr>
                        <td>Tax with Resident</td>
                        <td>: 14000.00</td>
                    </tr>
                    <tr>
                        <td>Tax without Resident</td>
                        <td>: 00.00</td>
                    </tr>
                    <tr>
                        <td>Taxable Property</td>
                        <td>: 14000.00</td>
                    </tr>
                </table>
            </div>
        </div>
        <br><br>
        <div>
            <table class="table table-bordered data-table-show">
                <thead>
                    <tr>
                        <th>Tax Details</th>
                        <th>Tax Due</th>
                        <th>Current Tax</th>
                        <th></th>
                        <th>Total Tax</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Property Tax</th>
                        <td>{{ getAmount($otherTax->Property_tax) }}</</td>

                        <td>{{ getAmount($currentTax->Property_tax) }}</</td>
                        <td></td>
                        <td>{{getAmount($Property_Tax_Sum)}}</td>
                    </tr>
                    <tr>
                        <th>Consolidated Tax</th>
                        <td>{{ getAmount($otherTax->consolidated_tax) }}</td>

                        <td>{{ getAmount($currentTax->consolidated_tax) }}</td>
                        <td></td>
                        <td>{{getAmount($consolidated_tax_sum)}}</td>
                    </tr>
                    <tr>
                        <th>Urban Development Tax</th>
                        <td>{{ getAmount($otherTax->urban_dev_tax) }}</td>

                        <td>{{ getAmount($currentTax->urban_dev_tax) }}</td>
                        <td></td>
                        <td>{{getAmount($urban_dev_tax_sum)}}</td>
                    </tr>
                    <tr>
                        <th>Education Tax</th>
                        <td>{{ getAmount($otherTax->education_tax) }}</td>

                        <td>{{ getAmount($currentTax->education_tax) }}</td>
                        <td></td>
                        <td>{{getAmount($education_tax_sum)}}</td>
                    </tr>
                    <tr>
                        <th>Service Tax</th>
                        <td>{{ getAmount($otherTax->service_tax) }}</td>

                        <td>{{ getAmount($currentTax->service_tax) }}</td>
                        <td></td>
                        <td>{{getAmount($service_tax_sum)}}</td>
                    </tr>
                    <tr>
                        <th>Water Tax</th>
                        <td>{{ getAmount($otherTax->water_tax) }}</td>

                        <td>{{ getAmount($currentTax->water_tax) }}</td>
                        <td></td>
                        <td>{{getAmount($water_tax_sum)}}</td>
                    </tr>
                    <tr>
                        <th>Garbage Tax</th>
                        <td>{{ getAmount($otherTax->garbage_tax) }}</td>

                        <td>{{ getAmount($currentTax->garbage_tax) }}</td>
                        <td></td>
                        <td>{{getAmount($garbage_tax_sum)}}</td>
                    </tr>
                    <tr>
                        <th>Rebate</th>
                        <td>{{ getAmount($otherTax->rebate) }}</td>
                        <td>{{ getAmount($currentTax->rebate) }}</td>
                        <td></td>
                        <td>{{getAmount($rebate_sum)}}</td>
                    </tr>
                    <tr>
                        <th>Surcharge</th>
                        <td>{{ getAmount($otherTax->surcharge_fee) }}</td>
                        <td>{{ getAmount($currentTax->surcharge_fee) }}</td>
                        <td></td>
                        <td>{{getAmount($surcharge_fee_sum)}}</td>
                    </tr>
                    <tr>
                        <th>Advance Deposit</th>
                        <td>{{ getAmount($otherTax->advance_deposit) }}</td>
                        <td>{{ getAmount($currentTax->advance_deposit) }}</td>
                        <td></td>
                        <td>{{getAmount($advance_deposit_sum)}}</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td>{{ getAmount($otherTax->total) }}</td>
                        <td>{{ getAmount($currentTax->total) }}</td>
                        <td></td>
                        <td>{{getAmount($total_sum)}}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
<div class="d-flex">
    <button class="btn btn-warning" onclick="printmainReciept()">Print</button>
    <a href="{{route('resident.tax.potrait.reciept',$data->id)}}" role="banner" class="btn btn-light left-20">Potrait Reciept</a>
    <a href="{{route('resident.tax.main.reciept',$data->id)}}" role="banner" class="btn btn-light left-20">Main Reciept</a>
</div>

@endsection

@push('script')
    <script type="text/javascript">
        function printmainReciept() {

            var printContents = document.getElementById("mainRecieptPrint").innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;


        }
    </script>
@endpush

@push('style')
<style>
.mainrecieptt td{
    width: 40%
}
</style>
@endpush
