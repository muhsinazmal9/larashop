<div class="modal fade" id="customer-edit_add-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg  modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="mb-0">Create Customer</h5>
                <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default ms-auto" data-bs-dismiss="modal"><i class="ti ti-x f-20"></i></a>
            </div>
            <form action="{{ route('admin.users.store') }}" method="POST" id="customer-create-form">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3 text-center">
                            <div class="chat-avtar d-inline-flex mx-auto">
                                <img class="rounded-circle img-fluid wid-70" src="../assets/images/user/avatar-5-1.jpg"
                                    alt="User image" />
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label> <input type="text" class="form-control"
                                    placeholder="Email" name="email" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select">
                                    <option>Select Status</option>
                                    <option>Complicated</option>
                                    <option>Single</option>
                                    <option>Relationship</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <textarea class="form-control" rows="3" placeholder="Enter Location"></textarea>
                            </div>
                            <div class="form-check form-switch d-flex align-items-center justify-content-between p-0">
                                <label class="form-check-label h5 pe-3 mb-0" for="customSwitchemlnot1">Make Contact Info
                                    Public
                                    <span class="text-muted w-75 d-block text-sm f-w-400 mt-2">Means that anyone viewing
                                        your profile will be able to see your contacts details</span></label>
                                <input class="form-check-input h4 m-0 position-relative flex-shrink-0" type="checkbox"
                                    id="customSwitchemlnot1" checked="" />
                            </div>
                            <hr class="my-3 border border-secondary-subtle" />
                            <div class="form-check form-switch d-flex align-items-center justify-content-between p-0">
                                <label class="form-check-label h5 pe-3 mb-0" for="customSwitchemlnot2">Available to hire
                                    <span class="text-muted w-75 d-block text-sm f-w-400 mt-2">Toggling this will let
                                        your
                                        teammates know that you are available for acquiring new
                                        projects</span></label>
                                <input class="form-check-input h4 m-0 position-relative flex-shrink-0" type="checkbox"
                                    id="customSwitchemlnot2" checked="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <ul class="list-inline me-auto mb-0">
                        <li class="list-inline-item align-bottom">
                            <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default w-sm-auto"
                                data-bs-toggle="tooltip" title="Delete"><i class="ti ti-trash f-18"></i></a>
                        </li>
                    </ul>
                    <div class="flex-grow-1 text-end">
                        <button type="button" class="btn btn-link-danger btn-pc-default"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>




