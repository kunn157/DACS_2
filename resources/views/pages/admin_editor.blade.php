@extends('master')

@section('content')
<form>
	<div class="form-group">
   <div class="form-row">
      <div class="col">
         <label>Tiêu Đề Bài Viết </label>
         <input type="textarea" name="" class="form-control" style="height: 60px; width: 900px;">
        
      </div>
      <div class="form-group" style="margin-top: 60px;">
         <label for="comment">Bài Viết:</label>
            <textarea class="form-control" rows="5" style="height: 200px; width: 900px;"></textarea>
           </div>
   </div>
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>

@endsection