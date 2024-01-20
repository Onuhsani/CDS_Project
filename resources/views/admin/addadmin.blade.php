@extends('layouts.admin.admin_app')

@section('contents')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Default form</h4>
            <p class="card-description"> Basic form layout </p>
            <form class="forms-sample">
                <div class="form-group">
                <label for="exampleInputUsername1">Username</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                <label for="exampleInputConfirmPassword1">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                      </span>
                    </div>
                </div>
                <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> Remember me </label>
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
            </div>
        </div>
        </div>
    </div>
@endsection