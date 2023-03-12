@extends('layouts.main')

@section('content')



<div class="container">

          <div class="row">
          @foreach($newsList as $key => $news)

    <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              
                <img class="card-img-top" data-src="{{$news['image']}}" alt="Card image cap">
                <div class="card-body">
                <h4>{{$news['title']}}</h4>
                  <p class="card-text">{{$news['description']}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a href="<?=route('news.show', ['id'=>$key])?>">View</a></button>
                    </div>
                    <small class="text-muted">{{$news['author']}} - {{$news['created_at']->format('d-m-Y H:i')}}</small>
                  </div>
                </div>
              </div>
            </div>
@endforeach
          </div>
        </div>
@endsection