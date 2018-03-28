
@extends('layouts.main')

@section('content')

 <h1 class="page-header">บันทึกข้อมูล</h1>

                    <div class="col-sm-12">
                          <form action="/upload1" method="post"enctype="multipart/form-data" >
                             
                          <div class="form-group">

                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">File</label>
                                <div class="col-sm-3">
                                <input type="text" class="form-control" name="uploadfilename">
                                <input type="file" class="form-control"  name="uploadfile" >
                                
                                </div>
                                
                          </div> <br><br><br>

                                                  
                          
                  <center>
                        <button type="submit" class="btn btn-primary">Upload</button>
                        <a type="button" href="/form_birthday" class="btn btn-danger">ยกเลิก</a>                      
                </center>
                        <br> <br> <br>


                        <table border="1" width="40%">
    <thead>
        <tr>
            <th>#</th>
            <th>ชื่อไฟล์</th>
            <th>ประเภทไฟล์</th>
            <th>Download</th>
            <th>ขนาดไฟล์(KB)</th>
        </tr>
    </thead>
    <tbody>

        @foreach($datatable as $row)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $row->FileName }}</td>
            <td>{{ $row->FileType }}</td>
            <td>{{ $row->Filepath }}</td>
            <td>{{ $row->FileSize }}</td>      
            <td><a href=" dl/{{$row->Filepath}}/{{ $row->FileName }}.{{ $row->FileType }}" taget="new">Download</a></td>
            <td><button ="submit" class="btn btn-primary" href="rm/{{$row->ID}}">ลบ</button></td>
        </tr>
        @endforeach
    </tbody>

</table>

                </form>
@endsection