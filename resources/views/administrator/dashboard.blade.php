<!DOCTYPE html>
<html lang="zxx" class="js">

@include('theme.header')
@php
    $words = [
        0 => 'Zero',
        1 => 'One',
        2 => 'Two',
        3 => 'Three',
        4 => 'Four',
        5 => 'Five',
        6 => 'Six',
        7 => 'Seven',
        8 => 'Eight',
        9 => 'Nine',
        10 => 'Ten',
        11 => 'Eleven',
        12 => 'Twelve',
        13 => 'Thirteen',
        14 => 'Fourteen',
        15 => 'Fifteen',
        16 => 'Sixteen',
        17 => 'Seventeen',
        18 => 'Eighteen',
        19 => 'Nineteen',
    ];
@endphp

<body class="nk-body bg-lighter ">
    <div class="nk-app-root">
        <div class="nk-wrap">

            <div class="nk-content p-0">
                <div class="container-fluid p-0">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-fmg" style="min-height: 1000px;">
                                @include('theme.sidemenu')
                                <div class="nk-fmg-body">
                                    @include('theme.header-top')
                                    <div class="nk-fmg-body-content">
                                        <div class="nk-block-head nk-block-head-sm pb-1">
                                            <div class="nk-block-head nk-block-head-sm">
                                                <div class="nk-block-between">
                                                    <div class="nk-block-head-content">
                                                        <h3 class="nk-block-title page-title">
                                                            Dashboard
                                                        </h3>
                                                        <div class="nk-block-des text-soft">
                                                            <p>You can view the summary of the accreditation.</p>
                                                        </div>
                                                    </div><!-- .nk-block-head-content -->
                                                    <div class="nk-block-head-content">
                                                        <div class="toggle-wrap nk-block-tools-toggle">
                                                            <a href="#"
                                                                class="btn btn-icon btn-trigger toggle-expand me-n1"
                                                                data-target="pageMenu"><em
                                                                    class="icon ni ni-more-v"></em></a>
                                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                                <ul class="nk-block-tools g-3">
                                                                    <li><a href="#"
                                                                            class="btn btn-white btn-dim btn-outline-primary"><em
                                                                                class="icon ni ni-reports"></em><span>Reports</span></a>
                                                                    </li>
                                                                    <li><a href="/program/create"
                                                                            class="btn btn-white btn-dim btn-outline-primary"><em
                                                                                class="icon ni ni-plus-circle"></em><span>Create Programs</span></a>
                                                                    </li>
                                                                    <li class="nk-block-tools-opt">
                                                                        <div class="drodown">
                                                                            <a href="#"
                                                                                class="dropdown-toggle btn btn-icon btn-primary"
                                                                                data-bs-toggle="dropdown"><em
                                                                                    class="icon ni ni-plus"></em></a>
                                                                            <div
                                                                                class="dropdown-menu dropdown-menu-end">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <em
                                                                                                class="icon ni ni-user-add-fill"></em>
                                                                                                <span>New PSV Accreditation</span>
                                                                                            </a>
                                                                                            </li>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-block-head-content -->
                                                </div><!-- .nk-block-between -->
                                            </div>

                                            <div class="nk-block">
                                                <div class="row g-gs">
                                                    <div class="col-md-8">
                                                        <div class="card card-bordered card-preview">
                                                            <div class="card-inner">
                                                                <table class="datatable-init table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>
                                                                                <center>#</center>
                                                                            </th>
                                                                            <th>Instruments</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($response as $rw)
                                                                            <tr>
                                                                                <td>
                                                                                    <center>
                                                                                        <div class="nk-file-icon">
                                                                                            @include('pages.instruments.icon-folder')
                                                                                        </div>
                                                                                    </center>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="text-dark"
                                                                                        href="/instrument/area/{{ $rw->ins_id }}"
                                                                                        target="_blank">
                                                                                        {{ $rw->ins_text }}
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="card card-bordered h-100">
                                                            <div class="card-inner-group">
                                                                <div class="card-inner card-inner-md">
                                                                    <div class="card-title-group">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Action Center</h6>
                                                                        </div>
                                                                        <div class="card-tools me-n1">
                                                                            <div class="drodown">
                                                                                <a href="#"
                                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                                    data-bs-toggle="dropdown"><em
                                                                                        class="icon ni ni-more-h"></em></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card-inner -->
                                                                <div class="card-inner">
                                                                    <div class="nk-wg-action">
                                                                        <div class="nk-wg-action-content">
                                                                            <em class="icon ni ni-cc-alt-fill"></em>
                                                                            <div class="title">Pending Applications
                                                                            </div>
                                                                            <p>We have still <strong>0 survery</strong>,
                                                                                thats
                                                                                need to review.</p>
                                                                        </div>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-trigger me-n2"><em
                                                                                class="icon ni ni-forward-ios"></em></a>
                                                                    </div>
                                                                </div><!-- .card-inner -->
                                                                <div class="card-inner">
                                                                    <div class="nk-wg-action">
                                                                        <div class="nk-wg-action-content">
                                                                            <em class="icon ni ni-help-fill"></em>
                                                                            <div class="title">Support Messages</div>
                                                                            <p>Here is <strong>0 new</strong> support
                                                                                message. </p>
                                                                        </div>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-trigger me-n2"><em
                                                                                class="icon ni ni-forward-ios"></em></a>
                                                                    </div>
                                                                </div><!-- .card-inner -->
                                                                <div class="card-inner">
                                                                    <div class="nk-wg-action">
                                                                        <div class="nk-wg-action-content">
                                                                            <em class="icon ni ni-wallet-fill"></em>
                                                                            <div class="title">Upcoming Accreditation</div>
                                                                            <p><strong>0 upcoming</strong> accreditation need
                                                                                to
                                                                                review.</p>
                                                                        </div>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-trigger me-n2"><em
                                                                                class="icon ni ni-forward-ios"></em></a>
                                                                    </div>
                                                                </div><!-- .card-inner -->
                                                            </div><!-- .card-inner-group -->
                                                        </div><!-- .card -->
                                                    </div>
                                                    <div class="col-xl-12 col-xxl-12">
                                                        <div class="card card-bordered card-full">
                                                            <div class="card-inner">
                                                                <div class="card-title-group">
                                                                    <div class="card-title">
                                                                        <h6 class="title"><span class="me-2">Activity
                                                                                Logs</span> <a href="#"
                                                                                class="link d-none d-sm-inline">See
                                                                                History</a></h6>
                                                                    </div>
                                                                    <div class="card-tools">
                                                                        <ul class="card-tools-nav">
                                                                            <li class="active"><a
                                                                                    href="#"><span>All</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->
                                                            <div class="card-inner p-0 border-top">
                                                                <div class="nk-tb-list nk-tb-orders">
                                                                    <div class="nk-tb-item nk-tb-head">
                                                                        <div class="nk-tb-col"><span>Description</span></div>
                                                                        
                                                                        <div class="nk-tb-col tb-col-sm text-end">
                                                                            <span>Area</span>
                                                                        </div>
                                                                        <div class="nk-tb-col text-end">
                                                                            <span>Date and Time</span>
                                                                        </div>
                                                                    </div><!-- .nk-tb-item -->
                                                                    <div class="nk-tb-item">
                                                                        <div class="nk-tb-col">
                                                                            <span class="tb-lead">-</span>
                                                                        </div>
                                                                        
                                                                        <div class="nk-tb-col tb-col-xxl">
                                                                            <span
                                                                                class="tb-sub text-primary">-</span>
                                                                        </div>
                                                                        <div class="nk-tb-col tb-col-sm text-end">
                                                                            <span class="tb-sub tb-amount">-
                                                                                <span>-</span></span>
                                                                        </div>
                                                                        <div class="nk-tb-col text-end">
                                                                            <span class="tb-sub tb-amount ">-
                                                                                <span>-</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->
                                                            <div
                                                                class="card-inner-sm border-top text-center d-sm-none">
                                                                <a href="#" class="btn btn-link btn-block">See
                                                                    History</a>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('theme.footer')
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="create-folder">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <form method="POST" action="{{ route('folder.create') }}" autocomplete="off">
                    @csrf
                    <div class="modal-body modal-body-md">
                        <div class="nk-upload-form">
                            <h5 class="title mb-3">Create Folder</h5>
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-left">
                                        <em class="icon ni ni-folder"></em>
                                    </div>
                                    <input type="text" name="inp_folderName" class="form-control" id="default-03"
                                        placeholder="Enter Folder name here..">
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="nk-modal-action justify-end">
                            <ul class="btn-toolbar g-4 align-center">
                                <li><a href="#" class="link link-primary">Cancel</a></li>
                                <li><button type="submit" class="btn btn-primary">Create</button></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="file-upload">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <form method="POST" action="{{ route('file.create') }}" autocomplete="off"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body modal-body-md">
                        <div class="form-group">
                            <label class="form-label" for="customFileLabel">Default File Upload</label>
                            <div class="form-control-wrap">
                                <div class="form-file">
                                    <input type="file" name="inp_files" class="form-file-input" id="customFile">
                                    <label class="form-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="nk-modal-action justify-end">
                            <ul class="btn-toolbar g-4 align-center">
                                <li><a href="#" class="link link-primary">Cancel</a></li>
                                <li><button type="submit" class="btn btn-primary">Add Files</button></li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>

    <script src="/assets/js/bundle.js?ver=3.0.3"></script>
    <script src="/assets/js/scripts.js?ver=3.0.3"></script>
    <script src="/assets/js/apps/file-manager.js?ver=3.0.3"></script>

</body>

</html>
