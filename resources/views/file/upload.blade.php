@extends('layouts.main')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<center>
@if(count($edit) == 0 )

    <form action="/upload1" method="post" enctype="multipart/form-data">
        
        <div class="row">  
            <div class="col-md-4">
                <center>
                    <img id="view" src="https://digitalmarketingphilippines.com/wp-content/uploads/2014/09/epci-paid-social-ads.jpg" style="width: 400px;" />
                </center>
            </div>  
            <div class="col-md-1">
            </div>
            <div class="col-md-4" style=" padding: 10px; width: 100px; margin: 250px 10px 10px 70px;">
                <div class="form-inline">
                    <input type="text" name="uploadfilename" class="form-control" style="width:300px;" placeholder="กรอกชื่อไฟล์"><br>
                    <input type="file" id="pathphoto" name="uploadfile" class="form-control" accept="image/*" style="width: 200px;">
                </div><br>
                    <input type="submit" value="upload" class="btn btn-primary btn-block" style="width: 100px;">
                </div>
            </div>
    </form>
@elseif(count($edit) > 0 )
    @foreach($edit as $row)
    <form action="/update1" method="post" enctype="multipart/form-data">
        <center><h3>บันทึกรูปภาพ</h3></center>
        <center>
            <img id="view" src="{{asset('upload/'.$row->Filepath)}}" style="width: 500px;" />
        </center>
        <input type="hidden" name="ID" value="{{$row->ID}}">
        <input type="text" name="uploadfilename" class="form-control" value="{{$row->FileName}}" style="width:300px;">
        <input type="file" id="pathphoto" name="uploadfile" class="form-control" accept="image/*"  style="width: 100px;">
        
        <input type="submit" value="upload" class="btn btn-primary btn-block" style="width:100px;">
    </form>
    @endforeach
@endif

</center>
<br><br>
<button class="btn btn-danger" onclick="getID()">DELETE ON SELECT</button>
<table  width="80%" class="table">
    <thead>
        <tr class="info">
            <th><input type="checkbox" id="itemall" ></th>
            <th>#</th>
            <th width="25%">แสดงภาพ</th>
            <th>ชื่อไฟล์</th>
            <th>ประเภทไฟล์</th>
            <th>ขนาด</th>
            <th>Operation</th>
        </tr>
    </thead>
    <tbody>
    @foreach($datatable as $row)
        <tr>
             <td>
                <input type="checkbox"  class="item" value="{{$row->ID}}">
             </td>
            <td>{{ $i++ }}</td>
            <td>
                @if($row->FileType == 'jpeg' || $row->FileType == 'png')
                    <!-- <img src="upload/{{ $row->Filepath }}" width="60px"> -->
                    <img src="{{ asset('upload/'.$row->Filepath) }}" width="100%">                    
                @endif
            </td>
            <td>{{ $row->FileName }}</td>
            <td>{{ $row->FileType }}</td>
            <td>{{ $row->FileSize }}.Kb</td>
            <td>
                <a href="dl/{{$row->Filepath}}/{{ $row->FileName }}.{{ $row->FileType }}" target="new" class="btn btn-warning">Download</a>
                <a href="rm/{{$row->ID}}" class="btn btn-danger">Delete</a>
                <a href="{{url('ed/'.$row->ID)}}" class="btn btn-info">Edit</a>
            </td>
        </tr>
    @endforeach
    </tbody>
    
</table>



<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                if(input.files[0].type == 'image/jpeg' || input.files[0].type == 'image/png'){
                    $('#view').attr('src', e.target.result);
                }else{
                    alert('รูปแบบไฟล์ไม่ถูกต้อง');
                    $('#pathphoto').val('');
                    $('#view').attr('src', 'images/icon_blank.png');
                   
                }
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#pathphoto").change(function() {
        readURL(this);
    });
</script>


<script>
		$('#itemall').click(function(){
			if($('#itemall').is(':checked')){
				$(".item").prop('checked', true);
			}else{
				$(".item").prop('checked', false);
			}
		});
        function getID(){
			var final = [];
			$('.item:checked').each(function(){        
			    var values = $(this).val();
			    final.push(values);
			});
                console.log(final);
                //send data to server
			$.ajax({
				url: './api/delete',
				type: 'POST',
				dataType: 'json',
				data: {param: final},
			})
			.done(function(res) {
                location.reload();
				console.log(res);
			});
        }
</script>


@endsection