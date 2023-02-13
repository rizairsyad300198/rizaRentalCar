@extends('backend.layouts.dashboard-app')
@section('content')

    <!-- Instructor Dashboard -->
    <div class="col-xl-9 col-lg-8 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="settings-widget">
                    <div class="settings-inner-blk p-0">
                        <div class="sell-course-head comman-space d-flex justify-content-between">
                            <h3>Data Mobil</h3>
                            <a href="{{ url ('dashboard/data-mobil/tambah-data-mobil') }}" class="btn btn-outline-add-data navbar-btn">Tambah Data Mobil</a>
                        </div>
                        <div class="comman-space pb-0">
                            <div class="settings-tickets-blk course-instruct-blk table-responsive">
                                <table class="table table-stripped text-center">
                                        <thead>
                                            <th scope="col">No</th>
                                            <th scope="col">Merk</th>
                                            <th scope="col">Nomor Registrasi</th>
                                            <th scope="col">Warna Mobil</th>
                                            <th scope="col">Tahun</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Harga Sewa</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Aksi</th></th>
                                        </thead>
                                        <tbody>
                                            @foreach ($DataMobil as $item)
                                            <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <td>{{$item->merk}}</td>
                                                <td>{{$item->no_registrasi}}</td>
                                                <td>{{$item->warna_mobil}}</td>
                                                <td>{{$item->tahun}}</td>
                                                <td>{{$item->stock}}</td>
                                                <td>{{$item->harga_sewa}}</td>
                                                <td><img src="{{ url ('storage/'. $item->gambar)}}" style="width:64px"></td>
                                                <td>
                                                    <div class="d-flex justify-content-around">
                                                        <a  href="{{ url ('dashboard/data-mobil/edit-data-mobil/'.$item->id) }}" class="btn btn-warning" style="margin-right: 4px;">Ubah</a>
                                                        <form action="{{url ('dashboard/data-mobil/delete-data-mobil/'.$item->id) }}" method="POST">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
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
    </div>
@endsection
