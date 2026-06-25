@extends('backend.master');
@push('styles')
    <link href="{{ asset('') }}assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('') }}assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $("#example2").DataTable({
                lengthChange: false,
                buttons: ["copy", "excel", "pdf", "print"],
            });

            table.buttons().container()
                .appendTo("#example2_wrapper .col-md-6:eq(0)");
        });
    </script>
@endpush

@section('content')
    <main class="page-content">
        <!--breadcrumb-->
        <h6 class="mb-0 text-uppercase">DataTable Import</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Porice</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td> <img style="width: 50px" src="{{ asset('assets/')."/".$item->image }}"
                                            alt=""></td>
                                    <td>{{ $item->price }}</td>
                                    {{-- <td>{{ $item->category?->category_name }}</td> --}}
                                    <td>{{ $item->status }}</td>
                                    <td> Edit | Delete</td>

                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Porice</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        @session('succes')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession




    </main>
@endsection
