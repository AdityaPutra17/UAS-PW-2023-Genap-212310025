@extends('tamplateadmin')
@section('content')

<div class="d-flex col-md-12">
    <div class="col-md-6">
        <h1 class="mt-3 fw-bold">Culinary</h1>
    </div>
    <div class="col-md-6 text-end">
        <a href="kuliner/create" class="btn main-color text-white fs-5 fw-bold"> Create new post</a>
    </div>
</div>
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{session('success')}}
</div>
@endif
{{-- start table --}}
<div class="col-md-12">
    <form method="get" action="/admin/kuliner">
        @csrf
        <div class="card-body mt-3">
            <div class="table-responsive shadow">
                <table class="table table-striped">
                    <thead class="fs-6 fw-bold bg-light">
                        <tr class="fs-6">
                            <th>No.</th>
                            <th class="text-center">Gambar</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="fw-6 text-secondary">
                        @if(count($kuliners)>0)
                        @foreach($kuliners as $kuliner)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class=" text-center"><img src="{{asset('storage/'.$kuliner->image)}}" style="width: 30%" alt=""></td>
                            <td>{{$kuliner->nama}}</td>
                            <td>{{$kuliner->deskripsi}}</td>
                            <td>{{$kuliner->kategori->nama}}</td>
                            <td>{{$kuliner->harga}}</td>
                            <td>
                                <div class="btn-group">
                                    <form action="/admin/kuliner/{{$kuliner->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm bg-danger text-white rounded" onclick="return confirm('Are You Sure to Delete this post')">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="/admin/kuliner/{{$kuliner->id}}/edit" class="btn btn-sm bg-primary text-white" type="button">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="{{ route('kuliner.show', ['kuliner' => $kuliner->id]) }}" class="btn btn-sm bg-success text-white" type="button">
                                        <i class="fa-regular fa-square-check"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="7">No record Found</td>
                        </tr>
                        @endif
                    </tbody>

                </table>
            </div>
        </div>
    </form>
</div>
@endsection
