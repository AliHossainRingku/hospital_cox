@extends('admin_layout')

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
                <td><?php if($service->publication_status == 1){ ?> <a style="color: green">Published</a><?php } else{ ?> <a style="color: darkred">Unpublished</a><?php } ?></td>
                <td>
                    <?php if($service->publication_status == 1 ){ ?>
                    <a style="color:red" class="glyphicon glyphicon-remove" href="{{ url('/deactive-service/'.$service->id) }}"></a> <?php } else{
                        ?>
                    <a style="color:green" class="glyphicon glyphicon-ok" href="{{ url('/active-service/'.$service->id) }}"></a><?php }?>

                    |
                    <a href="{{ url('/services/'.$service->id) }}">Edit</a> |
                    <a href="{{ url('/services/'.$service->id) }}" onclick="return confirm('Are you sure to delete it?')">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>




@endsection
