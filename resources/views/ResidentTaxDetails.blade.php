@extends('layouts.master')
@section('page-title', $page_title)
@section('section')
    <div class="bg-light pd-60px">
        <form action="{{route('resident.tax.details.save',$data->id)}}" method="post">
            @csrf
            <h3 class="mb-t-b-30">Property TAX Information</h3>
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="plot_area"><span class="text-danger">*</span>Plot Area</label>
                    <input class="form-control" id="plot_area" name="plot_area" placeholder="Plot Area" type="text" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')">
                </div>
                <div class="form-group col-md-3">
                    <label for="type_of_Property"><span class="text-danger">*</span>Type of Property</label>
                    <select id="type_of_Property" name="type_of_Property" class="form-control mb-3" required>
                        <option value="Residential">Residential</option>
                        <option value="Residential">Residential</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="uses_factor"><span class="text-danger">*</span>Uses Factor</label>
                    <select id="uses_factor" name="uses_factor" class="form-control mb-3" required>
                        <option value="Self Use">Self Use</option>
                        <option value="Rental">Rental</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="floor"><span class="text-danger">*</span>Floor</label>
                    <select id="floor" name="floor" class="form-control mb-3" required>
                        <option value="Ground">Ground</option>
                        <option value="1st Floor">1st Floor</option>
                        <option value="2nd Floor">2nd Floor</option>
                        <option value="3rd Floor">3rd Floor</option>
                        <option value="4th Floor">4th Floor</option>
                        <option value="5th Floor">5th Floor</option>
                        <option value="6th Floor">6th Floor</option>
                        <option value="7th Floor">7th Floor</option>
                        <option value="8th Floor">8th Floor</option>
                        <option value="9th Floor">9th Floor</option>
                        <option value="10th Floor">10th Floor</option>
                        <option value="11th Floor">11th Floor</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="construction"><span class="text-danger">*</span>Type of Construction</label>
                    <input type="text" name="construction_type" class="form-control mb-3" placeholder="Construction" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="area"><span class="text-danger">*</span>Constructed Area</label>
                    <input type="text" name="construction_area" id="constructed_area" class="form-control mb-3" placeholder="Area" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="rate"><span class="text-danger">*</span>Rate</label><small id="ca-error" class="text-danger"></small>
                    <input type="text" id="rate" name="rate" class="form-control mb-3" placeholder="Rate" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="value">Value</label>
                    <input type="text" name="value" id="value" placeholder="Value" class="form-control mb-3" readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="discount">Discount 10%</label>
                    <input type="text" name="discount" id="discount" placeholder="Discount 10%" class="form-control mb-3" readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="taxable_property">Taxable Property</label>
                    <input type="text" name="taxable_property" id="taxable_property" placeholder="Taxable Property" class="form-control mb-3" readonly>
                </div>
            </div>
            <br><br>
            <button type="submit" class="btn btn-warning">Add</button>
        </form>
    </div>
    <div class="bg-light pd-60px mt-20">
        <form action="{{route('resident.othertax.details.save',$data->id)}}" method="post">
            @csrf
            <div class="row">
                <h3 class="mb-t-b-30">Other Taxes Information</h3>
                <div class="form-group col-md-3">
                    <label for="year_from"><span class="text-danger">*</span>Year From</label>
                    <input class="year_from form-control" id="year_from" name="year_from" style="width: 100%;"
                        type="text">
                </div>
                <div class="form-group col-md-3">
                    <label for="year_to"><span class="text-danger">*</span>Year To</label><small class="date-error text-danger"></small>
                    <input class="year_to form-control" name="year_to" id="year_to" style="width: 100%;" type="text">
                </div>
                <div class="form-group col-md-3">
                    <label for="property_tax"><span class="text-danger">*</span>Property TAX</label>
                    <input type="text" name="property_tax" class="form-control mb-3" placeholder="Property Tax" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="consolidated_tax"><span class="text-danger">*</span>Consolidated Tax</label>
                    <input type="text" name="consolidated_tax" class="form-control mb-3" placeholder="Consolidated Tax" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="urban_dev_tax"><span class="text-danger">*</span>Urban Development Cess</label>
                    <input type="text" name="urben_dev_tax" class="form-control mb-3" placeholder="Urban Development Cess" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="education_tax"><span class="text-danger">*</span>Education Cess</label>
                    <input type="text" name="education_tax" class="form-control mb-3" placeholder="Education Cess" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="service_tax"><span class="text-danger">*</span>Service Tax</label>
                    <input type="text" name="service_tax" class="form-control mb-3" placeholder="Service Tax" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="water_tax"><span class="text-danger">*</span>Water User Charges</label>
                    <input type="text" name="water_tax" class="form-control mb-3" placeholder="Water User Charges" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="garbade_fee"><span class="text-danger">*</span>Garbage Fee</label>
                    <input type="text" name="garbade_fee" class="form-control mb-3" placeholder="Garbage Fee" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="rebate"><span class="text-danger">*</span>Rebate</label>
                    <input type="text" name="rebate" class="form-control mb-3" placeholder="Rebate" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="surcharge_fee"><span class="text-danger">*</span>Surcharge Fee</label>
                    <input type="text" name="surcharge_fee" class="form-control mb-3" placeholder="Surcharge Fee" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="advance_deposit">Advance Deposit</label>
                    <input type="text" name="advance_deposit" class="form-control mb-3" placeholder="Advance Deposit" >
                </div>
                <div class="form-group col-md-3">
                    <label for="total">Total</label>
                    <input type="text" name="total" class="form-control mb-3" placeholder="Total" >
                </div>
            </div>
            <br><br>
            <button type="submit" class="btn btn-warning">Add</button>
        </form>
    </div>

    <div class="border border-dark pd-60px mt-20">
        <h3 class="mb-t-b-30">Details</h3>
        <table class="table table-bordered data-table-show table-hover">
            <thead>
                <tr>
                    <th scope="col">Plot Area</th>
                    <th scope="col">Types of Property</th>
                    <th scope="col">Use Factor</th>
                    <th scope="col">Floor No.</th>
                    <th scope="col">Construction Type</th>
                    <th scope="col">Constructed Area</th>
                    <th scope="col">Rate</th>
                    <th scope="col">Value</th>
                    <th scope="col">Discount 10%</th>
                    <th scope="col">Taxable Property</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($taxdetails as $tdetails)
                <tr>
                    <td scope="row">{{ $tdetails->plot_area }}</td>
                    <td>{{ $tdetails->property_type }}</td>
                    <td>{{ $tdetails->uses_factor }}</td>
                    <td>{{ $tdetails->floor }}</td>
                    <td>{{ $tdetails->construction_type }}</td>
                    <td>{{ $tdetails->constructed_area }}</td>
                    <td>{{ getAmount($tdetails->rate) }}</td>
                    <td>{{ getAmount($tdetails->value) }}</td>
                    <td>{{ getAmount($tdetails->dicount) }}</td>
                    <td>{{ getAmount($tdetails->taxable_property) }}</td>
                    <td><a href="#"><i class="las la-pen"></i></a></td>
                    <td><a href="#"><i class="las la-trash"></i></a></td>
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
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($otherTax as $otdetails)
                <tr>
                    <th scope="row">{{$otdetails->year}}</th>
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
                    <td><a href="#"><i class="las la-pen"></i></a></td>
                    <td><a href="#"><i class="las la-trash"></i></a></td>
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
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('nav_bredcrumb')
    <a href="{{route('resident.tax.landscape.reciept',$data->id)}}"  role="banner" class="btn btn btn-outline-warning">Print</a>
@endsection

@push('script')
    <script>
        $('.year_from').datepicker({
            minViewMode: 2,
            format: 'yyyy'
        });
        $('.year_to').datepicker({
            minViewMode: 2,
            format: 'yyyy'
        });
        let year_from;
        let value;
        $(document).click(function() {
            year_from = $('#year_from').val();
            value = !year_from == '';
            if (value) {
                let year_to = $('#year_to').val();
                if (year_from < year_to) {
                    $('.date-error').text('');
                } else {
                    $('.date-error').text('\'TO\' Year must be greater than \'FROM\'');
                }
            }
        });

        $('#rate').keyup(function() {
            $rate_value = $(this).val();
            constuctedArea = $('#constructed_area').val();
            value = constuctedArea == '';
            if (value) {
                $('#ca-error').text(' Fill first Constructed area field');
            }else{
                $('#ca-error').text('');
                $value_value = (constuctedArea * $rate_value);
                $('#value').val($value_value);

                $discounted_value = (($value_value/100)*10);
                $('#discount').val($discounted_value);

                $taxable_amount = ($value_value - $discounted_value);

                $('#taxable_property').val($taxable_amount);
            }

        });


    </script>
@endpush
