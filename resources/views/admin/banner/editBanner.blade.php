@extends('admin.admin_layout')

@section('admin_content')
    <h1>Edit Banner</h1>
    <hr>{{ Session::get('msg') }}

    @foreach($edit_banner as $banner)
    <form class="form-horizontal" action="{{URL::to('admin/banners/'.$banner->id)}}" method="post" enctype="multipart/form-data" name="editForm">
        {{csrf_field()}}
        <div class="form-group">
            <label class="control-label col-sm-2" for="banner_title">Slider Title:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="banner_title" name="banner_title" value="{{$banner->banner_title}}" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="banner_subtitle">Slider Subtitle:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="banner_subtitle" name="banner_subtitle" value="{{$banner->banner_subtitle}}" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="banner_description">Slider Description:</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" id="banner_description" name="banner_description" required>{{$banner->banner_description}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="banner_image">Slider Image:</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="banner_image" name="banner_image" required>
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
        <input type="hidden" name="inputId" value="{{$banner->id}}">
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </div>
        </div>
    </form>
    @endforeach


    <script>
        document.forms['editForm'].elements['publication_status'].value={{ $banner->publication_status }}
    </script>

@endsection
