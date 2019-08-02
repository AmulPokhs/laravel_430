<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Add</title>
</head>
<link rel="stylesheet" href="{{asset("css/app.css")}}">
<body>
<div class="col-12">
    <h4 class="text-center">
        {{"Blog List"}}
    </h4>
</div>
<div class="col-12">

    <form action = "{{route('blog.store')}}" method = "post" class="form" enctype="multipart/form-data">
        @csrf
    <div class="form-group row">
        <label for="" class="col-sm-3">Title</label>
        <div class="col-sm-9">
            <input type="text" name = "title" value = "{{old('title')}}"  placeholder = "Enter title" class="form-control form-control-sm">
            @error('title')
            <span class =" alert-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>



        <div class="form-group row">
            <label for="" class="col-sm-3">Summary</label>
            <div class="col-sm-9">
                <textarea name="summary" id="summary"  rows="5" style = "resize:none" class="form-control form-control-sm">{{old('summary')}}</textarea>
            </div>
        </div>



        <div class="form-group row">
        <label for="" class="col-sm-3">Description</label>
        <div class="col-sm-9">
            <textarea name="description" id="description"  rows="5" style = "resize:none" class="form-control form-control-sm">{{old('description')}}</textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3">Status</label>
        <div class="col-sm-9">
            <select name="status" id="status" class="form-control form-control-sm">
                <option value="active" {{ old('status') =='active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status') =='inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
    </div>


        <div class="form-group row">
            <label for="" class="col-sm-3">Image</label>
            <div class="col-sm-9">
                <input type = 'file' name = 'image' >
            </div>
        </div>
    <div class="form-group row">
        <label for="" class="col-sm-3"></label>
        <div class="col-sm-9">
    <button class="btn btn-danger" type ='reset'> Reset</button>
            <button class="btn btn-success" type ='submit'> Submit</button>
        </div>
    </div>
</form>
</div>

</body>
</html>
