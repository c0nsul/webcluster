@extends('layouts.app')


@section('content')
    <style>
        table{
            width:100%;
        }
        #dataTables_filter{
            float:right;
        }
        #dataTable_paginate{
            float:right;
        }
        label {
            display: inline-flex;
            margin-bottom: .5rem;
            margin-top: .5rem;

        }
    </style>



    <div class="container">
        <div class="row justify-content-center">

            <div class="container-fluid">
                <div class="container">
                    <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>UTC</th>
                            <th>DX</th>
                            <th></th>
                            <th>Country</th>
                            <th>Mode</th>
                            <th>Freq</th>
                            <th>Band</th>
                            <th>DX de</th>
                            <th>Lotw</th>
                            <th>Eqsl</th>
                            <th>Comment</th>
                            <th>Notice</th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($records as $record)
                        <tr>
                            <td width="1%">{{$record['time']}}</td>
                            <td  width="10%">{{$record['dx']}}</td>
                            <td width="1%"><img src="/flags/{{$record['flag']}}.png"></td>
                            <td width="8%">{{$record['country']->name}}</td>
                            <td width="3%">{{$record['mode']}}</td>
                            <td width="1%">{{$record['freq']}}</td>
                            <td width="1%">{{$record['band']}}M</td>
                            <td  width="10%">{{$record['dxde']}}</td>
                            <td width="1%">{{$record['lotw']}}</td>
                            <td width="1%">{{$record['eqsl']}}</td>
                            <td>{{$record['comment']}}</td>
                            <td width="1%">{{$record['notice']}}</td>
                        </tr>
                        @endforeach

                        </tbody>
                        <tfoot>
                        <tr>
                            <th>UTC</th>
                            <th>DX</th>
                            <th></th>
                            <th>Country</th>
                            <th>Mode</th>
                            <th>Freq</th>
                            <th>Band</th>
                            <th>DX de</th>
                            <th>Lotw</th>
                            <th>Eqsl</th>
                            <th>Comment</th>
                            <th>Notice</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js" ></script>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable( {
                stateSave: true,
                "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                "iDisplayLength": 25,
            }
        );
    } );
</script>
