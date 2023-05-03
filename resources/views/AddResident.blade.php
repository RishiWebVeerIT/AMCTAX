@extends('layouts.master')
@section('page-title',$page_title)
@section('section')
<div class="bg-light pd-60px">
<form action="{{route('Add/resident')}}" method="post">
    @csrf
    <h3 class="mb-t-b-30">Personal Information</h3>
    <div class="row">
      <div class="form-group col-md-4">
        <label for="first_name"><span class="text-danger">*</span>First Name</label>
        <input type="text" name="first_name" class="form-control mb-3" placeholder="First Name" required>
      </div>
      <div class="form-group col-md-4">
        <label for="middle_name"><span class="text-danger">*</span>Middle Name</label>
        <input type="text" name="middle_name" class="form-control mb-3" placeholder="Middle Name" required>
      </div>
      <div class="form-group col-md-4">
        <label for="last_name"><span class="text-danger">*</span>Last Name</label>
        <input type="text" name="last_name" class="form-control mb-3"  placeholder="Last Name" required>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-4">
        <label for="aadhar_no"><span class="text-danger">*</span>Aadhar : </label>
        <input type="text" name="aadhar_no"  placeholder="Aadhar" class="form-control mb-3" required>
      </div>
      <div class="form-group col-md-4">
        <label for="mobile_no"><span class="text-danger">*</span>Mobile N. : </label>
        <input type="text" name="mobile_no"  placeholder="Mobile no." class="form-control mb-3" required>
      </div>
      <div class="form-group col-md-4">
        <label for="email"><span class="text-danger">*</span>Email : </label>
        <input type="email" name="email"  placeholder='Email' class="form-control mb-3" required>
      </div>
      <div class="form-group col-md-6">
        <label for="old_property_id"><span class="text-danger">*</span>Old Property ID : </label>
        <input type="text" name="old_property_id"  placeholder="Old" Property ID class="form-control mb-3" required>
      </div>
      <div class="form-group col-md-6">
        <label for="new_property_id"><span class="text-danger">*</span>New Property ID : </label>
        <input type="text" name="new_property_id" placeholder="New" Property ID class="form-control mb-3" required>
      </div>

      <h3 class="mb-t-b-30">Address</h3>
      <div class="form-group col-md-6">
      <label for="inputAddress"><span class="text-danger">*</span>Address</label>
      <input type="text" class="form-control mb-3" name="address" id="inputAddress" placeholder="Address" required>
    </div>
    <div class="form-group col-md-3">
        <label for="City"><span class="text-danger">*</span>City : </label>
        <input type="text" name="city" class="form-control mb-3"  placeholder="City" required>
      </div>
      <div class="form-group col-md-3">
        <label for="taluka"><span class="text-danger">*</span>Taluka</label>
        <select id="taluka" name="taluka" class="form-control mb-3" required>
          <option selected>Amravati</option>
          <option>Achalpur</option>
          <option >Warud</option>
          <option >Chandurbazar</option>
          <option >Dharni</option>
          <option >Morshi</option>
          <option >Daryapur</option>
          <option >Anjangaon Surji</option>
          <option >Dhamangaon Railway</option>
          <option >Nandgaon-Khandeshwar</option>
          <option >Chikhaldara</option>
          <option >Bhatkuli</option>
          <option >Teosa</option>
          <option >Chandur Railway</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="jila"><span class="text-danger">*</span>Jilla</label>
        <select id="jila" name="jila" class="form-control mb-3" required>
          <option selected>Amravati</option>
          <option >Achalpur</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="ward"><span class="text-danger">*</span>Ward</label>
        <select id="ward" name="ward" class="form-control mb-3" required>
            <option selected>0</option>
            <option>1</option>
            <option>2</option>
          </select>
      </div>
      <div class="form-group col-md-2">
        <label for="zone"><span class="text-danger">*</span>Zone</label>
        <input type="text" name="zone" class="form-control"  placeholder="Zone" id="inputZip" required>
      </div>
      <div class="form-group col-md-2">
        <label for="zip"><span class="text-danger">*</span>Zip</label>
        <input type="text" name="zip" class="form-control"  placeholder="Zip" id="inputZip" required>
      </div>
      <div class="form-group col-md-3">
        <label for="state"><span class="text-danger">*</span>State</label>
        <input type="text" name="state" class="form-control"  placeholder="State" id="inputZip" required>
      </div>
    </div>
<br><br>
    <button type="submit" class="btn btn-warning">Add Resident</button>
  </form>
</div>
@endsection
