@extends('layouts.app')

@section('title', 'List of leads')

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/datatables.responsive.css')}}">
@endsection

@section('scripts')
    <script src="{{asset('assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-responsive/js/datatables.responsive.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-responsive/js/lodash.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            var table = $('#leadsTable');

            var settings = {
                "sDom": "<'table-responsive't><'row'<p i>>",
                "destroy": true,
                "scrollCollapse": true,
                "oLanguage": {
                    "sLengthMenu": "_MENU_ ",
                    "sInfo": "Showing <b>_START_ to _END_</b> of _TOTAL_ entries"
                },
                "iDisplayLength": 10,
                "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [ 4, 6 ] }
                ]
            };

            table.dataTable(settings);
        });
        $('.delete').click(function (e) {
            e.preventDefault();
            var $link   = $(this).attr('href');
            $('#myModal').modal();
            $('#myModal .continue').attr('href', $link);
        });
    </script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">Table</div>
        </div>
        <div class="panel-body">
            <table id="leadsTable" class="table dataTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>URL</th>
                        <th>Notes</th>
                        <th>Status</th>
                        <th width="80"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($leads as $lead)
                    <tr>
                        <td>{{$lead->id}}</td>
                        <td>{{$lead->name}}</td>
                        <td>{{$lead->address}}</td>
                        <td>
                            @if($lead->url)
                                <a href="{{$lead->url}}" target="_blank">{{$lead->url}}</a>
                            @else
                                None
                            @endif
                        </td>
                        <td>{{$lead->notes}}</td>
                        <td><span class="label {{$status_classes[$lead->status]}}">{{trans($status[$lead->status])}}</span></td>
                        <td>
                            <a href="/leads/edit/{{$lead->id}}"><i class="fa fa-pencil text-info"></i></a>&nbsp;
                            <a href="/leads/delete/{{$lead->id}}" class="delete"><i class="fa fa-times text-danger"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- MODAL STICK UP  -->
    <div class="modal fade stick-up" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content-wrapper">
                <div class="modal-content">
                    <div class="modal-header clearfix text-left">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                        </button>
                        <h5>Delete this entry</h5>
                    </div>
                    <div class="modal-body">
                        <p class="no-margin">This action will delete this entry for ever.</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-danger btn-cons pull-left inline continue">Delete</a>
                        <button type="button" class="btn btn-default btn-cons no-margin pull-left inline" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- END MODAL STICK UP  -->
@endsection