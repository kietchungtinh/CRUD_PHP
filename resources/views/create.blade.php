@extends('layout')
@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Thêm sinh viên</h2>
        <a href="{{route('sinhvien.index') }}" class="btn btn-primary">Danh sách sinh viên</a>
    </div>
    <div class="card-body">
        <form action="{{ route('sinhvien.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Mã sinh viên</strong>
                        <input type="text" name="MaSV" class="form-control" placeholder="Nhập mã sinh viên">
                    </div>
                    <div class="form-group">
                        <strong>Họ và tên</strong>
                        <input type="text" name="HoTen" class="form-control" placeholder="Nhập họ và tên">
                    </div>
                    <div class="form-group">
                        <strong>Ngày sinh</strong>
                        <input type="date" name="NgaySinh" class="form-control">
                    </div>
                    <div class="form-group">
                        <strong>Giới tính</strong>
                        <select name="GioiTinh" class="form-select">
                            <option selected>Chọn giới tính</option>
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <strong>Số điện thoại</strong>
                        <input type="text" name="Sdt" class="form-control" placeholder="Nhập số điện thoại">
                    </div>
                    <div class="form-group">
                        <strong>Địa chỉ</strong>
                        <input type="text" name="DiaChi" class="form-control" placeholder="Nhập địa chỉ">
                    </div>
                   
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-2">Lưu</button>
        </form>
    </div>
    
    
</div>
@endsection