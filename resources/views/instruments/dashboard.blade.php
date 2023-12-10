<!DOCTYPE html>
<html lang="zxx" class="js">

@include('theme.header')

<body class="nk-body bg-lighter ">
    <div class="nk-app-root">
        <div class="nk-wrap">

            <div class="nk-content p-0">
                <div class="container-fluid p-0">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-fmg">
                                @include('theme.sidemenu')
                                <div class="nk-fmg-body">
                                    @include('theme.header-top')
                                    <div class="nk-fmg-body-content">
                                        <div class="nk-block-head nk-block-head-sm pb-1">
                                            <div class="nk-block-head nk-block-head-sm">
                                                <div class="nk-block-between">
                                                    <div class="nk-block-head-content">
                                                        <h3 class="nk-block-title page-title">
                                                            Manage Instruments
                                                        </h3>
                                                        <div class="nk-block-des text-soft">
                                                            <p>You can create or view an instruments for accreditation.
                                                            </p>
                                                        </div>
                                                    </div><!-- .nk-block-head-content -->
                                                    <div class="nk-block-head-content">
                                                        <div class="toggle-wrap nk-block-tools-toggle">
                                                            <a href="javascript:void(0)"
                                                                class="btn btn-icon btn-trigger toggle-expand me-n1"
                                                                data-target="pageMenu"><em
                                                                    class="icon ni ni-more-v"></em></a>
                                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                                <li>

                                                                </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-block-head-content -->
                                                </div><!-- .nk-block-between -->
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <div class="card card-bordered card-preview" style="min-height: 400px">
                                                    <div class="card-inner">
                                                        <ul class="nav nav-tabs">
                                                            <li class="nav-item">
                                                                @php
                                                                    if (!isset($_GET['s'])) {
                                                                        $active_pvs = 'active';
                                                                        $active_old = '';
                                                                    } else {
                                                                        $active_pvs = '';
                                                                        $active_old = 'active';
                                                                    }
                                                                @endphp
                                                                <a class="nav-link {{ $active_pvs }}"
                                                                    data-bs-toggle="tab" href="#tabItem5">
                                                                    <em class="icon ni ni-user"></em>
                                                                    <span>
                                                                        Primary Source Verification (PSV)
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link {{ $active_old }}"
                                                                    data-bs-toggle="tab" href="#tabItem6">
                                                                    <em class="icon ni ni-history"></em>
                                                                    <span>
                                                                        Old Policy (Instruments)
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane {{ $active_pvs }}" id="tabItem5">
                                                                <p>Joint Commission defines Primary Source Verification
                                                                    as the "verification of an individual practitioner's
                                                                    reported qualifications.</p>
                                                                <hr>
                                                                <a style="float: right" class="btn btn-light"
                                                                    href="#create-area" data-bs-toggle="modal">
                                                                    <em class="icon ni ni-plus"></em>
                                                                    <span>Create Additional Area</span>
                                                                </a>

                                                                <table class="datatable-init table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Instruments</th>
                                                                            <th class="text-center">Type</th>
                                                                            <th>Date Created</th>
                                                                            <th width="50" class="text-center">
                                                                                Options</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($response as $rw)
                                                                            <tr>
                                                                                <td>
                                                                                    <a class="text-dark"
                                                                                        href="/instrument/area/{{ $rw->ins_id }}"
                                                                                        target="_blank">
                                                                                        {{ $rw->ins_text }}
                                                                                    </a>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    @if ($rw->ins_code == null)
                                                                                        Additional
                                                                                    @else
                                                                                        Default
                                                                                    @endif
                                                                                </td>
                                                                                <td>
                                                                                    {{ date_format($rw->created_at, 'D, M. d, Y h:i A') }}
                                                                                </td>
                                                                                <td>
                                                                                    <center>
                                                                                        <div class="dropdown p-0">
                                                                                            <a href="javascript:void(0)"
                                                                                                class="dropdown-toggle btn btn-icon btn-trigger p-0"
                                                                                                data-bs-toggle="dropdown">
                                                                                                <em
                                                                                                    class="icon ni ni-more-h"></em>
                                                                                            </a>
                                                                                            <div
                                                                                                class="dropdown-menu dropdown-menu-end">
                                                                                                <ul
                                                                                                    class="link-list-opt no-bdr">
                                                                                                    <li>
                                                                                                        <a
                                                                                                            href="javascript:void(0)">
                                                                                                            <em
                                                                                                                class="icon ni ni-eye"></em>
                                                                                                            <span> View
                                                                                                                Instruments</span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    @if ($rw->ins_code == null)
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="javascript:void(0)">
                                                                                                                <em
                                                                                                                    class="icon ni ni-trash"></em>
                                                                                                                <span>
                                                                                                                    Remove
                                                                                                                    Area</span>
                                                                                                            </a>
                                                                                                        </li>
                                                                                                    @endif
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>

                                                                                    </center>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="tab-pane {{ $active_old }}" id="tabItem6">
                                                                <p style="text-transform:capitalize">
                                                                    UNIVERSITY OF SCIENCE AND TECHNOLOGY OF SOUTHERN
                                                                    PHILIPPINES
                                                                    - JASAAN CAMPUS
                                                                </p>
                                                                <hr>
                                                                <a style="float: right;" href="javascript:void(0)"
                                                                    class="btn btn-light" data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-plus"></em> <span>Create
                                                                        Instruments</span></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li>
                                                                            <a href="#create-instruments"
                                                                                data-bs-toggle="modal">
                                                                                <em class="icon ni ni-book"></em>
                                                                                <span>Blank Instruments</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#file-upload"
                                                                                data-bs-toggle="modal">
                                                                                <em class="icon ni ni-copy"></em>
                                                                                <span>Clone Master List</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <table class="datatable-init table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>
                                                                                <center>#</center>
                                                                            </th>
                                                                            <th>Instruments</th>
                                                                            <th>Type</th>
                                                                            <th>Date Created</th>
                                                                            <th width="50" class="text-center">
                                                                                Options</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @php
                                                                            $num = 1;
                                                                        @endphp
                                                                        @foreach ($instruments as $item)
                                                                            <tr>
                                                                                <td>{{ $num++ }}.</td>
                                                                                <td>{{ $item->ins_text }}</td>
                                                                                <td>{{ $item->ins_type }}</td>
                                                                                <td>
                                                                                    {{ date_format($item->created_at, 'D, M. d, Y h:i A') }}
                                                                                </td>
                                                                                <td>
                                                                                    <center>
                                                                                        <div class="dropdown p-0">
                                                                                            <a href="javascript:void(0)"
                                                                                                class="dropdown-toggle btn btn-icon btn-trigger p-0"
                                                                                                data-bs-toggle="dropdown">
                                                                                                <em
                                                                                                    class="icon ni ni-more-h"></em>
                                                                                            </a>
                                                                                            <div
                                                                                                class="dropdown-menu dropdown-menu-end">
                                                                                                <ul
                                                                                                    class="link-list-opt no-bdr">
                                                                                                    <li><a
                                                                                                            href="javascript:void(0)"><em
                                                                                                                class="icon ni ni-copy"></em><span>Use
                                                                                                                this
                                                                                                                Template</span></a>
                                                                                                    </li>

                                                                                                    <li><a onclick="edit({{ $item->ins_id }})"
                                                                                                            href="#create-instruments"
                                                                                                            data-bs-toggle="modal"><em
                                                                                                                class="icon ni ni-edit"></em><span>Edit
                                                                                                                Instruments</span></a>
                                                                                                    </li>
                                                                                                    <li><a
                                                                                                            href="javascript:void(0)"><em
                                                                                                                class="icon ni ni-eye"></em><span>View
                                                                                                                Instruments</span></a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a onclick="remove({{ $item->ins_id }})"
                                                                                                            href="javascript:void(0)">
                                                                                                            <em
                                                                                                                class="icon ni ni-trash"></em><span>Remove
                                                                                                                Instrument</span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>

                                                                                    </center>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
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
        </div>
    </div>

    @include('instruments.script');

    <script src="/assets/js/bundle.js?ver=3.0.3"></script>
    <script src="/assets/js/scripts.js?ver=3.0.3"></script>
    <script src="/assets/js/apps/file-manager.js?ver=3.0.3"></script>

</body>

</html>
