@extends('master')
@section('title','List manager')
@section('content')
	<h3 >
        <i class="entypo-right-circled"></i>
        Cán bộ quản lý
    </h3>        
    <table class="table table-bordered datatable" id="table_export">
        <thead>
            <tr>
            	<th width="100"><div>Ảnh</div></th>
                <th><div>Tên</div></th>
                <th><div>E-mail</div></th>
                <th><div>Mã Số Sv</div></th>
                <th><div>Giới Tính</div></th>
                <th><div>Lớp</div></th>
            </tr>
        </thead>
        
        <tbody>
                  @foreach($manager as $temp )   	
                          <tr>   
                                 <td><img src="img/{{$temp->image}}" style="height: 50px; width:50px"></td>
                                <td>{{$temp->name}}</td> 
                                <td>{{$temp->email}}</td>
                              @foreach($sinhvien as $item )
                                <td >{{$item->mssv}} </td> 
                               @endforeach
                            </tr>
                   @endforeach
          
        </tbody>
         
          
    </table>
@endsection