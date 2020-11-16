@extends('layouts.app')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Accounts</h4>
                            <p class="card-description"> Registered Users </p>
                            <p class="card-description">
                            <a href="{{ route('users.create') }}" class="btn btn-success">Create Account</a>
                            </p>
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="tbl-users" class="table table-bordered display nowrap"
                                           style="width:100%">
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid clearfix">
                <span
                    class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Yaramay 2020</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var dt = $('#tbl-users').DataTable({
                serverSide: true,
                "scrollX": true,
                order: [[0, "desc"]],
                ajax: {
                    url: '{{ route('users.table') }}',
                    type: 'POST'
                },
                columns: [
                    {data: 'id', name: 'id', title: 'ID'},
                    {data: function (value) {
                            return '<a href="/users/show/'+value.id+'" class="btn btn-link">'+value.name+'</a>'
                        }, name: 'name', title: 'Name'},
                    {data: 'email', name: 'email', title: 'E-mail'},
                    {data: 'position', name: 'position', title: 'Position'},
                    {data: 'province', name: 'province', title: 'Province'},
                ],
                drawCallback() {
                    // $('.btn-show-more').click(function () {
                    //     $this.full_details = $this.dt.row($(this).parents('tr')).data();
                    //     $('#mdl-overview').modal('show');
                    // });

                    {{--$('.btn-delete-info').click(function () {--}}
                    {{--    $this.full_details = $this.dt.row($(this).parents('tr')).data();--}}
                    {{--    Swal.fire({--}}
                    {{--        title: 'Do you want to delete this?',--}}
                    {{--        showCancelButton: true,--}}
                    {{--        confirmButtonText: `Delete`,--}}
                    {{--    }).then((result) => {--}}
                    {{--        if (result.isConfirmed) {--}}
                    {{--            $.ajax({--}}
                    {{--                url: '{{ route('dashboard.destroy') }}',--}}
                    {{--                method: 'POST',--}}
                    {{--                data: $this.full_details,--}}
                    {{--                success(value) {--}}
                    {{--                    Swal.fire('Deleted!', '', 'success')--}}
                    {{--                    $this.dt.draw()--}}
                    {{--                }--}}
                    {{--            });--}}
                    {{--        }--}}
                    {{--    })--}}
                    {{--});--}}
                }
            });
        });
    </script>
@endsection
