@extends('backend.layouts.dashboard-app')
@section('content')

    <div class="col-xl-9 col-lg-8 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="settings-widget">
                    <div class="settings-inner-blk p-0">
                        <div class="sell-course-head comman-space d-flex justify-content-between">
                            <h3>Data Penyewa</h3>
                            <a href="{{ url ('dashboard/data-penyewa/tambah-data-penyewa') }}" class="btn btn-outline-add-data navbar-btn">Tambah Data Mobil</a>
                        </div>
                     </div>
                        <div class="comman-space pb-0">
                            <div class="settings-tickets-blk course-instruct-blk table-responsive">
                                <table class="table table-stripped text-center">
                                        <thead>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Penyewa</th>
                                            <th scope="col">NIK</th>
                                            <th scope="col">email</th>
                                            <th scope="col">No. Telepon</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Aksi</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($DataPenyewa as $data)
                                            <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <td>{{$data->nama}}</td>
                                                <td>{{$data->nik}}</td>
                                                <td>{{$data->email}}</td>
                                                <td>{{$data->no_telepon}}</td>
                                                <td>{{$data->alamat}}</td>
                                                <td>
                                                    <div class="d-flex justify-content-around">
                                                        <a  href="{{ url ('dashboard/data-penyewa/edit-data-penyewa/'.$data->id) }}" class="btn btn-warning" style="margin-right: 4px;">Ubah</a>
                                                        <form action="{{url ('dashboard/data-penyewa/delete-data-penyewa/'.$data->id) }}" method="POST">
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
