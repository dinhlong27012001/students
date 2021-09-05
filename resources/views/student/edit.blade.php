@extends('layouts.app')
@section('content')
<div class="card">
	                            <div class="card-header">
	                                <h4 class="card-title">Thông tin cá nhân </h4>
	                            </div>
	                            <div class="card-content">
	                                <form method="post" action="{{ route('student.update', $students->StId) }}">
										@method("PUT")
           								@csrf
	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Họ và tên</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="StName" class="form-control"
													value="{{ $students->StName}}">
	                                            </div>
	                                        </div>
	                                    </fieldset>

	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Email</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="StEmail" class="form-control"
													value="{{ $students->StEmail }}" >
	                                            </div>
	                                        </div>
	                                    </fieldset>

	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Password</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="StPassword" class="form-control" value="{{ $students->StPassword }}" >
	                                            </div>
	                                        </div>
	                                    </fieldset>
                                        <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Ngày sinh</label>
	                                            <div class="col-sm-10">
	                                                <input type="date" name="StDoB" class="form-control" value="{{ $students->StDoB }}" >
	                                            </div>
	                                        </div>
	                                    </fieldset>

	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Số điện thoại</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="StNum" class="form-control" value="{{ $students->StNum}}" >
	                                            </div>
	                                        </div>
	                                    </fieldset>
										<button type="submit" class="btn btn-info btn-fill btn-wd">Lưu lại</button>
	                                </form>
	                            </div>
	                        </div>
@endsection
