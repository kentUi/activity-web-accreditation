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
                                                            <li class="breadcrumb-item">Instruments</li>
                                                            <li class="breadcrumb-item active">MANAGE INSTRUMENTS</li>
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
                                                    <h5 class="card-title">MANAGE INSTRUMENTS
                                                    </h5>
                                                    <hr>
                                                    <div class="nk-files nk-files-view-list">
                                                            @foreach ($response as $rw)
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info">
                                                                    <div class="nk-file-title">
                                                                        <div class="nk-file-icon">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <g>
                                                                                        <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611" />
                                                                                        <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c" />
                                                                                        <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222" />
                                                                                    </g>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <a href="instrument/area/{{$rw->ins_id}}" class="title">{{$rw->ins_text}}</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-file-meta">
                                                                    <div class="tb-lead">Today, 11:19 AM</div>
                                                                </div>
                                                                <div class="nk-file-members">
                                                                    <div class="tb-lead">Only Me</div>
                                                                    <div class="tb-shared"><em class="ni ni-link" data-bs-toggle="tooltip" data-bs-placement="left" title="People with the link can view"></em></div>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-plain no-bdr">
                                                                                <li><a href="#file-details" data-bs-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                <li><a href="#file-share" data-bs-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                                <li><a href="#file-copy" data-bs-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                                <li><a href="#file-move" data-bs-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                                <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach   
                                                        </div>
                                                    </div>
                                                    {{-- <table class="table">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th scope="col">First</th>
                                                                <th scope="col" width="100">Handle</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                use App\Models\InstrumentSub;
                                                                use App\Models\InstrumentSublist;
                                                            @endphp
                                                            @foreach ($response as $rw)
                                                                <tr>
                                                                    <td>{{ $rw->ins_text }}</td>
                                                                    <td>@mdo</td>
                                                                </tr>
                                                                @php
                                                                    $rs = InstrumentSublist::where('ins_parentid', $rw->ins_id)->get();
                                                                @endphp
                                                                @foreach ($rs as $rw_list)
                                                                    <tr>
                                                                        <td style="padding-left: 55px; color: red">
                                                                            {{ $rw_list->ins_id }}
                                                                            {{ $rw_list->ins_text }}
                                                                        </td>
                                                                        <td>@mdo</td>
                                                                    </tr>
                                                                    @php
                                                                        echo view('pages.instruments.request.data')->with(['id' => $rw_list->ins_id]);
                                                                    @endphp
                                                                @endforeach
                                                            @endforeach
                                                        </tbody>
                                                    </table> --}}
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


    <script src="/assets/js/bundle.js?ver=3.0.3"></script>
    <script src="/assets/js/scripts.js?ver=3.0.3"></script>
    <script src="/assets/js/apps/file-manager.js?ver=3.0.3"></script>

</body>

</html>
