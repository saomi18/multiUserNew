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
                                    <th>nama</th>
                                    <th>email</th>
                                    <th>password</th>
                                    <th>update at</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $bil=1; ?>
                            @foreach($login as $azan)
                                <tr>
                                    <td>{{$bil}}</td>
                                    <td>{{$azan->id}}</td>
                                    <td>{{$azan->name}}</td>
                                    <td>{{$azan->email}}</td>
                                    <td>{{$azan->password}}</td>
                                    <td>{{$azan->updated_at}}</td>
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