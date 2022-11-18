@extends('layouts.main')
@section('container')
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabel Data Customer</h1>
                    <p class="mb-4">   <a target="_blank"
                            href="https://datatables.net">  </a>   </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Customer</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>Nomor HP</th>
                                            <th>Start date</th>
                                            <th>Jenis Kelamin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_customer as $data)
                                        <tr>
                                            <td>{{$data->nama}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->alamat}}</td>
                                            <td>{{$data->no_hp}}</td>
                                            <td>{{$data->start_date}}</td>
                                            @if ( $data->jenis_kelamin == 1)
                                            <td>Laki - Laki</td>
                                            @else
                                            <td>Perempuan</td>

                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </div>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection
