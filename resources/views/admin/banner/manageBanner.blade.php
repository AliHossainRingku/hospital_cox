@extends('admin.admin_layout')

@section('admin_content')
    <h1>Manage Slider/Banner</h1>

    {{ Session::get('msg') }}

    <hr>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>SI</th>
            <th>Banner Title</th>
            <th>Doctor Description</th>
            <th>Image</th>
            <th>Publication Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $i = 0;
        ?>
        @foreach($banners as $banner)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $banner->banner_title }}</td>
                <td>{{ $banner->banner_description}}</td>
                <td><img src="{{asset($banner->banner_image)}}" style="height: 70px; width: 100px;"></td>
                <td><?php if($banner->publication_status == 1){ ?> <a style="color: green">Published</a><?php } else{ ?> <a style="color: darkred">Unpublished</a><?php } ?></td>
                <td>
                    <?php if($banner->publication_status == 1 ){ ?>
                    <a style="color:red" class="glyphicon glyphicon-remove" href="{{ url('/deactive-banner/'.$banner->id) }}"></a> <?php } else{
                        ?>
                    <a style="color:green" class="glyphicon glyphicon-ok" href="{{ url('/active-banner/'.$banner->id) }}"></a><?php }?>

                    |
                    <a href="{{ url('/banners/'.$banner->id) }}">Edit</a> |
                    <a href="{{ url('admin/banners/'.$banner->id) }}" onclick="return confirm('Are you sure to delete it?')">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>




@endsection
