@extends('layouts.app3')
@section('content')
<div class="container-fluid">
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>id</th>
                                    <th>nomor</th>
                                    <th>nama</th>
                                    <th>produk</th>
                                    <th>jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $bil=1; ?>
                            @foreach($dat as $zan)
                                <tr>
                                    <td>{{$bil}}</td>
                                    <td>{{$zan->nomor}}</td>
                                    <td>{{$zan->nama}}</td>
                                    <td>{{$zan->produk}}</td>
                                    <td>{{$zan->jumlah}}</td>
                                    <td>{{$zan->updated_at}}</td>
                                </tr>
                            <?php $bil++;?>
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