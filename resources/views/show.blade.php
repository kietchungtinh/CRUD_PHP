@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Thông tin chi tiết sinh viên</h2>
    <table class="table table-bordered">
        <tr>
            <th>Mã sinh viên:</th>
            <td>{{ $sinhvien->MaSV }}</td>
        </tr>
        <tr>
            <th>Họ tên:</th>
            <td>{{ $sinhvien->HoTen }}</td>
        </tr>
        <tr>
            <th>Ngày sinh:</th>
            <td>{{ $sinhvien->NgaySinh }}</td>
        </tr>
        <tr>
            <th>Giới tính:</th>
            <td>{{ $sinhvien->GioiTinh }}</td>
        </tr>
        <tr>
            <th>Số điện thoại:</th>
            <td>{{ $sinhvien->Sdt }}</td>
        </tr>
        <tr>
            <th>Địa chỉ:</th>
            <td>{{ $sinhvien->DiaChi }}</td>
        </tr>
    </table>
    <a href="{{ route('sinhvien.index') }}" class="btn btn-secondary">Quay lại danh sách</a>
</div>
@endsection
