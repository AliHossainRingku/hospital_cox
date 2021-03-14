@extends('admin.admin_layout')

@section('admin_content')
    <h1>Edit Department</h1>

    <hr>
        {{ Session::get('msg') }}

    <hr>

    @foreach($edit_department as $department)
    <form class="form-horizontal" action="{{URL::to('admin/departments/'.$department->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
    <div class="form-group">
        <label class="control-label col-sm-2" for="department_name">Department Name:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="department_name" name="department_name" value="{{$department->department_name}}" required>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="department_description">Department Description:</label>
        <div class="col-sm-10">
            <textarea type="text" class="form-control" id="department_description" name="department_description" required>{{$department->department_description}}</textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="department_image">Department Image:</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="department_image" name="department_image" required>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="publication_status">Publication Status:</label>
        <div class="col-sm-10">
            <select type="text" class="form-control" id="publication_status" name="publication_status">
                <option>Select Publication Status</option>
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
            </select>
        </div>
    </div>

    <input type="hidden" name="inputId" value="{{$department->id}}">

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success btn-block">Submit</button>
        </div>
    </div>
    </form>
    @endforeach

    <script>
        document.forms['editForm'].elements['publication_status'].value={{ $department->publication_status }}
    </script>
@endsection
