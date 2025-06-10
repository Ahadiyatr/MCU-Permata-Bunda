@extends('layouts/layoutMaster')

@section('title', 'DataTables - Tables')

@section('content')
    <div class="row align-items-center">
        <div class="col-auto">
            <h5 class="content-header-title float-left pr-1 mb-0">Medical Record</h5>
        </div>
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Medical Record</li>
                </ol>
            </nav>
        </div>
        {{-- <div class="col-auto">
        <button type="button" class="btn btn-primary">Primary</button>
    </div> --}}
    </div>

    <!-- Striped Rows -->
    <div class="card mb-6 mt-3">
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Karyawan</th>
                        <th>Perusahaan</th>
                        <th>Jabatan</th>
                        <th>NO. RMK</th>
                        <th>Kesimpulan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>1</td>
                        <td><i class="ti ti-brand-angular ti-md text-danger me-4"></i> <span class="fw-medium">Ahmad</span>
                        </td>
                        <td>BUMA</td>
                        <td>
                            HR
                        </td>
                        <td>1234356</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('/medical-records/details') }}"><i
                                            class="ti ti-pencil me-1"></i>
                                        Show</a>
                                    <a class="dropdown-item" href="{{ url('/medical-records/create-record') }}"><i
                                            class="ti ti-pencil me-1"></i>
                                        Add Record</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><i class="ti ti-brand-angular ti-md text-danger me-4"></i> <span class="fw-medium">Tirta</span>
                        </td>
                        <td>BUMA</td>
                        <td>
                            HR
                        </td>
                        <td>1234356</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('/medical-records/details') }}"><i
                                            class="ti ti-pencil me-1"></i>
                                        Show</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Striped Rows -->

@endsection
