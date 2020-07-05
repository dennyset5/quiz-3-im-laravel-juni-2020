@extends('layouts.master')

@section('content')

    <a href="/artikel/create" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Buat Artikel</a>

    <table class="table table-striped table-hover mt-3">
        <tr>
            <th>Judul</th>
            <th>Action</th>
        </tr>
        @foreach ($article as $article)
            <tr>
                <td>{{$article->judul}}</td>
                <td>
                    <a href="/artikel/{{$article->id}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i>&nbsp;&nbsp;Lihat</a>
                    <a href="/artikel/{{$article->id}}/edit" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>
                    <form action="/artikel/{{$article->id}}" method="post" style="display:inline;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>&nbsp;&nbsp;Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="mt-5 text-warning">
        <p>Note: table article adalah foreign key dari tabel user, agar berjalan setidaknya harus ada data pada tabel user</p>
    </div>
@endsection

@push('scripts')
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endpush