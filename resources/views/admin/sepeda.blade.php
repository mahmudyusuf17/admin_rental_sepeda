@extends('layout.master')
@section('title', 'Sepeda')
@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Sepeda</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Sepeda</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
    <!-- Main row -->
    <div class="row">
        <div class="col-lg-12">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-bicycle mr-1"></i>
                Data Sepeda
            </h3>
                <button class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#modal-tambahdata"><i class="fas fa-plus"></i> Tambah Data</button>
            </div><!-- /.card-header -->
            <div class="card-body">
            <div class="tab-content p-0">
            <table id="datatable" class="table table-bordered table-hover text-center">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Merk</th>
                    <th>Jenis</th>
                    <th width="10%">Jumlah Sepeda</th>
                    <th>Harga Sewa /Hari</th>
                    <th>Status</th>
                    <th width="20%">Aksi</th>
                </tr>
                </thead>
                @php
                $i=0;
                @endphp
                @foreach($sepeda as $bike)
                <tbody>
                    <tr>
                        <td>{{ ++$i}}</td>
                        <td>{{ $bike->merk }}</td>
                        <td>{{ $bike->jenis }}</td>
                        <td>{{ $bike->jml_sepeda }}</td>
                        <td>{{ $bike->harga_sewa }}</td>
                        <td>
                            @if($bike->status === "1")
                            <span class="badge badge-info">Tersedia</span>
                            @elseif($bike->status === "2")
                            <span class="badge badge-danger">Kosong</span>
                            @endif
                        </td>
                        <td class="d-inline-flex">
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-viewsepeda-{{ $bike->id }}"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-success btn-sm mx-2" data-toggle="modal" data-target="#modal-editdata"><i class="fas fa-pencil-alt"></i></button>
                            <form action="{{ route('hapusSepeda',$bike->id) }}"  method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Yakin Data Mau Dihapus??');"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            </div>  
        </div><!-- /.card-body -->
        </div>
    <!-- /.card -->
    </div>
</div>
</div>
</section>
</div>

<div class="modal fade" id="modal-tambahdata">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title"><i class="fas fa-bicycle mr-1"></i> Tambah Data Sepeda</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="{{route('addSepeda')}}" method="post">
            <div class="col-md-12 d-inline-flex">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="merk">Merk Sepeda</label>
                        <input type="text" class="form-control" name="merk" id="merk" placeholder="merk sepeda" value="{{ old('merk') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jenis">Jenis Sepeda</label>
                        <input type="text" class="form-control" name="jenis" id="jenis" placeholder="jenis sepeda" value="{{ old('jenis') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-12 d-inline-flex">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="no_rangka">Nomor Rangka Sepeda</label>
                        <input type="text" class="form-control" name="no_rangka" id="no_rangka" placeholder="nomor rangka" value="{{ old('no_rangka') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="warna">Warna Sepeda</label>
                        <input type="text" class="form-control" name="warna" id="warna" placeholder="warna sepeda" value="{{ old('warna') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="gambarsepeda">Gambar Sepeda</label>
                    <div class="input-group">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambarsepeda" name="gambar">
                        <label class="custom-file-label" for="gambarsepeda">Pilih Gambar</label>
                        </div>
                        <div class="input-group-append">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5">{{ old('deskripsi') }}</textarea>
                </div>
            </div>
            <div class="col-md-12 d-inline-flex">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="jml_sepeda">Jumlah Sepeda</label>
                        <input type="number" class="form-control" name="jml_sepeda" id="jml_sepeda" value="{{ old('jml_sepeda') }}">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="harga_sewa">Harga Sewa Sepeda</label>
                        <div class="input-group-append">
                        <input type="text" class="form-control" name="harga_sewa" id="harga_sewa" value="{{ old('harga_sewa') }}">
                        <span class="input-group-text" id="">Per Hari</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="status">Status Ketersediaan</label>
                    <select class="form-control" name="status">
                        <option value="0">---pilih status---</option>
                        <option value="1">Tersedia</option>
                        <option value="2">Kosong</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer float-right">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
    <!-- /.modal -->

@foreach($sepeda as $bikes)
<div class="modal fade" id="modal-viewsepeda-{{ $bikes->id }}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Sepeda {{ $bikes->merk }}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <section class="content">
        <!-- Default box -->
        <div class="card card-solid">
        <div class="card-body">
            <div class="row">
            <div class="col-12 col-sm-6">
                <h3 class="d-inline-block d-sm-none">Sepeda {{ $bikes->merk }}</h3>
                <div class="col-12">
                <img src="{{asset('template')}}/dist/img/bikes/{{ $bikes->gambar }}" class="product-image" alt="Product Image">
                @if($bikes->status === "1")
                <div class="ribbon-wrapper">
                    <div class="ribbon bg-info">
                        Tersedia
                    </div>
                </div>
                @elseif($bikes->status === "2")
                <div class="ribbon-wrapper ribbon-lg">
                    <div class="ribbon bg-danger text-lg">
                        Kosong
                    </div>
                </div>
                @endif
                </div>
                <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="{{asset('template')}}/dist/img/bikes/{{ $bikes->gambar }}" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="{{asset('template')}}/dist/img/prod-2.jpg" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="{{asset('template')}}/dist/img/prod-3.jpg" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="{{asset('template')}}/dist/img/prod-4.jpg" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="{{asset('template')}}/dist/img/prod-5.jpg" alt="Product Image"></div>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <h3 class="my-3">{{ $bikes->merk }} - {{ $bikes->jenis }}</h3>
                <p>{{ $bikes->deskripsi }}</p>

                <hr>
                <h4>Colors</h4>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center active">
                    <input type="radio" name="color_option" id="color_option1" autocomplete="off" checked="">
                    Green
                    <br>
                    <i class="fas fa-circle fa-2x text-green"></i>
                </label>
                <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option2" autocomplete="off">
                    Blue
                    <br>
                    <i class="fas fa-circle fa-2x text-blue"></i>
                </label>
                <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option3" autocomplete="off">
                    Purple
                    <br>
                    <i class="fas fa-circle fa-2x text-purple"></i>
                </label>
                <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option4" autocomplete="off">
                    Red
                    <br>
                    <i class="fas fa-circle fa-2x text-red"></i>
                </label>
                <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option5" autocomplete="off">
                    Orange
                    <br>
                    <i class="fas fa-circle fa-2x text-orange"></i>
                </label>
                </div>
                <hr>
                <div class="col-12 mt-4">
                <h4>Jumlah Unit:
                {{ $bikes->jml_sepeda }} Sepeda
                </h4>
                </div>
                <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                    Rp. {{ $bikes->harga_sewa }}
                <small>/ Hari </small>
                </h2>   
                </div>

            </div>
            </div>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </section>
        <!-- /.content -->
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endforeach

    <div class="modal fade" id="modal-editdata">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title"><i class="fas fa-pencil-alt"></i> Edit</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form role="form">
            <div class="col-md-12 d-inline-flex">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="merk">Merk Sepeda</label>
                        <input type="text" class="form-control" id="merk">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jenis">Jenis Sepeda</label>
                        <input type="text" class="form-control" id="jenis">
                    </div>
                </div>
            </div>
            <div class="col-md-12 d-inline-flex">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="no_rangka">Nomor Rangka Sepeda</label>
                        <input type="text" class="form-control" id="no_rangka">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="warna">Warna Sepeda</label>
                        <input type="text" class="form-control" id="warna" value="">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="gambarsepeda">Gambar Sepeda</label>
                    <div class="input-group">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambarsepeda">
                        <label class="custom-file-label" for="gambarsepeda">Pilih Gambar</label>
                        </div>
                        <div class="input-group-append">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5"></textarea>
                </div>
            </div>
            <div class="col-md-12 d-inline-flex">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="jml_sepeda">Jumlah Sepeda</label>
                        <input type="number" class="form-control" id="jml_sepeda">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="harga_sewa">Harga Sewa Sepeda</label>
                        <div class="input-group-append">
                        <input type="text" class="form-control" id="harga_sewa">
                        <span class="input-group-text" id="">Per Hari</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="status">Status Ketersediaan</label>
                    <select class="form-control">
                        <option value="0">---pilih status---</option>
                        <option value="1">Tersedia</option>
                        <option value="2">Kosong</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer float-right">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
        </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection