@extends('layouts.backend_master')


@push('styles')
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/style.css" />
@endpush



@section('content')
    <div class="col-sm-12">
        <div class="card table-card">
            <div class="card-body">
                <div class="text-end p-4 pb-sm-2">
                    <a href="#" class="btn btn-primary d-inline-flex align-items-center gap-2" data-bs-toggle="modal"
                        data-bs-target="#customer-edit_add-modal"><i class="ti ti-plus f-18"></i> Add Customer</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover" id="dom-jqry">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Customer Name</th>
                                <th>Contact</th>
                                <th>Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto">
                                                <img src="{{ asset('assets') }}/images/user/avatar-1-1.jpg" alt="user-image"
                                                    class="wid-40 rounded-circle" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-0">{{ $user->name }}</h6>
                                                <p class="text-muted f-12 mb-0">
                                                    <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>+1 (247) 849-6968</td>
                                    <td><span class="badge bg-light-success rounded-pill f-12">Relationship</span></td>
                                    <td class="text-center">
                                        <ul class="list-inline me-auto mb-0">
                                            <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                title="View">
                                                <a href="#" class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                    data-bs-toggle="modal" data-bs-target="#customer-modal"><i
                                                        class="ti ti-eye f-18"></i></a>
                                            </li>
                                            <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                title="Edit">
                                                <a href="#" class="avtar avtar-xs btn-link-success btn-pc-default"
                                                    data-bs-toggle="modal" data-bs-target="#customer-edit_add-modal"><i
                                                        class="ti ti-edit-circle f-18"></i></a>
                                            </li>
                                            <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                title="Delete">
                                                <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default"><i
                                                        class="ti ti-trash f-18"></i></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    @include('backend.users.partials.customer-create-modal')
@endsection


@push('scripts')
    <script src="{{ asset('assets') }}/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/dataTables.bootstrap5.min.js"></script>
    {{-- <script src="{{ asset('assets') }}/js/plugins/simple-datatables.js"></script> --}}

    {{-- <script>
        const dataTable = new simpleDatatables.DataTable("#pc-dt-simple", {
            sortable: false,
            perPage: 5,
        });
    </script> --}}

    <script>
        // [ DOM/jquery ]
        var total, pageTotal;
        var table = $("#dom-jqry").DataTable();
        // [ column Rendering ]
        $("#colum-render").DataTable({
            columnDefs: [{
                    render: function(data, type, row) {
                        return data + " (" + row[3] + ")";
                    },
                    targets: 0,
                },
                {
                    visible: false,
                    targets: [3],
                },
            ],
        });
        // [ Multiple Table Control Elements ]
        $("#multi-table").DataTable({
            dom: '<"top"iflp<"clear">>rt<"bottom"iflp<"clear">>',
        });
        // [ Complex Headers With Column Visibility ]
        $("#complex-header").DataTable({
            columnDefs: [{
                visible: false,
                targets: -1,
            }, ],
        });
        // [ Language file ]
        $("#lang-file").DataTable({
            language: {
                url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json",
            },
        });
        // [ Setting Defaults ]
        $("#setting-default").DataTable();
        // [ Row Grouping ]
        var table1 = $("#row-grouping").DataTable({
            columnDefs: [{
                visible: false,
                targets: 2,
            }, ],
            order: [
                [2, "asc"]
            ],
            displayLength: 25,
            drawCallback: function(settings) {
                var api = this.api();
                var rows = api
                    .rows({
                        page: "current",
                    })
                    .nodes();
                var last = null;

                api
                    .column(2, {
                        page: "current",
                    })
                    .data()
                    .each(function(group, i) {
                        if (last !== group) {
                            $(rows)
                                .eq(i)
                                .before('<tr class="group"><td colspan="5">' + group + "</td></tr>");

                            last = group;
                        }
                    });
            },
        });
        // [ Order by the grouping ]
        $("#row-grouping tbody").on("click", "tr.group", function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === "asc") {
                table.order([2, "desc"]).draw();
            } else {
                table.order([2, "asc"]).draw();
            }
        });
        // [ Footer callback ]
        $("#footer-callback").DataTable({
            footerCallback: function(row, data, start, end, display) {
                var api = this.api(),
                    data;

                // Remove the formatting to get integer data for summation
                var intVal = function(i) {
                    return typeof i === "string" ? i.replace(/[\$,]/g, "") * 1 : typeof i === "number" ? i :
                        0;
                };

                // Total over all pages
                total = api
                    .column(4)
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                // Total over this page
                pageTotal = api
                    .column(4, {
                        page: "current",
                    })
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                // Update footer
                $(api.column(4).footer()).html("$" + pageTotal + " ( $" + total + " total)");
            },
        });
        // [ Custom Toolbar Elements ]
        $("#c-tool-ele").DataTable({
            dom: '<"toolbar">frtip',
        });
        // [ Custom Toolbar Elements ]
        $("div.toolbar").html("<b>Custom tool bar! Text/images etc.</b>");
        // [ custom callback ]
        $("#row-callback").DataTable({
            createdRow: function(row, data, index) {
                if (data[5].replace(/[\$,]/g, "") * 1 > 150000) {
                    $("td", row).eq(5).addClass("highlight");
                }
            },
        });
    </script>
    <script>
        // [ DOM/jquery ]
        $('#customer-create-form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: new FormData(this),
                processData: false,
                contentType: false,
                dataType: 'json',
                beforeSend: function() {
                    $('#customer-create-form button').attr('disabled', 'disabled');
                },
                success: function(response) {
                    if (response.status) {
                        $('#customer-create-form button').removeAttr('disabled');
                        $('#customer-create-form input').val('');
                        $('#customer-create-form textarea').val('');
                        $('#customer-create-form select').val('');
                        $('#customer-create-form').modal('hide');
                        $('#customer-create-form').find('form').trigger('reset');
                        $('#customer-edit_add-modal').modal('hide');
                        $('#customer-edit_add-modal').find('form').trigger('reset');
                        toastr.success(response.message);
                    } else {
                        $('#customer-create-form button').removeAttr('disabled');
                        toastr.error(response.message);
                    }
                },
                error: function(xhr) {
                    $('#customer-create-form button').removeAttr('disabled');
                    var response = xhr.responseJSON;
                    if ($.isEmptyObject(response) == false) {
                        $.each(response.errors, function(key, value) {
                            toastr.error(value);
                        });
                    } else {
                        toastr.error(response.message);
                    }
                }
            });
        });
    </script>
@endpush
    
