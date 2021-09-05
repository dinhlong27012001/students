@extends('layouts.app')
@section('content')
<div class="card">
	                            <div class="card-header">
	                                <h4 class="card-title">Thông tin cá nhân </h4>
	                            </div>
	                            <div class="card-content">
	                                <form method="get" action="/" class="form-horizontal">
	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Họ và tên</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="StName" class="form-control"
													value="{{ $students->StName}}" readonly>
	                                            </div>
	                                        </div>
	                                    </fieldset>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Giới tính</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="GenderName"  class="form-control"
                                                value="{{ $students->GenderName}}" readonly>
                                            </div>
                                        </div>
                                    </fieldset>

	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Email</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="StEmail" class="form-control"
													value="{{ $students->StEmail }}" readonly>
	                                            </div>
	                                        </div>
	                                    </fieldset>

	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Password</label>
	                                            <div class="col-sm-10">
	                                                <input type="password" name="StPassword" class="form-control" value="{{ $students->StPassword }}" readonly>
	                                            </div>
	                                        </div>
	                                    </fieldset>
                                        <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Ngày sinh</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="StDoB" disabled="" class="form-control" value="{{ $students->StDoB }}" readonly>
	                                            </div>
	                                        </div>
	                                    </fieldset>
                                        <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Tên Lớp</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="cName" disabled="" class="form-control" value="{{ $students->cName }}" readonly>
	                                            </div>
	                                        </div>
	                                    </fieldset>
                                        <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Khóa</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="course" disabled="" class="form-control" value="{{ $students->course }}" readonly>
	                                            </div>
	                                        </div>
	                                    </fieldset>
	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Số điện thoại</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="StNum" disabled="" class="form-control" value="{{ $students->StNum }}" readonly>
	                                            </div>
	                                        </div>
	                                    </fieldset>
										<a class="btn btn-info btn-fill btn-wd" href="{{ route('student.edit',$students->StId) }}">Cập nhập</a>
	                                </form>
	                            </div>
	                        </div>
@endsection
