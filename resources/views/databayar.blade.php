@extends('layouts.main')
@section('container')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabel Data Bayar</h1>
                    <p class="mb-4">   <a target="_blank"
                            href="https://datatables.net"> </a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tanggal Pembayaran</th>
                                            <th>Jenis Bayar</th>
                                            <th>Jenis Sampah</th>
                                            <th>Total Bayar</th>
                                            <th>Konfirmasi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tanggal Pembayaran</th>
                                            <th>Jenis Bayar</th>
                                            <th>Jenis Sampah</th>
                                            <th>Total Bayar</th>
                                            <th>Konfirmasi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($dataBayars as $dataBayar)
                                        <tr>
                                            <td>{{ $dataBayar->nama }}</td>
                                            <td>{{ $dataBayar->tgl_pembayaran }}</td>
                                            <td>{{ $dataBayar->jenis_bayar }}</td>
                                            <td>{{ $dataBayar->jenis_sampah }}</td>
                                            <td>{{ $dataBayar->total_bayar }}</td>
                                            <td>Selesai</td>
                                        </tr>
                                        @endforeach
                                        {{-- <tr>
                                            <td>Tiger Nixon</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Plastik</td>
                                            <td>1kg x Rp.2000 = Rp.2000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Tika Atiku</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Kaca</td>
                                            <td>2kg x Rp.5000 = Rp.10.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Alkana Fares</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Metal</td>
                                            <td>3kg x Rp.3000 = Rp.9000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Asher Altherio</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Kertas</td>
                                            <td>1kg x Rp.3000 = Rp.3000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Caca Selifa</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Kaca</td>
                                            <td>5kg x Rp.5000 = Rp.25.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Lovia Ananda</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Metal</td>
                                            <td>4kg x Rp.3000 = Rp.12.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Asahila Hill</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Plastik</td>
                                            <td>1kg x Rp.2000 = Rp.2000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Kimi Kasava</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Kertas</td>
                                            <td>3kg x Rp.3000 = Rp.9000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Nusa Pratama</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Plastik</td>
                                            <td>1kg x Rp.2000 = Rp.2000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Gusti Pramodya</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Kertas</td>
                                            <td>5kg x Rp.3000 = Rp.15.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Kahfa Nathaniel</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Kaca</td>
                                            <td>7kg x Rp.5000 = Rp.35.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Lusi Papo</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Metal</td>
                                            <td>5kg x Rp.3000 = Rp.15.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Jasya Asoka</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Kaca</td>
                                            <td>6kg x Rp.5000 = Rp.30.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Lupi Lupita</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Plastik</td>
                                            <td>1kg x Rp.2000 = Rp.2000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Mia Mamamia</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Metal</td>
                                            <td>5kg x Rp.3000 = Rp.15.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Kilo Kimilo</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Kertas</td>
                                            <td>3kg x Rp.3000 = Rp.9000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Alex Smith</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Metal</td>
                                            <td>4kg x Rp.3000 = Rp.12.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Muly Mulia</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Plastik</td>
                                            <td>2kg x Rp.2000 = Rp.4000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Benekdi Berk</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Kertas</td>
                                            <td>4kg x Rp.3000 = Rp.12.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Selika Aiko</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Kaca</td>
                                            <td>7kg x Rp.5000 = Rp.35.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Dean Paulo</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Plastik</td>
                                            <td>3kg x Rp.2000 = Rp.6000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Reca Recu</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Plastik</td>
                                            <td>1kg x Rp.2000 = Rp.2000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Asogi Hill</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Kaca</td>
                                            <td>5kg x Rp.5000 = Rp.25.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Ryu Viola</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Metal</td>
                                            <td>7kg x Rp.3000 = Rp.21.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Masiho</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Kertas</td>
                                            <td>5kg x Rp.3000 = Rp.15.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Yogi Yagiya</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Plastik</td>
                                            <td>2kg x Rp.2000 = Rp.4000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Path Pash</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Metal</td>
                                            <td>5kg x Rp.3000 = Rp.15.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Asakinah</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Kaca</td>
                                            <td>7kg x Rp.5000 = Rp.35.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Xian Xixiu</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Kaca</td>
                                            <td>7kg x Rp.5000 = Rp.35.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Lalisa</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Plastik</td>
                                            <td>1kg x Rp.2000 = Rp.2000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Papio</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Plastik</td>
                                            <td>1kg x Rp.2000 = Rp.2000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Isya Isaka</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Metal</td>
                                            <td>8kg x Rp.3000 = Rp.24.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Monika Monic</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Kertas</td>
                                            <td>6kg x Rp.3000 = Rp.18.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Eros Parikesit</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Kertas</td>
                                            <td>1kg x Rp.3000 = Rp.3000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Eldebaran</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Kaca</td>
                                            <td>5kg x Rp.5000 = Rp.25.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Winda Denanda</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Plastik</td>
                                            <td>1kg x Rp.2000 = Rp.2000</td>
                                            <td>Selesai</td>
                                        </tr>
                                        <tr>
                                            <td>Ica Patrisia</td>
                                            <td>2022/04/25</td>
                                            <td>Cash</td>
                                            <td>Sampah Metal</td>
                                            <td>7kg x Rp.3000 = Rp.21.000</td>
                                            <td>Selesai</td>
                                        </tr> --}}
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
