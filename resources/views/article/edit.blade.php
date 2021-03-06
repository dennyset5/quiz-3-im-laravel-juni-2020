@extends('layouts.master')

@section('content')
<div class="row">    
    <div class="col-lg-7">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Buat Article</h1>
          </div>
          <form class="user" method="POST" action="{{ url("/article/$article->slug") }}">
            <div class="form-group">
                <input type="text" name="judul" class="form-control" placeholder="Judul" value="{{ $article->judul }}">
            </div>
            <div class="form-group">
                <textarea name="isi" class="form-control" id="" cols="30" rows="10" placeholder="isi">{{ $article->isi }}</textarea>
            </div>
            <div class="form-group">
                <label for="" class="text-warning">Lebih dari 1 tag berikan [spasi]</label>
                <input name="tag" type="text" class="form-control" placeholder="Tag" value="{{ $article->tag }}">
            </div>
            <button class="btn btn-primary btn-user btn-block" type="submit">
              Edit Article
            </button>
            @method("PUT")
            @csrf
            <hr>
          </form>
        </div>
      </div>
  </div>
@endsection