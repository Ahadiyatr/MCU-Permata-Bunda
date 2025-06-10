@extends('layouts/layoutMaster')

@section('title', 'Kunjungan')

<!-- Vendor Styles -->
@section('vendor-style')
    @vite(['resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss', 'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss', 'resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.scss', 'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss', 'resources/assets/vendor/libs/flatpickr/flatpickr.scss', 'resources/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.scss', 'resources/assets/vendor/libs/@form-validation/form-validation.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
    @vite(['resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js', 'resources/assets/vendor/libs/moment/moment.js', 'resources/assets/vendor/libs/flatpickr/flatpickr.js', 'resources/assets/vendor/libs/@form-validation/popular.js', 'resources/assets/vendor/libs/@form-validation/bootstrap5.js', 'resources/assets/vendor/libs/@form-validation/auto-focus.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
    @vite(['resources/assets/js/tables-datatables-basic.js'])
@endsection

@section('content')
    <div class="row align-items-center">
        <div class="col-auto">
            <h5 class="content-header-title float-left pr-1 mb-0">Kunjungan</h5>
        </div>
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Kunjungan</li>
                </ol>
            </nav>
        </div>
        {{-- <div class="col-auto">
        <button type="button" class="btn btn-primary">Primary</button>
    </div> --}}
    </div>

    <!-- DataTable with Buttons -->
    <div class="card mt-2">
        <div class="card-datatable table-responsive pt-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Karyawan</th>
                        <th>Perusahaan</th>
                        <th>Jabatan</th>
                        <th>NO. RMK</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Muhammad</td>
                        <td>PT. Borneo Inbobara</td>
                        <td>HR</td>
                        <td>29910/KPBII-MCU/BBS/V-2025</td>
                        <td>
                            <span class="badge rounded-pill bg-label-success">Dilayani</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-1"></i>
                                        Terima Kunjungan</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Tes</td>
                        <td>PT. Borneo Inbobara</td>
                        <td>HR</td>
                        <td>29911/KPBII-MCU/BBS/V-2025</td>
                        <td>
                            <span class="badge rounded-pill bg-label-warning">Belum Dilayani</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-1"></i>
                                        Terima Kunjungan</a>
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
    <!-- Modal to add new record -->
    <div class="offcanvas offcanvas-end" id="add-new-record">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="exampleModalLabel">New Record</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body flex-grow-1">
            <form class="add-new-record pt-0 row g-2" id="form-add-new-record" onsubmit="return false">
                <div class="col-sm-12">
                    <label class="form-label" for="basicFullname">Full Name</label>
                    <div class="input-group input-group-merge">
                        <span id="basicFullname2" class="input-group-text"><i class="ti ti-user"></i></span>
                        <input type="text" id="basicFullname" class="form-control dt-full-name" name="basicFullname"
                            placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicPost">Post</label>
                    <div class="input-group input-group-merge">
                        <span id="basicPost2" class="input-group-text"><i class='ti ti-briefcase'></i></span>
                        <input type="text" id="basicPost" name="basicPost" class="form-control dt-post"
                            placeholder="Web Developer" aria-label="Web Developer" aria-describedby="basicPost2" />
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicEmail">Email</label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="ti ti-mail"></i></span>
                        <input type="text" id="basicEmail" name="basicEmail" class="form-control dt-email"
                            placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
                    </div>
                    <div class="form-text">
                        You can use letters, numbers & periods
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicDate">Joining Date</label>
                    <div class="input-group input-group-merge">
                        <span id="basicDate2" class="input-group-text"><i class='ti ti-calendar'></i></span>
                        <input type="text" class="form-control dt-date" id="basicDate" name="basicDate"
                            aria-describedby="basicDate2" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicSalary">Salary</label>
                    <div class="input-group input-group-merge">
                        <span id="basicSalary2" class="input-group-text"><i class='ti ti-currency-dollar'></i></span>
                        <input type="number" id="basicSalary" name="basicSalary" class="form-control dt-salary"
                            placeholder="12000" aria-label="12000" aria-describedby="basicSalary2" />
                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary data-submit me-sm-4 me-1">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                </div>
            </form>

        </div>
    </div>
    <!--/ DataTable with Buttons -->

@endsection
