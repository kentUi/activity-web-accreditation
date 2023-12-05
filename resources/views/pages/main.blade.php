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
                                        <div class="nk-block-head nk-block-head-sm">
                                            <div class="nk-block-between position-relative">
                                                <div class="nk-block-head-content">
                                                    <h5 class="">UNIVERSITY OF SCIENCE AND TECHNOLOGY OF SOUTHERN
                                                        PHILIPPINES - JASAAN CAMPUS</h5>
                                                    <nav>
                                                        <ul class="breadcrumb breadcrumb-arrow">
                                                            <li class="breadcrumb-item">Home</li>
                                                            <li class="breadcrumb-item">
                                                              Storage
                                                            </li>
                                                            <li class="breadcrumb-item active">
                                                                <a href="/member">Area</a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                                <div class="alert alert-warning">
                                                    <b>Due</b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-fmg-listing nk-block-lg">
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
                                                                                    href="/member/area/{{ $area->ins_id }}">
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
                                                                                                <path
                                                                                                    d="M42.2227,40H41.5V37.4443a5.5,5.5,0,0,0-11,0V40h-.7227A2.8013,2.8013,0,0,0,27,42.8184v6.3633A2.8013,2.8013,0,0,0,29.7773,52H42.2227A2.8013,2.8013,0,0,0,45,49.1816V42.8184A2.8013,2.8013,0,0,0,42.2227,40ZM36,48a2,2,0,1,1,2-2A2.0023,2.0023,0,0,1,36,48Zm3.5-8h-7V37.4443a3.5,3.5,0,0,1,7,0Z"
                                                                                                    style="fill:#c67424" />
                                                                                            </g>
                                                                                        </svg>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="nk-file-name">
                                                                                <div class="nk-file-name-text">
                                                                                    <a href="#" class="title">
                                                                                        {{ $area->ins_code }}
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="nk-file-desc">
                                                                            <li class="date">Total Files</li>
                                                                            <li class="size">0</li>
                                                                        </ul>
                                                                        <div class="nk-file-members">
                                                                            <div class="user-avatar-group">
                                                                                <div class="user-avatar xs">
                                                                                    <img src="./images/avatar/b-sm.jpg"
                                                                                        alt="">
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
