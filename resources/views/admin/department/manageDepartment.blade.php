@extends('admin.admin_layout')

@section('admin_content')
    <h1>Manage Department</h1>

    {{ Session::get('msg') }}

    <hr>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>SI</th>
            <th>Department Name</th>
            <th>Department Description</th>
            <th>Image</th>
            <th>Publication Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $i = 0;
        ?>
        @foreach($departments as $department)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $department->department_name }}</td>
                <td>{{ $department->department_description}}</td>
                <td><img src="{{ asset($department->department_image) }}" alt="Image" style="height: 70px; width: 100px"></td>
                <td><?php if($department->publication_status == 1){ ?> <a style="color: green">Published</a><?php } else{ ?> <a style="color: darkred">Unpublished</a><?php } ?></td>
                <td>
                    <?php if($department->publication_status == 1 ){ ?>
                        <form method="post" action="{{URL::to('admin/unpublish-department')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <input type="hidden" name="inputId" value="{{$department->id}}">
                            <button style="color: red" class="glyphicon glyphicon-remove" type="submit"></button>
                        </form> 
                    <?php } else{?>
                    <form method="post" action="{{URL::to('admin/publish-department')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <input type="hidden" name="inputId" value="{{$department->id}}">
                            <button style="color: green" class="glyphicon glyphicon-ok" type="submit"></button>
                        </form>
                    <?php }?>

                    <form method="get" action="{{URL::to('admin/departments/'.$department->id)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <input type="hidden" name="inputId" value="{{$department->id}}">
                        <button style="color: blue" class="glyphicon glyphicon-edit" type="submit"></button>
                    </form> 

                    <form method="post" action="{{URL::to('admin/delete-department')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <input type="hidden" name="inputId" value="{{$department->id}}">
                        <button style="color: red" class="glyphicon glyphicon-trash" type="submit" onclick="return confirm('Are you sure to delete it?')"></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>




@endsection
