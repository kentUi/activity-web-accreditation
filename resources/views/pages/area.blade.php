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
                                                            <li class="breadcrumb-item">
                                                                <a href="/member">Area</a>
                                                            </li>
                                                            <li class="breadcrumb-item active">{{ $area_no }}</li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-fmg-listing nk-block-lg">

                                            <div class="tab-content">
                                                <div class="tab-pane active" id="file-grid-view">
                                                    <div class="nk-fmg-listing nk-block-lg">
                                                        <div class="card card-bordered">
                                                            <div class="card-inner">
                                                                <h5>{{ $area->ins_text }}</h5>
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
                                                                                    <span class="nk-file-icon-type">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                            <g>
                                                                                                <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611"></rect>
                                                                                                <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c"></path>
                                                                                                <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222"></path>
                                                                                                <path d="M29.6309,37.36a3.0236,3.0236,0,0,1-.86-2.39A4.3748,4.3748,0,0,1,32.9961,31h.0078a4.36,4.36,0,0,1,4.22,3.9121,3.0532,3.0532,0,0,1-.8545,2.4482A4.4158,4.4158,0,0,1,33.23,38.53c-.0771,0-.1533-.002-.23-.0049A4.519,4.519,0,0,1,29.6309,37.36ZM43.4668,40.1a1,1,0,1,0-.9336,1.77c.7207.38,1.4658,2.126,1.4668,4.39v1.7256a1,1,0,0,0,2,0V46.26C45.999,43.33,45.0049,40.9119,43.4668,40.1ZM40.165,37.3816c-.1445.084-.29.168-.4316.2549a1,1,0,0,0,.5215,1.8535.9887.9887,0,0,0,.52-.1465c.1289-.0781.2607-.1543.3916-.23a4.2311,4.2311,0,0,0,2.1465-2.124.9839.9839,0,0,0,.0313-.1045A3.8411,3.8411,0,0,0,40.5,32.52a1,1,0,1,0-.4922,1.9395,1.8773,1.8773,0,0,1,1.4,1.9092A2.835,2.835,0,0,1,40.165,37.3816ZM36.5,41h-7c-2.5234,0-4.5,2.7822-4.5,6.333V48.5a.8355.8355,0,0,0,.0588.2914.9731.9731,0,0,0,.3508.4946C26.4646,50.2812,29.4614,51,33,51s6.5353-.7187,7.59-1.7139a.9726.9726,0,0,0,.3509-.4949A.8361.8361,0,0,0,41,48.5V47.333C41,43.7822,39.0234,41,36.5,41Z" style="fill:#c67424"></path>
                                                                                            </g>
                                                                                        </svg>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="nk-file-name">
                                                                                    <div class="nk-file-name-text">
                                                                                        <a href="/member/folder/{{ $rw->ins_id }}" class="title">{{ $rw->ins_text }}</a>
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
                                                                                    <img src="./images/avatar/b-sm.jpg" alt="">
                                                                                </div>
                                                                            </div>
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
                <form method="POST" action="{{ route('area.create') }}" autocomplete="off">
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

    <script src="/assets/js/bundle.js?ver=3.0.3"></script>
    <script src="/assets/js/scripts.js?ver=3.0.3"></script>
    <script src="/assets/js/apps/file-manager.js?ver=3.0.3"></script>

</body>

</html>
