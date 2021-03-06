@extends('admin.admin_layout')

@section('admin_content')
    <h1>Add Slider/Banner</h1>

    <hr>
    {{ Session::get('msg') }}

    <hr>

    <form class="form-horizontal" action="{{URL::to('admin/banners')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label class="control-label col-sm-2" for="banner_title">Slider Title:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="banner_title" name="banner_title" placeholder="Enter Slider Title" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="banner_subtitle">Slider Subtitle:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="banner_subtitle" name="banner_subtitle" placeholder="Enter Slider Subtitle" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="category_description">Slider Description:</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" id="banner_description" name="banner_description" placeholder="Enter Slider Description" required></textarea>
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

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </div>
        </div>
    </form>

    <!--- Include of Form validation code from Admin Error.blade.php-->


@endsection
