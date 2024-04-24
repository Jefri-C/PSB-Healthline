@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card w-100">
        <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Patients</h5>
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
                            <th class="border-bottom-0 col-5">
                                <h6 class="fw-semibold mb-0">Address</h6>
                            </th>
                            <th class="border-bottom-0 col-4">
                                <h6 class="fw-semibold mb-0">Actions</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">1</h6>
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">Patient 1</h6>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">Tiban</p>
                            </td>
                            <td class="border-bottom-0">
                                <button type="button" class="btn btn-outline-secondary m-1" data-bs-toggle="modal" data-bs-target="#viewModal"><span>View</span></button>
                                <button type="button" class="btn btn-outline-warning m-1" data-bs-toggle="modal" data-bs-target="#editModal"><span>Edit</span></button>
                                <button type="button" class="btn btn-outline-danger m-1" data-bs-toggle="modal" data-bs-target="#deleteModal"><span>Delete</span></button>

                                <!-- View Modal -->
                                <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewModalLabel">Patient Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p class="fw-bold mb-1">Nama :</p>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <p class="mb-1 text-wrap">Patient 1</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="fw-bold mb-1">Jenis Kelamin :</p>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <p class="mb-1 text-wrap">Laki-laki</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="fw-bold mb-1">Golongan Darah :</p>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <p class="mb-1 text-wrap">B-</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="fw-bold mb-1">Tanggal Lahir :</p>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <p class="mb-1 text-wrap">31 Januari 1993</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="fw-bold mb-1">Umur :</p>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <p class="mb-1 text-wrap">31</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="fw-bold mb-1">Alamat :</p>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <p class="mb-1 text-wrap">Lorem ipsum dolor sit amet</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-info">Show History</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel">Patient Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="editForm">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="namaInput" class="form-label fw-bold mb-1">Nama :</label>
                                                        </div>
                                                        <div class="col-md-7 mb-1">
                                                            <input type="text" class="form-control" id="namaInput" name="nama">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="jenisKelaminInput" class="form-label fw-bold mb-1">Jenis Kelamin :</label>
                                                        </div>
                                                        <div class="col-md-7 mb-1">
                                                            <input type="text" class="form-control" id="jenisKelaminInput" name="jenisKelamin">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="golonganDarahInput" class="form-label fw-bold mb-1">Golongan Darah :</label>
                                                        </div>
                                                        <div class="col-md-7 mb-1">
                                                            <input type="text" class="form-control" id="golonganDarahInput" name="golonganDarah">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="tanggalLahirInput" class="form-label fw-bold mb-1">Tanggal Lahir :</label>
                                                        </div>
                                                        <div class="col-md-7 mb-1">
                                                            <input type="text" class="form-control" id="tanggalLahirInput" name="tanggalLahir">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="umurInput" class="form-label fw-bold mb-1">Umur :</label>
                                                        </div>
                                                        <div class="col-md-7 mb-1">
                                                            <input type="text" class="form-control" id="umurInput" name="umur">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="alamatInput" class="form-label fw-bold mb-1">Alamat :</label>
                                                        </div>
                                                        <div class="col-md-7 mb-1">
                                                            <input type="text" class="form-control" id="alamatInput" name="alamat">
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-danger">Cancel</button>
                                                    <button type="button" class="btn btn-outline-secondary">Save Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Delete</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="deleteForm">
                                                        @csrf
                                                        <div>
                                                        <p>Do you want to delete <b>PatientName</b> data?</p>
                                                        </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary">Cancel</button>
                                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">2</h6>
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">Patient 2</h6>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">Jodoh</p>
                            </td>
                            <td class="border-bottom-0">
                                <button type="button" class="btn btn-outline-secondary m-1"><span>View</span></button>
                                <button type="button" class="btn btn-outline-warning m-1"><span>Edit</span></button>
                                <button type="button" class="btn btn-outline-danger m-1"><span>Delete</span></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection