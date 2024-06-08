@extends('layouts.backend_master')


@push('styles')
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
@endpush



@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="text-end">
                    <a href="#" class="btn btn-primary d-inline-flex align-items-center gap-2" data-bs-toggle="modal"
                        data-bs-target="#customer-edit_add-modal"><i class="ti ti-plus f-18"></i> Add Customer</a>
                </div>
            </div>

            <div class="card-body">

                <div class="table table-responsive">
                    <table class="table table-hover" id="users-dataTable">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {{-- <script src="{{ asset('assets') }}/js/plugins/simple-datatables.js"></script> --}}

    {{-- <script>
        const dataTable = new simpleDatatables.DataTable("#pc-dt-simple", {
            sortable: false,
            perPage: 5,
        });
    </script> --}}

    <script>
        // [ DOM/jquery ]
        var table = $("#users-dataTable").DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.users.getDataList') }}",
                type: "GET",
            },
        });
    </script>

    <script>
        $('#customer-create-form').on('submit', function(e) {
            e.preventDefault();

            $('#customer-create-form').find('.is-invalid').removeClass('is-invalid')
            $('#customer-create-form').find('.invalid-feedback').remove()
            $('#customer-create-form').find('button[type="submit"]').prop('disabled', true).css('opacity', '0.5');

            const url_route = "{{ route('admin.users.store') }}"
            $.ajax({
                url: url_route,
                dataType: 'json',
                type: 'post',
                cache: false,
                processData: false,
                contentType: false,
                data: new FormData(this),
                success: function(response) {
                    if (response.success) {
                        // submit button opacity 0 for a while
                        $('#customer-edit_add-modal').modal('hide');
                        $('#customer-create-form').trigger('reset');
                        $('#customer-table').DataTable().ajax.reload();
                        console.log('success', response)
                        toastr.success(response.message)
                    } else {
                        const errors = response.errors;
                        for (const [key, value] of Object.entries(errors)) {
                            $(`input[name=${key}]`).addClass('is-invalid')
                            $(`textarea[name=${key}]`).addClass('is-invalid')

                            $(`input[name=${key}]`).after(
                                `<div class="invalid-feedback">${value}</div>`)
                        }

                    }
                },
                error: function(response) {
                    console.log('something went wrong', response)
                }
            }).always(function() {
                $('#customer-create-form').find('button[type="submit"]').prop('disabled', false).css(
                    'opacity', '1');
            });
        });
    </script>
@endpush
