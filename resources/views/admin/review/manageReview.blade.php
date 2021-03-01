@extends('admin.admin_layout')

@section('admin_content')
    <h1>Manage Reviews</h1>

    {{ Session::get('msg') }}

    <hr>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>SI</th>
            <th>User Name</th>
            <th>Review Description</th>
            <th>Rating</th>
            <th>Time</th>
            <th>Publication Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $i = 0;
        ?>
        @foreach($reviews as $review)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $review->user_name }}</td>
                <td>{{ $review->review_description}}</td>
                <td>{{ $review->rating}}</td>
                <td>{{ $review->created_at}}</td>
                <td><?php if($review->publication_status == 1){ ?> <a style="color: green">Published</a><?php } else{ ?> <a style="color: darkred">Unpublished</a><?php } ?></td>
                <td>
                    <?php if($review->publication_status == 1 ){ ?>
                    <a style="color:red" class="glyphicon glyphicon-remove" href="{{ url('/deactive-review/'.$review->id) }}"></a> <?php } else{
                        ?>
                    <a style="color:green" class="glyphicon glyphicon-ok" href="{{ url('/active-review/'.$review->id) }}"></a><?php }?>

                    |
                    <a href="{{ url('/reviews/'.$review->id) }}">Edit</a> |
                    <a href="{{ url('/reviews/'.$review->id) }}" onclick="return confirm('Are you sure to delete it?')">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>




@endsection
