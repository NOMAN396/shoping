@extends('backend.layouts.app');
@section('title',trans('Category List'))
@section('content')



<div class="col-8">
    <div class="card">
<form class="" method="post"enctype="multipart/form-data"
                                action="{{ route('categories.store') }}">
                                @csrf

  <div class="form-group col-8">
    <label class="" for="">Category_id:<i class="text-danger">*</i></label>
    <input type="number" class="form-control" id="category_id" name="category_id" value="{{ old('category_id') }}">
         @if ($errors->has('category_id'))
            <span class="text-danger"> {{ $errors->first('category_id') }}</span>
            @endif
  </div>
  <div class="form-group col-8">
    <label class="" for="">name:<i class="text-danger">*</i></label>
    <input type="text" class="form-control" id="name" value="{{ old('name') }}" name="name">
           @if ($errors->has('name'))
            <span class="text-danger"> {{ $errors->first('name') }}</span>
            @endif
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
    </div>
</div>
@endsection