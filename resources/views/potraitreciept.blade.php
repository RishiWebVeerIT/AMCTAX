@extends('layouts.master')
@section('page-title',$page_title)
@section('section')
<div class="pd-60px" id="PotraitRecieptPrin">
    <div class="d-flex justify-content-between">
        <div></div>
        <div class="text-center">
            <p>Amravati Nagar Palika / अमरावती नगर पालिका</p>
            <p>Reciept'</p>
        </div>
        <div class="text-center">
            <p>Consumer Copy'</p>
        </div>
    </div>
    <div>
        <p>Pin / Service number/Regestration number: 1000000'</p>
        <p>Mode - CASH/ONLINE'</p>
        <p>Shri/Shrimati/Mrs :{{$data->firstname.' '.$data->middlename.' '.$data->lastname}}</p>
        <p>Address :{{$data->address->address.' '.$data->address->city.' '.$data->address->zip}}</p>
        <p>Total Amount : 4000.00 &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Other Information : 2500.00 + 1500.00 = 4000.00 </p>
        <p>Reciept type : AA/BB/CC</p>
        <p>Previous Total : 00.00 &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Current Total : 4000.00</p>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; GST : 00.00
        <br><br>
        <div class="d-flex justify-content-between">
            <div class="text-center"><p>User</p></div>
            <div class="text-center"><p>Counter Number</p></div>
            <div class="text-center"><p>Reciever Signature</p></div>
        </div>
    </div>
</div>
<div class="d-flex">
    <button class="btn btn-warning" onclick="printPotraitReciept()">Print</button>
    <a href="{{route('resident.tax.potrait.reciept',$data->id)}}" role="banner" class="btn btn-light left-20">Potrait Reciept</a>
    <a href="{{route('resident.tax.main.reciept',$data->id)}}" role="banner" class="btn btn-light left-20">Main Reciept</a>
</div>
@endsection

@push('script')
    <script type="text/javascript">
        function printPotraitReciept() {

            var printContents = document.getElementById("PotraitRecieptPrint").innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;


        }
    </script>
@endpush
