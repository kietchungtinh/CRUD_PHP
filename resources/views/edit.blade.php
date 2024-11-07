@extends('layout')
@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Sửa sinh viên</h2>
        <a href="{{route('sinhvien.index') }}" class="btn btn-primary">Danh sách sinh viên</a>
    </div>
    <div class="card-body">
        <form action="{{ route('sinhvien.update', $sinhvien->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Mã sinh viên</strong>
                        <input type="text" name="MaSV" value="{{ $sinhvien->MaSV }}" class="form-control" placeholder="Nhập mã sinh viên">
                    </div>
                    <div class="form-group">
                        <strong>Họ và tên</strong>
                        <input type="text" name="HoTen" value="{{ $sinhvien->HoTen }}" class="form-control" placeholder="Nhập họ và tên">
                    </div>
                    <div class="form-group">
                        <strong>Ngày sinh</strong>
                        <input type="date" name="NgaySinh" value="{{ $sinhvien->NgaySinh }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <strong>Giới tính</strong>
                        <select name="GioiTinh" class="form-select">
                            <option selected>Chọn giới tính</option>
                            <option value="nam" {{ $sinhvien->GioiTinh =="Nam" ? 'selected':''}}>Nam</option>
                            <option value="nu" {{ $sinhvien->GioiTinh =="Nữ" ? 'selected':''}}>Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <strong>Số điện thoại</strong>
                        <input type="text" name="Sdt" value="{{ $sinhvien->Sdt }}" class="form-control" placeholder="Nhập số điện thoại">
                    </div>
                    <div class="form-group">
                        <strong>Địa chỉ</strong>
                        <input type="text" name="DiaChi" value="{{ $sinhvien->DiaChi }}" class="form-control" placeholder="Nhập địa chỉ">
                    </div>
                   
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-2">Cập nhật</button>
        </form>
    </div>
    
    
</div>
@endsection