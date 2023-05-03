@extends('layouts.master')
@section('page-title', $page_title)
@section('section')
<div class="bg-light pd-60px mt-20">
    <form action="{{route('resident.currtax.details.update')}}" method="post">
        @csrf
        <div class="row">
            <h3 class="mb-t-b-30">Other Taxes Information</h3>
            <div class="form-group col-md-3">
                <label for="date_from"><span class="text-danger">*</span>Date From</label>
                <input class="date_from form-control" id="date_from" name="date_from" style="width: 100%;"
                    type="text">
            </div>
            <div class="form-group col-md-3">
                <label for="date_to"><span class="text-danger">*</span>Date To</label><small class="date-error text-danger"></small>
                <input class="date_to form-control" name="date_to" id="date_to" style="width: 100%;" type="text">
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
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
</div>
@endsection

@push('script')
    <script>
          $('.date_from').datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true

        });
        $('.date_to').datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true
        });
        let date_from;
        let value;
        $(document).click(function() {
            date_from = $('#date_from').val();
            value = !date_from == '';
            if (value) {
                let date_to = $('#date_to').val();
                if (date_from < date_to) {
                    $('.date-error').text('');
                } else {
                    $('.date-error').text('\'TO\'Date must be greater than \'FROM\'');
                }
            }
        });
    </script>
@endpush
