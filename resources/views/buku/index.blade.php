@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <form action="{{route('categories.store')}}" method="post">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Judul Buku</label>
                                    <input type="text" name="judul_buku" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="id_kategori" id="" class="form-control">
                                        <option value="">-Pilih kategori-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Penerbit</label>
                                    <input type="text" name="penerbit" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Penulis</label>
                                    <input type="text" name="penulis" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Cover</label>
                                    <input type="file" name="cover" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="number" name="stok" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>ISBN</label>
                                    <input type="number" name="isbn" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-4 mb-4">
                            <button type="submit" class="btn btn-primary">Tambah Kategori</button>
                        </div>
                    </form>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <th>Nama Kategori</th>
                                <th>Pilihan</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->kategori}}</td>
                                    <td>
                                        <form action="{{route('categories.destroy', $item->id)}}" method="post">
                                            @csrf
                                            {{method_field('delete')}}

                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                            <a href="{{route('categories.show', $item->id)}}" class="btn btn-info">Detail</a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
