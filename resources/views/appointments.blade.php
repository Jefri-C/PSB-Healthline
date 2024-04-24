@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fw-semibold mb-4 fs-4">Total Appointments</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fw-semibold mb-4 fs-4">Upcoming Appointments</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fw-semibold mb-4 fs-4">Finished Appointments</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fw-semibold mb-4 fs-4">Cancelled Appointments</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fw-semibold mb-4 fs-4">Appointment List</h5>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection