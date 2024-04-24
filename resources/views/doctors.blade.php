@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center mb-3">
                    <div class="col-md-4">
                        <h5 class="card-title fw-semibold">Doctors</h5>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4 d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addDoctorModal"><i class="ti ti-plus"></i> Add Doctor</button>
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
                                    <form method="post">
                                        <div class="mb-3">
                                            <label for="imageName" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="Name" name="Name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="spesialisasi" class="form-label">Spesialisasi</label>
                                            <input type="text" class="form-control" id="Spesialisasi" name="spesialiasi">
                                        </div>
                                        <div id="scheduleFields">
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label class="form-label">Day</label>
                                                    <select class="form-select" name="day">
                                                        <option value="Senin">Senin</option>
                                                        <option value="Selasa">Selasa</option>
                                                        <option value="Rabu">Rabu</option>
                                                        <option value="Kamis">Kamis</option>
                                                        <option value="Jumat">Jumat</option>
                                                        <option value="Sabtu">Sabtu</option>
                                                        <option value="Minggu">Minggu</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Start Time</label>
                                                    <input type="text" class="form-control" name="startTime" placeholder="09.00">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">End Time</label>
                                                    <input type="text" class="form-control" name="endTime" placeholder="18.00">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add More Button -->
                                        <div class="mb-3">
                                            <button type="button" class="btn btn-outline-secondary" id="addMore">Add More</button>
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
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mb-4" style="width: 250px;">
                            <img src="{{asset ('images/products/doctor1.jpg')}}" class="card-img-top" style="width: 250px; height: auto;">
                            <div class="card-body">
                                <h5 class="card-title">Dr. X</h5>
                                <p class="card-text fw-light">Dokter Umum</p>

                                <button type="button" class="btn btn-outline-info mb-1 col-12" data-bs-toggle="modal" data-bs-target="#doctorModal">Details <i class="ti ti-arrow-up-right"></i></button>
                                <button type="button" class="btn btn-outline-danger col-12">Delete <i class="ti ti-trash"></i></button>

                            </div>
                        </div>
                        <div class="modal fade" id="doctorModal" tabindex="-1" aria-labelledby="doctorModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="doctorModalLabel">Doctor Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="{{asset ('images/products/doctor1.jpg')}}" class="img-fluid my-3" alt="Doctor Image">
                                            </div>
                                            <div class="col-md-8">
                                                <h5 class="modal-title mb-1">Dr. X</h5>
                                                <p class="fw-light mb-2">Dokter Umum</p>
                                                <p class="fw-bold mb-0">Schedule : </p>
                                                <ul class="ml-0 pl-0">
                                                    <li>
                                                        <p class="fw-light mb-0">Senin, 15.00 - 18.00</p>
                                                    </li>
                                                    <li>
                                                        <p class="fw-light mb-0">Selasa, 15.00 - 18.00</p>
                                                    </li>
                                                    <li>
                                                        <p class="fw-light mb-0">Kamis, 15.00 - 18.00</p>
                                                    </li>
                                                    <li>
                                                        <p class="fw-light mb-0">Sabtu, 12.00 - 16.00</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#editDoctorModal">Edit</button>
                                        <!-- <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="editDoctorModal" tabindex="-1" aria-labelledby="editDoctorModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editDoctorModalLabel">Edit Doctor</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" id="editDoctorForm">
                                            <div class="mb-3">
                                                <label for="imageName" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="Name" name="Name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="spesialisasi" class="form-label">Spesialisasi</label>
                                                <input type="text" class="form-control" id="Spesialisasi" name="spesialiasi">
                                            </div>
                                            <div id="scheduleFieldsEdit">
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <label class="form-label">Day</label>
                                                        <select class="form-select" name="day">
                                                            <option value="Senin">Senin</option>
                                                            <option value="Selasa">Selasa</option>
                                                            <option value="Rabu">Rabu</option>
                                                            <option value="Kamis">Kamis</option>
                                                            <option value="Jumat">Jumat</option>
                                                            <option value="Sabtu">Sabtu</option>
                                                            <option value="Minggu">Minggu</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <label class="form-label">Start Time</label>
                                                        <input type="text" class="form-control" name="startTime" placeholder="09:00">
                                                    </div>
                                                    <div class="col">
                                                        <label class="form-label">End Time</label>
                                                        <input type="text" class="form-control" name="endTime" placeholder="18:00">
                                                    </div>
                                                    <div class="col">
                                                        <label class="form-label">&emsp;&emsp;</label>
                                                        <button type="button" class="btn btn-outline-danger delete-schedule">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Add More Button -->
                                            <div class="mb-3">
                                                <button type="button" class="btn btn-outline-secondary" id="addMoreEdit">Add More</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Modal Footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-outline-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4" style="width: 250px;">
                            <img src="{{asset ('images/products/doctor1.jpg')}}" class="card-img-top" style="width: 250px; height: auto;">
                            <div class="card-body">
                                <h5 class="card-title">Dr. X</h5>
                                <p class="card-text fw-light">Dokter Umum</p>
                                <button type="button" class="btn btn-outline-info mb-1 col-12">Details <i class="ti ti-arrow-up-right"></i></button>
                                <button type="button" class="btn btn-outline-danger col-12">Delete <i class="ti ti-trash"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4" style="width: 250px;">
                            <img src="{{asset ('images/products/doctor1.jpg')}}" class="card-img-top" style="width: 250px; height: auto;">
                            <div class="card-body">
                                <h5 class="card-title">Dr. X</h5>
                                <p class="card-text fw-light">Dokter Umum</p>
                                <button type="button" class="btn btn-outline-info mb-1 col-12">Details <i class="ti ti-arrow-up-right"></i></button>
                                <button type="button" class="btn btn-outline-danger col-12">Delete <i class="ti ti-trash"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4" style="width: 250px;">
                            <img src="{{asset ('images/products/doctor1.jpg')}}" class="card-img-top" style="width: 250px; height: auto;">
                            <div class="card-body">
                                <h5 class="card-title">Dr. X</h5>
                                <p class="card-text fw-light">Dokter Umum</p>
                                <button type="button" class="btn btn-outline-info mb-1 col-12">Details <i class="ti ti-arrow-up-right"></i></button>
                                <button type="button" class="btn btn-outline-danger col-12">Delete <i class="ti ti-trash"></i></button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Counter to track the number of schedule fields
        let scheduleCount = 1;

        // Get the first row of schedule fields
        const firstRow = document.querySelector('#scheduleFields .row');

        // Event listener for the "Add More" button
        document.getElementById('addMore').addEventListener('click', function() {
            // Clone the first row
            const clonedRow = firstRow.cloneNode(true);

            // Update IDs and names of cloned fields to avoid conflicts
            const clonedInputs = clonedRow.querySelectorAll('[name]');
            clonedInputs.forEach(input => {
                const inputName = input.getAttribute('name');
                input.setAttribute('name', `${inputName}_${scheduleCount}`);
                input.value = ''; // Clear input values
            });

            // Append the cloned row to the schedule fields container
            const scheduleFieldsContainer = document.getElementById('scheduleFields');
            scheduleFieldsContainer.appendChild(clonedRow);

            // Increment schedule count
            scheduleCount++;
        });

        // Event listener for modal close
        const addDoctorModal = document.getElementById('addDoctorModal');
        addDoctorModal.addEventListener('hidden.bs.modal', function() {
            console.log('Modal is hidden');
            // Remove dynamically added schedule fields except the first row
            const scheduleFieldsContainer = document.getElementById('scheduleFields');
            while (scheduleFieldsContainer.childElementCount > 1) {
                scheduleFieldsContainer.removeChild(scheduleFieldsContainer.lastChild);
            }

            // Reset schedule count
            scheduleCount = 1;
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Counter to track the number of schedule fields
        let scheduleCount = 1;

        // Get the first row of schedule fields for editing
        const firstRowEdit = document.querySelector('#scheduleFieldsEdit .row');

        // Event listener for the "Add More" button in the Edit Doctor modal
        document.getElementById('addMoreEdit').addEventListener('click', function() {
            // Clone the first row for editing
            const clonedRowEdit = firstRowEdit.cloneNode(true);

            // Update IDs and names of cloned fields to avoid conflicts
            const clonedInputsEdit = clonedRowEdit.querySelectorAll('[name]');
            clonedInputsEdit.forEach(input => {
                const inputName = input.getAttribute('name');
                input.setAttribute('name', `${inputName}_${scheduleCount}`);
                input.value = ''; // Clear input values
            });

            // Append the cloned row to the schedule fields container in Edit modal
            const scheduleFieldsContainerEdit = document.getElementById('scheduleFieldsEdit');
            scheduleFieldsContainerEdit.appendChild(clonedRowEdit);

            // Increment schedule count for Edit modal
            scheduleCount++;
        });

        // Event listener for deleting schedule fields in the Edit Doctor modal
        document.getElementById('scheduleFieldsEdit').addEventListener('click', function(event) {
            if (event.target.classList.contains('delete-schedule')) {
                // Check if there's more than one row, then delete
                const rowToDelete = event.target.closest('.row');
                if (document.querySelectorAll('#scheduleFieldsEdit .row').length > 1) {
                    rowToDelete.parentNode.removeChild(rowToDelete);
                }
            }
        });

        // Event listener for modal close in Edit Doctor modal
        const editDoctorModal = document.getElementById('editDoctorModal');
        editDoctorModal.addEventListener('hidden.bs.modal', function() {
            // Remove dynamically added schedule fields
            const scheduleFieldsContainerEdit = document.getElementById('scheduleFieldsEdit');
            while (scheduleFieldsContainerEdit.childElementCount > 1) {
                scheduleFieldsContainerEdit.removeChild(scheduleFieldsContainerEdit.lastChild);
            }

            // Reset schedule count
            scheduleCount = 1;
        });
    });
</script>

@endsection