@extends('layouts.master')
@section('page-title', $page_title)
@section('section')
    <div class="pd-60px" id="RecieptPrint">
        <div class="d-flex justify-content-between">
            <div>
                <p>Muncipal Act 19 Sect 00</p>
                <p>Reciept no. : 0000-000-0000</p>
                <p>New Property ID. : {{ $data->old_property_id }}</p>
            </div>
            <div class="text-center">
                <b>Reciept</b>
                <p>Amravati Municipality</p>
                <p>Property Tax</p>
            </div>
            <div>
                <p>Consumer Reciept</p>
                <p>Date : {{date('d');}}-{{date('m');}}-{{date('y');}}</p>
                <p>Determination Year 2023-24</p>
            </div>
        </div>
        <div>
            <p>Old Property ID. : {{ $data->old_property_id }}</p>
            <p>Property owners : {{ $data->firstname . ' ' . $data->middlename . ' ' . $data->lastname }}</p>
            <p>Address
                :{{ $data->address->address . ' ' . $data->address->city . ' ' . $data->address->zip }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Zone / Ward --{{ $data->address->zone . ' / ' . $data->address->ward }}
            </p>
            <p>Plot Area :{{ $taxdetails[0]->plot_area }}</p>
        </div>
        <p>Property tax and other taxes have been calculated on the basis of details given below.</p>

        <table class="table table-bordered data-table-show table-hover">
            <thead>
                <tr>

                    <th scope="col">Types of Property</th>
                    <th scope="col">Use Factor</th>
                    <th scope="col">Floor No.</th>
                    <th scope="col">Construction Type</th>
                    <th scope="col">Constructed Area</th>
                    <th scope="col">Rate</th>
                    <th scope="col">Value</th>
                    <th scope="col">Discount 10%</th>
                    <th scope="col">Taxable Property</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($taxdetails as $tdetails)
                    <tr>

                        <td>{{ $tdetails->property_type }}</td>
                        <td>{{ $tdetails->uses_factor }}</td>
                        <td>{{ $tdetails->floor }}</td>
                        <td>{{ $tdetails->construction_type }}</td>
                        <td>{{ $tdetails->constructed_area }}</td>
                        <td>{{ getAmount($tdetails->rate) }}</td>
                        <td>{{ getAmount($tdetails->value) }}</td>
                        <td>{{ getAmount($tdetails->dicount) }}</td>
                        <td>{{ getAmount($tdetails->taxable_property) }}</td>
                    </tr>
                @empty
                    <td>No Record Found</td>
                @endforelse

            </tbody>
        </table>
        <br><br>
        <table class="table table-bordered data-table-show table-hover">
            <thead>
                <tr>
                    <th scope="col">Year</th>
                    <th scope="col">Property Tax</th>
                    <th scope="col">Consolidated Tax</th>
                    <th scope="col">Urban Development Cess</th>
                    <th scope="col">Education Cess</th>
                    <th scope="col">Service Tax</th>
                    <th scope="col">Water User Charges</th>
                    <th scope="col">Garbage Fee</th>
                    <th scope="col">Rebate</th>
                    <th scope="col">Surcharge Fee</th>
                    <th scope="col">Advance Deposit</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($otherTax as $otdetails)
                    <tr>
                        <th scope="row">{{ $otdetails->year }}</th>
                        <td>{{ getAmount($otdetails->Property_tax) }}</td>
                        <td>{{ getAmount($otdetails->consolidated_tax) }}</td>
                        <td>{{ getAmount($otdetails->urban_dev_tax) }}</td>
                        <td>{{ getAmount($otdetails->education_tax) }}</td>
                        <td>{{ getAmount($otdetails->service_tax) }}</td>
                        <td>{{ getAmount($otdetails->water_tax) }}</td>
                        <td>{{ getAmount($otdetails->garbage_tax) }}</td>
                        <td>{{ getAmount($otdetails->rebate) }}</td>
                        <td>{{ getAmount($otdetails->surcharge_fee) }}</td>
                        <td>{{ getAmount($otdetails->advance_deposit) }}</td>
                        <td>{{ getAmount($otdetails->total) }}</td>
                    </tr>
                @empty
                    <td>No Record Found</td>
                @endforelse
                <tr>
                    <th scope="row">Total</th>
                    <td>{{ getAmount($Property_Tax_Sum) }}</td>
                    <td>{{ getAmount($consolidated_tax_sum) }}</td>
                    <td>{{ getAmount($urban_dev_tax_sum) }}</td>
                    <td>{{ getAmount($education_tax_sum) }}</td>
                    <td>{{ getAmount($service_tax_sum) }}</td>
                    <td>{{ getAmount($water_tax_sum) }}</td>
                    <td>{{ getAmount($garbage_tax_sum) }}</td>
                    <td>{{ getAmount($rebate_sum) }}</td>
                    <td>{{ getAmount($surcharge_fee_sum) }}</td>
                    <td>{{ getAmount($advance_deposit_sum) }}</td>
                    <td>{{ getAmount($total_sum) }}</td>
                </tr>
            </tbody>
        </table>
        <br><br>
        <div class="d-flex justify-content-between">
            <div>
                <p>Paid Amount - 37116.00</p>
                <p>Current Total - 1544.00</p>
                <p>Total Deposit Amount - 37116.00</p>
                <p>Comment - 1997-1998 to 2022-23</p>
            </div>
            <div>
                <p>Date - 01-02-2023</p>
                <p>Outstanding Total - 35572.00</p>
                <div></div>
                <p>Total Ask - 37116.00</p>
            </div>
            <div>
                <p>Type of Payment - Cash/Online</p>
                <p>Total Discount - 0.00</p>
                <div></div>
                <p>Payment - 37116.00 Remainder - 00.00</p>
            </div>
            <div>
                <div></div>
                <div></div>
                <div></div>
                <p>
                <p>This receipt is not proof of Ownership.</p>
            </div>
        </div>
    </div>
    <div class="d-flex">
        <button class="btn btn-warning" onclick="printLAndScapeReciept()">Print</button>
        <a href="{{route('resident.tax.potrait.reciept',$data->id)}}" role="banner" class="btn btn-light left-20">Potrait Reciept</a>
        <a href="{{route('resident.tax.main.reciept',$data->id)}}" role="banner" class="btn btn-light left-20">Main Reciept</a>
    </div>
@endsection
{{-- @section('nav_bredcrumb')
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Reciept Type
        </a>
        <select class="dropdown-menu changeReciept" aria-labelledby="navbarDropdown">
            <option class="dropdown-item" data-href="{{ route('resident.tax.landscape.reciept', $data->id) }}">Property Tax
            </option>
            <option class="dropdown-item" data-href="{{ route('resident.tax.potrait.reciept', $data->id) }}">Customer
                Reciept</option>
            <option class="dropdown-item" data-href="#">Main Reciept</option>
        </select>
    </li>
@endsection --}}

@push('script')
    <script type="text/javascript">
        function printLAndScapeReciept() {

            var printContents = document.getElementById("RecieptPrint").innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;


        }
    </script>
@endpush
