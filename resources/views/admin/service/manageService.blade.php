@extends('admin.admin_layout')

@section('admin_content')
    <h1>Manage Services</h1>

    {{ Session::get('msg') }}

    <hr>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>SI</th>
            <th>Service Name</th>
            <th>Service Description</th>
            <th>Image</th>
            <th>Publication Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $i = 0;
        ?>
        @foreach($services as $service)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $service->service_name }}</td>
                <td>{{ $service->service_description}}</td>
                <td><img src="{{ asset($service->service_image) }}" style="height: 60px; width: 100px"></td>
                <td><?php if($service->publication_status == 1){ ?> <a style="color: green">Published</a><?php } else{ ?> <a style="color: darkred">Unpublished</a><?php } ?></td>
                <td>
                    <?php if($service->publication_status == 1 ){ ?>
                        <form method="post" action="{{URL::to('admin/unpublish-service')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <input type="hidden" name="inputId" value="{{$service->id}}">
                            <button style="color: red" class="glyphicon glyphicon-remove" type="submit"></button>
                        </form> 
                    <?php } else{?>
                    <form method="post" action="{{URL::to('admin/publish-service')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <input type="hidden" name="inputId" value="{{$service->id}}">
                            <button style="color: green" class="glyphicon glyphicon-ok" type="submit"></button>
                        </form>
                    <?php }?>

                    <form method="post" action="{{URL::to('admin/edit-service')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <input type="hidden" name="inputId" value="{{$service->id}}">
                        <button style="color: blue" class="glyphicon glyphicon-edit" type="submit"></button>
                    </form> 

                    <form method="post" action="{{URL::to('admin/delete-service')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <input type="hidden" name="inputId" value="{{$service->id}}">
                        <button style="color: red" class="glyphicon glyphicon-trash" type="submit" onclick="return confirm('Are you sure to delete it?')"></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>




@endsection
