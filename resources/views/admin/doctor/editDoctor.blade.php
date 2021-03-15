@extends('admin.admin_layout')

@section('admin_content')
    <h1>Edit Doctor</h1>
    <hr>{{ Session::get('msg') }}

    @foreach($edit_doctors as $doctor)
    <form class="form-horizontal" action="{{URL::to('admin/doctors/'.$doctor->id)}}" method="post" enctype="multipart/form-data" name="editForm">
        {{csrf_field()}}
        <div class="form-group">
            <label class="control-label col-sm-2" for="doctor_name">Doctor Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="doctor_name" name="doctor_name" value="{{$doctor->doctor_name}}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="department_id">Department:</label>
            <div class="col-sm-10">

                <?php $departments = DB::table('departments')
                    ->where('publication_status',1)
                    ->get();
                ?>

                <select type="text" class="form-control" id="department_id" name="department_id">
                    <option>Select Department</option>
                    @foreach($departments as $department)
                        <option value="{{$department->id}}">{{ $department->department_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="doctor_designation">Designation:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="doctor_designation" name="doctor_designation" value="{{$doctor->doctor_designation}}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="doctor_description">Doctor Description:</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" id="doctor_description" name="doctor_description" required>{{$doctor->doctor_description}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="doctor_image">Profile Picture:</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="doctor_image" name="doctor_image">
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
        <input type="hidden" name="inputId" value="{{$doctor->id}}">

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </div>
        </div>
    </form>


    <script>
        document.forms['editForm'].elements['department_id'].value={{ $doctor->department_id }}

        document.forms['editForm'].elements['publication_status'].value={{ $doctor->publication_status }}
    </script>
    @endforeach

@endsection
