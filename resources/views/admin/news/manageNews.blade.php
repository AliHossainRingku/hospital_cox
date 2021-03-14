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
                        <form method="post" action="{{URL::to('admin/unpublish-news')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <input type="hidden" name="inputId" value="{{$new->id}}">
                            <button style="color: red" class="glyphicon glyphicon-remove" type="submit"></button>
                        </form> 
                    <?php } else{?>
                    <form method="post" action="{{URL::to('admin/publish-news')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <input type="hidden" name="inputId" value="{{$new->id}}">
                            <button style="color: green" class="glyphicon glyphicon-ok" type="submit"></button>
                        </form>
                    <?php }?>

                    <form method="get" action="{{URL::to('admin/new/'.$new->id)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <input type="hidden" name="inputId" value="{{$new->id}}">
                        <button style="color: blue" class="glyphicon glyphicon-edit" type="submit"></button>
                    </form> 

                    <form method="post" action="{{URL::to('admin/delete-news')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <input type="hidden" name="inputId" value="{{$new->id}}">
                        <button style="color: red" class="glyphicon glyphicon-trash" type="submit" onclick="return confirm('Are you sure to delete it?')"></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>


@endsection
