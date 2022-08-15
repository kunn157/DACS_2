@extends('master')
@section('title','Home')
@section('content')
{{-- <h3 style="">
	<i class="fa fa-arrow-circle-o-right"></i>
	Giới thiệu về Ký túc xá của Trường Đại học Công nghệ Thông tin và Truyền thông Việt - Hàn
</h3> --}}

<table class="table table-bordered table-striped datatable" id="table_export">
	<tr>
		<th><h4>GIỚI THIỆU VỀ KÝ TÚC XÁ</h3></th>
	</tr>
	<tr>
		<th>
			Kí túc xá Trường Đại học Công nghệ Thông tin và Truyền thông Việt - Hàn thuộc Đô thị Đại học Đà Nẵng, nằm trên địa bàn phường Hòa Quý, quận Ngũ Hành Sơn, Tp. Đà Nẵng, là nơi sinh hoạt và học tập của hơn 2000 sinh viên Đại học Đà Nẵng, trong đó có trường Đại học Công nghệ thông tin và truyền thông Việt - Hàn và Khoa Y dược. <br> <br>
			Khu vực kí túc xá hiện tại gồm 2 khu chính là Khu K và Khu V. <br> <br> Trong đó Khu K gồm 3 block mỗi block gồm 5 tầng. Khu V gồm 2 block mỗi block gồm 5 tầng với tổng sức chứa cho hơn 4000 sinh viên. <br> <br> Hệ thống phòng ở sạch sẽ, hiện đại, đầy đủ tiện nghi, đảm bảo an ninh trật tự, đáp ứng nhu cầu sinh hoạt, học tập và nghỉ ngơi của cá nhân trong và ngoài nhà trường tại ký túc xá nhà trường. <br><br> <center><img src="img/ktx1.jpg" style="max-height: 400px; max-width:500px;"> <br> <h6>Toàn cảnh 3 Block ký túc xá</h6></center> 
		</th>
	</tr>
	<tr>
		<th><h4>ĐỐI TƯỢNG THUÊ PHÒNG TẠI KÝ TÚC XÁ TRƯỜNG</h4></th>
	</tr>
	<tr>
		<th>
			1.Sinh viên đang học tại trường. <br> <br>		
			2.Sinh viên, học viên cao học các trường lân cận. <br> <br>
			3.Các đơn vị tổ chức tập huấn, đào tạo, bồi dưỡng tại trường hoặc khu vực lân cận. <br><br>
			4.Những cá nhân, tổ chức đang sinh sống, học tập và làm việc tại Tp. Đà Nẵng có nhu cầu thuê phòng ở.
		</th>
	</tr>
	<tr>
		<th><h4>DỊCH VỤ CHO THUÊ PHÒNG Ở TẠI KÝ TÚC XÁ</h4></th>
	</tr>
	<tr>
		<th><h4><center> <b>PHÒNG Ở TẦNG 1 KTX</b></center></h4> <br> <center><img src="img/ktx2.jpg" style="max-height: 400px; max-width:500px;"> <br> <h6>Nội thất phòng ở tầng 1</h6></center> <br><br><center><img src="img/ktx3.jpg" style="max-height: 400px; max-width:500px;"> <br> <h6>Phòng vệ sinh ở tầng 1</h6></center>
			<br><br><b>Thuê tháng: </b> 1.500.000 đồng/1 phòng (2 người) <br> <b>Thuê ngày: </b> 150.000 đồng/ngày/1 phòng (2 người) <br> <b>Tiện ích:</b> giường đơn, có nệm, tủ quần áo, có bàn làm việc, có máy nước nóng, phòng vệ sinh khép kín, dịch vụ giặt ủi. <br><br> <Center><h4><b>PHÒNG Ở TẦNG 2,3,4,5 KTX</b></h4></Center>
			<br><br><center><img src="img/ktx4.jpg" style="max-height: 400px; max-width:500px;"> <br> <h6>Nội thất phòng ở tầng 2,3,4,5</h6></center> <br> <br>
			<center><img src="img/ktx5.jpg" style="max-height: 400px; max-width:500px;"> <br> <h6>Nội thất phòng vệ sinh ở tầng 2,3,4,5</h6></center> <br><br>
			<b>Sinh viên trường: 500.000</b>đồng/1 phòng(có thể ở tối đa 8 người/1 phòng hoặc ở theo yêu cầu từ 2 – 6 sinh viên) <br>
			<b>Đối tượng khác: 1000.000</b> đồng/1 phòng/1 tháng (2 – 4 người). <br>
			<b>Tiện ích:</b>giường tầng, có kệ bàn, tủ quần áo, phòng vệ sinh khép kín, được sử dụng bếp ăn tự quản, dịch vụ giặt ủi. <br><br>
			<h4><center><b>HỆ THỐNG CAMERA GIÁM SÁT HÀNH LANG 24/24</b></center></h4><br>
			<h4><center><b>CÓ ĐỘI TỰ QUẢN ĐẢM BẢO AN NINH TRẬT TỰ</b></center></h4>

		</th>
	</tr>
@endsection


{{-- @extends('master')
@section('content')
<div class="list_phong">
	<h3 style="">
         <i class="fa fa-arrow-circle-o-right"></i>
            Danh sách phòng
    </h3>
	<table class="table table-bordered table-striped datatable" id="table_export">
		<tr>
			<th>Số phòng</th>
			<th>Số người đk hiện tại</th>
			<th>Số người tối đa</th>
			<th>Giới tính</th>
			<th>Xem</th>
		</tr>
		@foreach($ttphong as $p)
		<tr>
			<td>{{$p->sophong}}</td>
			<td>{{$p->sncur}}</td>
			<td>{{$p->snmax}}</td>
			<td>@if($p->gioitinh=="nam")
					{{"Nam"}}
				@else {{"Nữ"}}
				@endif
			</td>
			<td><a href="{{route('cbql_ttphong',$p->id)}}"><button>Xem thông tin</button></a></td>
		</tr>
		@endforeach
	</table>
</div>
<div class="row">
	<div class="col-xs-6 col-left"></div>
	<div class="col-xs-6 col-right">
		<div class="dataTables_paginate paging_bootstrap">
			{!! $ttphong->links() !!}
		</div>
	</div>
</div>
@endsection --}}
