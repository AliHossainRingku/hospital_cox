@extends('admin.admin_layout')

@section('admin_content')
    <h1>Manage Doctor</h1>

    {{ Session::get('msg') }}

    <hr>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>SI</th>
            <th>Doctor Name</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Doctor Description</th>
            <th>Profile Picture</th>
            <th>Publication Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $i = 0;
        ?>
        @foreach($doctors as $department)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $department->doctor_name }}</td>
                <td>{{ $department->department_id}}</td>
                <td>{{ $department->doctor_designation}}</td>
                <td>{{ $department->doctor_description}}</td>
                <td><img src="{{asset($department->doctor_image)}}" style="height: 70px; width: 100px"></td>

                <td><?php if($department->publication_status == 1){ ?> <a style="color: green">Published</a><?php } else{ ?> <a style="color: darkred">Unpublished</a><?php } ?></td>
                <td>
                    <?php if($department->publication_status == 1 ){ ?>
                    <a style="color:red" class="glyphicon glyphicon-remove" href="{{ url('/deactive-department/'.$department->id) }}"></a> <?php } else{
                        ?>
                    <a style="color:green" class="glyphicon glyphicon-ok" href="{{ url('/active-department/'.$department->id) }}"></a><?php }?>

                    |
                    <a href="{{ url('/departments/'.$department->id) }}">Edit</a> |
                    <a href="{{ url('/departments/'.$department->id) }}" onclick="return confirm('Are you sure to delete it?')">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>




@endsection
