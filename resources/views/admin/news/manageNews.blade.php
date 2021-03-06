@extends('admin.admin_layout')

@section('admin_content')
    <h1>Manage News</h1>

    {{ Session::get('msg') }}

    <hr>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>SI</th>
            <th>News Headline</th>
            <th>News Description</th>
            <th>Image</th>
            <th>News URL</th>
            <th>Publication Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $i = 0;
        ?>
        @foreach($news as $new)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $new->news_title }}</td>
                <td>{{ $new->news_description}}</td>
                <td><img src="{{asset($new->news_image)}}" style="height: 60px; width: 100px;"></td>
                <td>{{ $new->news_url}}</td>
                <td><?php if($new->publication_status == 1){ ?> <a style="color: green">Published</a><?php } else{ ?> <a style="color: darkred">Unpublished</a><?php } ?></td>
                <td>
                    <?php if($new->publication_status == 1 ){ ?>
                    <a style="color:red" class="glyphicon glyphicon-remove" href="{{ url('/deactive-department/'.$new->id) }}"></a> <?php } else{
                        ?>
                    <a style="color:green" class="glyphicon glyphicon-ok" href="{{ url('/active-department/'.$new->id) }}"></a><?php }?>

                    |
                    <a href="{{ url('/departments/'.$new->id) }}">Edit</a> |
                    <a href="{{ url('/departments/'.$new->id) }}" onclick="return confirm('Are you sure to delete it?')">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>


@endsection
