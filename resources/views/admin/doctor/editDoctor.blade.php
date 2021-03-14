@extends('admin.admin_layout')

@section('admin_content')
    <h1>Edit Department</h1>
    <hr>{{ Session::get('msg') }}

    {!! Form::open(['url'=>'/update-category','method'=>'POST', 'name'=>'editForm']) !!}
    <div class="form-group">
        <label for="categoryName">Category Name:</label>
        <input type="text" class="form-control" name="category_name" value="{{ $categoryById->category_name}}">
    </div>
    <div class="form-group">
        <label for="category_description">Category Description:</label>
        <textarea type="text" class="form-control" id="category_description" name="category_description">{{ $categoryById->category_description }}</textarea>
    </div>
    <div class="form-group">
        <label for="publication_status">Publication Status:</label>
        <select type="text" name="publication_status" class="form-control" id="publication_status">
            <option>Select Publication Status</option>
            <option value="1">Published</option>
            <option value="0">Unpublished</option>
        </select>
    </div>

    <input type="hidden" name="category_id" value="{{ $categoryById->category_id }}">

    <button type="submit" class="btn btn-success btn-block">Submit</button>
    {!! Form::close() !!}

    <script>
        document.forms['editForm'].elements['publication_status'].value={{ $categoryById->publication_status }}
    </script>

@endsection
