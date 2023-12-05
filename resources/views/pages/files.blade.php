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
                                                    <h5 class="">Accreditation</h5>
                                                    <nav>
                                                        <ul class="breadcrumb breadcrumb-arrow">
                                                            <li class="breadcrumb-item"><a href="#">Accreditation</a></li>
                                                            <li class="breadcrumb-item">Area</li>
                                                            <li class="breadcrumb-item active">{{ $area_no }}</li>
                                                        </ul>
                                                    </nav>
                                                    <p>Accreditation areas can be further subdivided into more specific areas. </p>
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
                                                                        <li><a href="#"><em
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
                                        <hr>
                                        <div class="nk-fmg-listing nk-block-lg">
                                            <div class="nk-block-head-xs">
                                                <div class="nk-block-between g-2">
                                                    <div class="nk-block-head-content">
                                                        <h6 class="nk-block-title title">Browse Folder</h6>
                                                    </div>
                                                    <div class="nk-block-head-content">
                                                        <ul class="nk-block-tools g-3 nav">
                                                            <li><a data-bs-toggle="tab" href="#file-grid-view"
                                                                    class="nk-switch-icon active"><em
                                                                        class="icon ni ni-view-grid3-wd"></em></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-content">
                                                <div class="tab-pane active" id="file-grid-view">
                                                    <div class="nk-files nk-files-view-grid">
                                                        <div class="nk-files-list">

                                                            @foreach ($response as $area)
                                                                <div class="nk-file-item nk-file">
                                                                    <div class="nk-file-info">
                                                                        <div class="nk-file-title">
                                                                            <div class="nk-file-icon">
                                                                                <a class="nk-file-icon-link"
                                                                                    href="/member/area/{{$area->folder_areaid}}/{{$area->folder_id}}">
                                                                                    <span class="nk-file-icon-type">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 72 72">
                                                                                            <g>
                                                                                                <rect x="32"
                                                                                                    y="16"
                                                                                                    width="28"
                                                                                                    height="15"
                                                                                                    rx="2.5"
                                                                                                    ry="2.5"
                                                                                                    style="fill:#f29611" />
                                                                                                <path
                                                                                                    d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z"
                                                                                                    style="fill:#ffb32c" />
                                                                                                <path
                                                                                                    d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z"
                                                                                                    style="fill:#f2a222" />
                                                                                            </g>
                                                                                        </svg>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="nk-file-name">
                                                                                <div class="nk-file-name-text">
                                                                                    <a href="#" class="title">
                                                                                        {{ $area->folder_name}}
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="nk-file-desc">
                                                                            <li class="date">Total Files</li>
                                                                            <li class="size">16</li>
                                                                        </ul>
                                                                        <div class="nk-file-members">
                                                                            <div class="user-avatar-group">
                                                                                <div class="user-avatar xs">
                                                                                    <img src="./images/avatar/b-sm.jpg" alt="">
                                                                                </div>
                                                                                <div class="user-avatar xs bg-purple">
                                                                                    <span>IH</span>
                                                                                </div>
                                                                                <div class="user-avatar xs bg-pink">
                                                                                    <span>AB</span>
                                                                                </div>
                                                                                <div class="user-avatar xs bg-light">
                                                                                    <span>+2</span>
                                                                                </div>
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
            @include('theme.footer')
        </div>
    </div>

    <script src="/assets/js/bundle.js?ver=3.0.3"></script>
    <script src="/assets/js/scripts.js?ver=3.0.3"></script>
    <script src="/assets/js/apps/file-manager.js?ver=3.0.3"></script>

</body>

</html>
