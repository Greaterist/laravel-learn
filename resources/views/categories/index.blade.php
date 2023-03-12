@extends('layouts.main')

@section('content')

<div class="list-group container">
@foreach($categoriesList as $key => $categories)
    <a href="{{route('categories.show', ['id'=>$key])}}" class="list-group-item list-group-item-action">{{$categories['category_id']}}</a>
@endforeach
</div>

@endsection