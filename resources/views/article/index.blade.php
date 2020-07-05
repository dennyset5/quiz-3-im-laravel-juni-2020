@extends('layouts.master')

@section('content')
<a href="{{ url("/article/create") }}" class="btn btn-info mb-4">Buat Article</a>
<div class="row">

    @foreach ($article as $item)
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary mb-1">
                            <a href="{{ url("/article/$item->slug") }}">
                                {{ $item->judul }}</a>    
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $item->isi }}</div>

                        @php
                            $ahai = explode(" ",$item->tag);
                        @endphp
                            @foreach ($ahai as $tag)
                                <button class="btn btn-success btn-sm">{{ $tag }}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


  </div>
@endsection


@push('script')
<script src="{{ asset("sbadmin2/js/swal.min.js")}}"></script>

<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    });
</script>
@endpush
