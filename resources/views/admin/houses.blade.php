@extends('layouts.admin.admin_app')

@section('contents')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">HOUSES</h4>
        {{-- <p class="card-description"> Add class <code>.table-hover</code>
        </p> --}}
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Agent ID</th>
              <th>Location</th>
              <th>Rent Amount</th>
              <th>Rooms</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($houses as $house)
                <tr>
                    <td>{{ $num = $num+1 }}</td>
                    <td>{{ $house->agent_id }}</td>
                    <td>{{ $house->location }}</td>
                    <td> {{ $house->rent_amount }}</td>
                    <td> {{ $house->number_of_bedrooms }}</td>
                    <td> {{ $house->status }}</td>
                    <td><label class="badge badge-success">View</label>
                        <label class="badge badge-danger">Delete</label>
                        <label class="badge badge-warning">Update</label></td>
                </tr>
            @empty
                <h3>No record of houses yet</h3>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection