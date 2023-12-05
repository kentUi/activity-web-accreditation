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
                                            <div class="nk-block-between position-relative">
                                                <div class="nk-block-head nk-block-head-sm pb-1">
                                                    <div class="nk-block-between position-relative">
                                                        <div class="nk-block-head-content">
                                                            <h5 class="">UNIVERSITY OF SCIENCE AND TECHNOLOGY OF
                                                                SOUTHERN
                                                                PHILIPPINES - JASAAN CAMPUS</h5>
                                                            <nav>
                                                                <ul class="breadcrumb breadcrumb-arrow">
                                                                    <li class="breadcrumb-item">Home</li>
                                                                    <li class="breadcrumb-item">
                                                                        <a href="/member">Area</a>
                                                                    </li>
                                                                    <li class="breadcrumb-item">
                                                                        <a
                                                                            href="/member/area/{{$area[0]->ins_parentid}}">{{ $words[$area[0]->ins_parentid] }}</a>
                                                                    </li>
                                                                    <li class="breadcrumb-item active">
                                                                        <a href="/">{{ $area[0]->ins_text }}</a>
                                                                    </li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-content">
                                                <div class="tab-pane active" id="file-grid-view">
                                                    <div class="card card-bordered">
                                                        <div class="card-inner">
                                                            <h5>{{ $area[0]->ins_text }}</h5>
                                                            <hr>
                                                            <div class="nk-files nk-files-view-list">
                                                                @php
                                                                    use App\Models\InstrumentSub;
                                                                @endphp
                                                                @foreach ($folders as $rw)
                                                                    <div class="nk-file-item nk-file">
                                                                        <div class="nk-file-info">
                                                                            <div class="nk-file-title">
                                                                                <div class="nk-file-icon">
                                                                                    @include('pages.instruments.icon-folder')
                                                                                </div>
                                                                                @php
                                                                                    $rsx = InstrumentSub::where('ins_text', $rw->ins_text)->first();
                                                                                @endphp
                                                                                <div class="nk-file-name">
                                                                                    <div class="nk-file-name-text">
                                                                                        <a href="/member/folder/{{ $rsx->ins_id }}"
                                                                                            class="title">
                                                                                            {{ $rw->ins_text }}</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="nk-file-meta">
                                                                            <div class="tb-lead">20 Apr, 03:32 AM</div>
                                                                        </div>
                                                                        <div class="nk-file-members">
                                                                            <div class="user-avatar-group">
                                                                                <div class="user-avatar xs bg-pink">
                                                                                    <span>AB</span>
                                                                                </div>
                                                                                <div class="user-avatar xs bg-purple">
                                                                                    <span>IH</span>
                                                                                </div>
                                                                                <div class="user-avatar xs">
                                                                                    <img src="./images/avatar/b-sm.jpg"
                                                                                        alt="">
                                                                                </div>
                                                                            </div>
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
                                                                                        <li><a href="#file-details"
                                                                                                data-bs-toggle="modal"><em
                                                                                                    class="icon ni ni-eye"></em><span>Details</span></a>
                                                                                        </li>
                                                                                        <li><a href="#file-share"
                                                                                                data-bs-toggle="modal"><em
                                                                                                    class="icon ni ni-share"></em><span>Share</span></a>
                                                                                        </li>
                                                                                        <li><a href="#file-copy"
                                                                                                data-bs-toggle="modal"><em
                                                                                                    class="icon ni ni-copy"></em><span>Copy</span></a>
                                                                                        </li>
                                                                                        <li><a href="#file-move"
                                                                                                data-bs-toggle="modal"><em
                                                                                                    class="icon ni ni-forward-arrow"></em><span>Move</span></a>
                                                                                        </li>
                                                                                        <li><a href="#"
                                                                                                class="file-dl-toast"><em
                                                                                                    class="icon ni ni-download"></em><span>Download</span></a>
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
                                                                @endforeach
                                                                @foreach ($files as $xrw)
                                                                    <div class="nk-file-item nk-file">
                                                                        <div class="nk-file-info">
                                                                            <div class="nk-file-title">
                                                                                <div class="nk-file-icon">
                                                                                    <img src="/icons/{{$xrw->file_extension}}.png" height="32" alt="">
                                                                                </div>
                                                                                <div class="nk-file-name">
                                                                                    <div class="nk-file-name-text">
                                                                                        <a href="/member/folder/"
                                                                                            class="title">
                                                                                            {{$xrw->file_name}}
                                                                                           </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="nk-file-meta">
                                                                            <div class="tb-lead">20 Apr, 03:32 AM</div>
                                                                        </div>
                                                                        <div class="nk-file-meta">
                                                                            <div class="tb-lead">.{{$xrw->file_extension}}</div>
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
                                                                                        <li><a href="#file-details"
                                                                                                data-bs-toggle="modal"><em
                                                                                                    class="icon ni ni-eye"></em><span>Details</span></a>
                                                                                        </li>
                                                                                        <li><a href="#file-share"
                                                                                                data-bs-toggle="modal"><em
                                                                                                    class="icon ni ni-share"></em><span>Share</span></a>
                                                                                        </li>
                                                                                        <li><a href="#file-copy"
                                                                                                data-bs-toggle="modal"><em
                                                                                                    class="icon ni ni-copy"></em><span>Copy</span></a>
                                                                                        </li>
                                                                                        <li><a href="#file-move"
                                                                                                data-bs-toggle="modal"><em
                                                                                                    class="icon ni ni-forward-arrow"></em><span>Move</span></a>
                                                                                        </li>
                                                                                        <li><a href="#"
                                                                                                class="file-dl-toast"><em
                                                                                                    class="icon ni ni-download"></em><span>Download</span></a>
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
            </div>
            @include('theme.footer')
        </div>
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
                <form method="POST" action="{{ route('file.create') }}" autocomplete="off"  enctype="multipart/form-data">
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
