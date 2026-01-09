@extends('template.default')
@section('content')
    <div class="row">
        <div class="col-12">
            <!--begin::Horizontal Form-->
            <div class="card card-warning card-outline mb-4">
                <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">Add User</div>
                </div>
                <!--end::Header-->
                <!--begin::Form-->
                <form>
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="name" name="name" class="form-control" id="inputName3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email"  class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">บันทึก</button>
                        <button type="reset" class="btn float-end">ยกเลิก</button>
                    </div>
                    <!--end::Footer-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Horizontal Form-->
        </div>
        @include('users.table')
    </div>
@endsection
