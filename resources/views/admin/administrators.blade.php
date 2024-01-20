@extends('layouts.admin.admin_app')

@section('contents')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">ADMINISTRATORS</h4>
        {{-- <p class="card-description"> Add class <code>.table-hover</code>
        </p> --}}
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($admins as $admin)
                <tr>
                    <td>{{ $num = $num+1 }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td> {{ $admin->phone_number }}</td>
                    <td><label class="badge badge-success">View</label>
                        <label class="badge badge-danger">Delete</label>
                        <label class="badge badge-warning">Update</label></td>
                </tr>
            @empty
                <h3>No record of administrators yet</h3>
            @endforelse
            {{-- <tr>
              <td>1</td>
              <td>Jacob</td>
              <td>Photoshop</td>
              <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
              <td><label class="badge badge-danger">View | Delete</label></td>
            </tr>
            <tr>
                <td>1</td>
              <td>Messsy</td>
              <td>Flash</td>
              <td class="text-danger"> 21.06% <i class="mdi mdi-arrow-down"></i></td>
              <td><label class="badge badge-warning">In progress</label></td>
            </tr>
            <tr>
                <td>1</td>
              <td>John</td>
              <td>Premier</td>
              <td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i></td>
              <td><label class="badge badge-info">Fixed</label></td>
            </tr>
            <tr>
                <td>1</td>
              <td>Peter</td>
              <td>After effects</td>
              <td class="text-success"> 82.00% <i class="mdi mdi-arrow-up"></i></td>
              <td><label class="badge badge-success">Completed</label></td>
            </tr>
            <tr>
                <td>1</td>
              <td>Dave</td>
              <td>53275535</td>
              <td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i></td>
              <td><label class="badge badge-warning">In progress</label></td>
            </tr> --}}
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection