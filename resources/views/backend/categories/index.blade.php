@extends('backend.layouts.app');
@section('title',trans('Category List'))
@section('content')

<link rel="stylesheet" href="{{asset('public/assets/css/vew.css')}}">

<div class="row" id="table-border">
    <div class="col-12">
        <div class="card">
        <div>
<a class="btn btn-info py-2 px-4 m-2" href="{{ route('categories.create') }}"><i
class="mdi mdi-plus"></i></a>
</div>
 <table class="table table-striped">
  <thead>
    <tr class="bg">
      <th scope="col">{{ __('#SL') }}</th>
      <th scope="col">{{ __('category_id') }}</th>
      <th scope="col">{{ __('name') }}</th>
      <th scope="col">{{ __('Create_at') }}</th>
      <th scope="col">{{ __('Action') }}</th>
    </tr>
  </thead>
  <tbody>
  @forelse($category as $p)
    <tr>
      <th scope="row">{{ ++$loop->index}}</th>
      <td>{{ $p->category_id }}</td>
      <td>{{ $p->name}}</td>
      <td>{{ $p->created_at }}</td>
      <td class="white-space-nowrap">
      <a href="{{ route('categories.edit', encryptor('encrypt', $p->id)) }}">
      <i class="mdi mdi-box-cutter"></i>
      </a>
      <a href="javascript:void()" onclick="$('#form{{ $p->id }}').submit()">
      <i class="mdi mdi-delete"></i>
      </a>
      <form id="form{{ $p->id }}"
     action="{{ route('categories.destroy',encryptor('encrypt', $p->id)) }}"
     method="post">
@csrf
@method('delete')
   </form>
</td>
@empty
<tr>
<th colspan="8" class="text-center">No Catagories Found</th>
</tr>
@endforelse
  </tbody>
</table>
        </div>
    </div>
</div>
@endsection