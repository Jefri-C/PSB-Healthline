@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card w-100">
        <div class="card-body p-4">
            <div class="row align-items-center mb-3">
                <div class="col-md-4">
                    <h5 class="card-title fw-semibold mb-4">Specialities</h5>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4 d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addDoctorModal"><i class="ti ti-plus"></i> Add Speciality</button>
                </div>

                <!-- Add Doctor Form-->
                <div class="modal fade" id="addDoctorModal" tabindex="-1" aria-labelledby="addDoctorModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addDoctorModalLabel">Add Doctor</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ route('specialities.add') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </form>
                            </div>
                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button> -->
                                <button type="button" class="btn btn-outline-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0 col-1">
                                <h6 class="fw-semibold mb-0">ID</h6>
                            </th>
                            <th class="border-bottom-0 col-2">
                                <h6 class="fw-semibold mb-0">Name</h6>
                            </th>
                            <th class="border-bottom-0 col-4">
                                <h6 class="fw-semibold mb-0">Actions</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($specialities as $speciality)
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">{{ $speciality->name }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <button type="button" class="btn btn-outline-secondary m-1"
                                        data-bs-toggle="modal" data-bs-target="#viewModal"
                                        data-id="{{ $speciality->id }}" data-name="{{ $speciality->name }}">
                                    <span>View</span>
                                </button>
                                <button type="button" class="btn btn-outline-warning m-1"
                                        data-bs-toggle="modal" data-bs-target="#editModal"
                                        data-id="{{ $speciality->id }}" data-url="{{ route('specialities.edit', $speciality->id) }}" data-name="{{ $speciality->name }}">
                                    <span>Edit</span>
                                </button>
                                <button type="button" class="btn btn-outline-danger m-1"
                                        data-bs-toggle="modal" data-url="{{ route('specialities.delete', $speciality->id) }}" data-bs-target="#deleteModal"
                                        data-id="{{ $speciality->id }}">
                                    <span>Delete</span>
                                </button>
                            </td>
                        </tr>
                    @endforeach

                    <!-- View Modal -->
                    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="viewModalLabel">View Speciality</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p id="viewSpecialityName"></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Edit Speciality</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editForm" method="POST" action="">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="specialityName" class="form-label">Speciality Name</label>
                                            <input type="text" class="form-control" id="specialityName" name="name">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Speciality</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this speciality?</p>
                                </div>
                                <div class="modal-footer">
                                    <form id="deleteForm" method="POST" action="">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var viewModal = document.getElementById('viewModal');
                            viewModal.addEventListener('show.bs.modal', function(event) {
                                var button = event.relatedTarget;
                                var name = button.getAttribute('data-name');
                                var modalBody = viewModal.querySelector('.modal-body #viewSpecialityName');
                                modalBody.textContent = 'Speciality Name: ' + name;
                            });

                            var editModal = document.getElementById('editModal');
                            editModal.addEventListener('show.bs.modal', function(event) {
                                var button = event.relatedTarget;
                                var id = button.getAttribute('data-id');
                                var name = button.getAttribute('data-name');
                                var form = editModal.querySelector('#editForm');
                                form.action = button.getAttribute('data-url');
                                var inputName = editModal.querySelector('#specialityName');
                                inputName.value = name;
                            });

                            var deleteModal = document.getElementById('deleteModal');
                            deleteModal.addEventListener('show.bs.modal', function(event) {
                                var button = event.relatedTarget;
                                var id = button.getAttribute('data-id');
                                var form = deleteModal.querySelector('#deleteForm');
                                form.action = button.getAttribute('data-url');
                            });
                        });
                    </script>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
