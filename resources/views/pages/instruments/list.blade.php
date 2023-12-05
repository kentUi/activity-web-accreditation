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
                            <div class="nk-fmg" style="min-height: 1000px;">
                                @include('theme.sidemenu')
                                <div class="nk-fmg-body">
                                    @include('theme.header-top')
                                    <div class="nk-fmg-body-content">
                                        <div class="nk-block-head nk-block-head-sm pb-1">
                                            <div class="nk-block-between position-relative">
                                                <div class="nk-block-head-content">
                                                    <h5 class="">UNIVERSITY OF SCIENCE AND TECHNOLOGY OF SOUTHERN
                                                        PHILIPPINES - JASAAN CAMPUS</h5>
                                                    <nav>
                                                        <ul class="breadcrumb breadcrumb-arrow">
                                                            <li class="breadcrumb-item">Home</li>
                                                            <li class="breadcrumb-item"><a href="/instruments/area">
                                                                    Instruments</a></li>
                                                            <li class="breadcrumb-item active">{{ $area }}</li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                                <div class="nk-block-head-content">
                                                    <ul class="nk-block-tools g-1">
                                                        <li class="d-lg-none">
                                                            <a href="#"
                                                                class="btn btn-trigger btn-icon search-toggle toggle-search"
                                                                data-target="search"><em
                                                                    class="icon ni ni-search"></em></a>
                                                        </li>
                                                        <li class="d-lg-none">
                                                            <div class="dropdown">
                                                                <a href="#" class="btn btn-trigger btn-icon"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-plus"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#file-upload"
                                                                                data-bs-toggle="modal"><em
                                                                                    class="icon ni ni-upload-cloud"></em><span>Upload
                                                                                    File</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-file-plus"></em><span>Create
                                                                                    File</span></a></li>
                                                                        <li><a href="#create-folder"
                                                                                data-bs-toggle="modal"><em
                                                                                    class="icon ni ni-folder-plus"></em><span>Create
                                                                                    Folder</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="d-lg-none me-n1">
                                                            <a href="#" class="btn btn-trigger btn-icon toggle"
                                                                data-target="files-aside"><em
                                                                    class="icon ni ni-menu-alt-r"></em>
                                                            </a>
                                                    </ul>
                                                </div>


                                                <div class="search-wrap px-2 d-lg-none" data-search="search">
                                                    <div class="search-content">
                                                        <a href="#" class="search-back btn btn-icon toggle-search"
                                                            data-target="search"><em
                                                                class="icon ni ni-arrow-left"></em></a>
                                                        <input type="text"
                                                            class="form-control border-transparent form-focus-none"
                                                            placeholder="Search by user or message">
                                                        <button class="search-submit btn btn-icon"><em
                                                                class="icon ni ni-search"></em></button>
                                                    </div>
                                                </div><!-- .search-wrap -->
                                            </div>
                                        </div>
                                        <div class="nk-fmg-listing nk-block-lg">
                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <h5 class="card-title">{{ $area }}
                                                    </h5>
                                                    <hr>
                                                    <div class="nk-files nk-files-view-list">
                                                        @php
                                                            use App\Models\InstrumentSub;
                                                            use App\Models\InstrumentSublist;
                                                        @endphp
                                                        @foreach ($response as $rw)
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info">
                                                                    <div class="nk-file-title">

                                                                        <div class="nk-file-icon">
                                                                            @include('pages.instruments.icon-paper')
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <a href="javascript:void(0)"
                                                                                    class="title">{{ $rw->ins_text }}</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-file-meta">
                                                                    <div class="tb-lead">25 Apr, 01:21 AM</div>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href=""
                                                                            class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                            data-bs-toggle="dropdown"><em
                                                                                class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-plain no-bdr">
                                                                                <li>
                                                                                    <a href="#create-sublist"
                                                                                        onclick="subStatement('{{ $rw->ins_id }}', '{{ $rw->ins_text }}')"
                                                                                        data-bs-toggle="modal">
                                                                                        <em
                                                                                            class="icon ni ni-plus"></em>
                                                                                        <span>New Statement</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li><a href="#"><em
                                                                                            class="icon ni ni-pen"></em><span>Rename</span></a>
                                                                                </li>
                                                                                <li><a href="#"><em
                                                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @php
                                                                $rs = InstrumentSublist::where('ins_parentid', $rw->ins_id)->get();
                                                            @endphp
                                                            @foreach ($rs as $rw_list)
                                                                <div class="nk-file-item nk-file">
                                                                    <div class="nk-file-info">
                                                                        <div class="nk-file-title"
                                                                            style="padding-left: 55px;">

                                                                            <div class="nk-file-icon">
                                                                                @include('pages.instruments.icon-sublist')
                                                                            </div>
                                                                            <div class="nk-file-name">
                                                                                <div class="nk-file-name-text">
                                                                                    <a href="javascript:void(0)"
                                                                                        class="title">{{ $rw_list->ins_text }}</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="nk-file-meta">
                                                                        <div class="tb-lead">25 Apr, 01:21 AM</div>
                                                                    </div>
                                                                    <div class="nk-file-actions">
                                                                        <div class="dropdown">
                                                                            <a href=""
                                                                                class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                                data-bs-toggle="dropdown"><em
                                                                                    class="icon ni ni-more-h"></em></a>
                                                                            <div
                                                                                class="dropdown-menu dropdown-menu-end">
                                                                                <ul class="link-list-plain no-bdr">
                                                                                    <li>
                                                                                        @php
                                                                                            $info = InstrumentSub::where('ins_text', $rw_list->ins_text)->first();
                                                                                        @endphp
                                                                                        <a href="#create-sublist"
                                                                                            onclick="subStatement('{{ $info->ins_id }}', '{{ $rw_list->ins_text }}')"
                                                                                            data-bs-toggle="modal">
                                                                                            <em
                                                                                                class="icon ni ni-plus"></em>
                                                                                            <span>New Statement</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li><a href="#"><em
                                                                                                class="icon ni ni-pen"></em><span>Rename</span></a>
                                                                                    </li>
                                                                                    <li><a href="#"><em
                                                                                                class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @php
                                                                    echo view('pages.instruments.request.data')->with(['id' => $rw_list->ins_id, 'from' => 'instrument']);
                                                                @endphp
                                                            @endforeach
                                                        @endforeach

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

    <div class="modal fade" tabindex="-1" role="dialog" id="create-folder">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <form method="POST" action="{{ route('instrument.create') }}" autocomplete="off">
                    @csrf
                    <div class="modal-body modal-body-md">
                        <div class="nk-upload-form">
                            <h5 class="title mb-3">Create Statement</h5>
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-left">
                                        <em class="icon ni ni-file"></em>
                                    </div>
                                    <input type="text" name="inp_statement" class="form-control" id="default-03"
                                        placeholder="Enter statement here..">
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

    <div class="modal fade" tabindex="-1" role="dialog" id="create-sublist">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <form method="POST" action="{{ route('instrument.create-sub') }}" autocomplete="off">
                    @csrf
                    <div class="modal-body modal-body-md">
                        <div class="nk-upload-form">
                            <h5 class="title mb-3">Create Sub-Statement</h5>
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-left">
                                        <em class="icon ni ni-file"></em>
                                    </div>
                                    <input type="text" readonly id="inp_substatement" class="form-control"
                                        placeholder="Enter sub-statement here..">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="hidden" id="__t4y5iwqPlzQ" name="__5ARqZT879i">
                                    <div class="form-icon form-icon-left">
                                        <em class="icon ni ni-pen"></em>
                                    </div>
                                    <input type="text" name="inp_statement" class="form-control" id="default-03"
                                        placeholder="Enter sub-statement here..">
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="nk-modal-action justify-end">
                            <ul class="btn-toolbar g-4 align-center">
                                <li><a href="#" class="close" data-bs-dismiss="modal" class="link
                                        link-primary">Cancel</a></li>
                                <li><button type="submit" class="btn btn-primary">Create</button></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function subStatement(id, statement) {
            document.getElementById('__t4y5iwqPlzQ').value = id;
            document.getElementById('inp_substatement').value = statement;
        }
    </script>

    <script src="/assets/js/bundle.js?ver=3.0.3"></script>
    <script src="/assets/js/scripts.js?ver=3.0.3"></script>
    <script src="/assets/js/apps/file-manager.js?ver=3.0.3"></script>

</body>

</html>
