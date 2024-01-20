@extends('layouts.admin.admin_app')

@section('contents')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">ITEMS</h4>
        {{-- <p class="card-description"> Add class <code>.table-hover</code>
        </p> --}}
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Item Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Condition</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($newitems as $item)
                <tr>
                    <td>{{ $num = $num+1 }}</td>
                    <td>{{ $item->item_name }}</td>
                    <td>{{ $item->description }}</td>
                    <td> {{ $item->price }}</td>
                    <td> {{ $item->condition }}</td>
                    <td> {{ $item->status }}</td>
                    <td><label class="badge badge-success">View</label>
                        <label class="badge badge-danger">Delete</label></td>
                </tr>
            @empty
                <h3>No record of new items yet</h3>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection