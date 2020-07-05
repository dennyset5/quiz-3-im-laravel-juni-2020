@extends('layouts.master')

@section('content')
<div class="col-xl-12 col-md-12 mb-4">
    <div class="card border-left-primary shadow h-200 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-lg font-weight-bold text-primary mb-1">
                    {{ $article->judul }}
                </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">Slug {{ $article->slug }}</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">Isi {{ $article->isi }}</div>

                @php
                    $ahai = explode(" ",$article->tag);
                @endphp
                    @foreach ($ahai as $tag)
                        <button class="btn btn-success btn-sm">{{ $tag }}</button>
                    @endforeach
                </div>
            </div>

            <div class="mt-4 float-right">
                <a href="{{ url("/article/$article->slug/edit") }}" class="btn btn-info">Edit</a>
                <form action="{{ url("/article/$article->slug") }}" method="post" style="display:inline">
                
                <button class="btn btn-danger" type="submit">Hapus</button>
                @csrf
                @method("DELETE")
                </form>
            </div>
        </div>
    </div>
</div>
@endsection