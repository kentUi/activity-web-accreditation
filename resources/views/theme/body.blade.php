<div class="nk-fmg-body">
    <div class="nk-fmg-body-head d-none d-lg-flex pt-0 pb-0">
        <div class="nk-fmg-search">
            <em class="icon ni ni-search"></em>
            <input type="text" class="form-control border-transparent form-focus-none"
                placeholder="Search files, folders">
        </div>
        <div class="nk-fmg-actions">
            <ul class="nk-block-tools g-3">
                <li>
                    <div class="dropdown">
                        <a href="#" class="btn btn-light" data-bs-toggle="dropdown"><em
                                class="icon ni ni-plus"></em> <span>Create</span></a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <ul class="link-list-opt no-bdr">
                                <li><a href="#file-upload" data-bs-toggle="modal"><em
                                            class="icon ni ni-upload-cloud"></em><span>Upload File</span></a></li>
                                <li><a href="#"><em class="icon ni ni-file-plus"></em><span>Create File</span></a>
                                </li>
                                <li><a href="#"><em class="icon ni ni-folder-plus"></em><span>Create
                                            Folder</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="#file-upload" class="btn btn-primary" data-bs-toggle="modal"><em
                            class="icon ni ni-upload-cloud"></em> <span>Upload</span></a></li>
                <li>
                    <div class="nk-header-tools">
                        <ul class="nk-quick-nav">
                            <li class="dropdown user-dropdown">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <div class="user-toggle">
                                        <div class="user-avatar sm">
                                            <em class="icon ni ni-user-alt"></em>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1 is-light">
                                    <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Abu Bin Ishtiyak</span>
                                                <span class="sub-text">info@softnio.com</span>
                                            </div>
                                            <div class="user-action">
                                                <a class="btn btn-icon me-n2" href="html/user-profile-setting.html"><em
                                                        class="icon ni ni-setting"></em></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-inner user-account-info">
                                        <h6 class="overline-title-alt">Account Balance</h6>
                                        <div class="user-balance">1,494.23 <small
                                                class="currency currency-usd">USD</small></div>
                                        <div class="user-balance-sub">Locked <span>15,495.39 <span
                                                    class="currency currency-usd">USD</span></span></div>
                                        <a href="#" class="link"><span>Withdraw Balance</span> <em
                                                class="icon ni ni-wallet-out"></em></a>
                                    </div>
                                    <div class="dropdown-inner">
                                        <ul class="link-list">
                                            <li><a href="html/user-profile-regular.html"><em
                                                        class="icon ni ni-user-alt"></em><span>View
                                                        Profile</span></a></li>
                                            <li><a href="html/user-profile-setting.html"><em
                                                        class="icon ni ni-setting-alt"></em><span>Account
                                                        Setting</span></a></li>
                                            <li><a href="html/user-profile-activity.html"><em
                                                        class="icon ni ni-activity-alt"></em><span>Login
                                                        Activity</span></a></li>
                                            <li><a class="dark-mode-switch" href="#"><em
                                                        class="icon ni ni-moon"></em><span>Dark
                                                        Mode</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown-inner">
                                        <ul class="link-list">
                                            <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign
                                                        out</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="nk-fmg-body-content">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between position-relative">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Files</h3>
                </div>
                <div class="nk-block-head-content">
                    <ul class="nk-block-tools g-1">
                        <li class="d-lg-none">
                            <a href="#" class="btn btn-trigger btn-icon search-toggle toggle-search"
                                data-target="search"><em class="icon ni ni-search"></em></a>
                        </li>
                        <li class="d-lg-none">
                            <div class="dropdown">
                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="dropdown"><em
                                        class="icon ni ni-plus"></em></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#file-upload" data-bs-toggle="modal"><em
                                                    class="icon ni ni-upload-cloud"></em><span>Upload File</span></a>
                                        </li>
                                        <li><a href="#"><em class="icon ni ni-file-plus"></em><span>Create
                                                    File</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-folder-plus"></em><span>Create
                                                    Folder</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="d-lg-none me-n1">
                            <a href="#" class="btn btn-trigger btn-icon toggle" data-target="files-aside"><em
                                    class="icon ni ni-menu-alt-r"></em>
                            </a>
                    </ul>
                </div>
                <div class="search-wrap px-2 d-lg-none" data-search="search">
                    <div class="search-content">
                        <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em
                                class="icon ni ni-arrow-left"></em></a>
                        <input type="text" class="form-control border-transparent form-focus-none"
                            placeholder="Search by user or message">
                        <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                    </div>
                </div><!-- .search-wrap -->
            </div>
        </div>
        <div class="nk-fmg-quick-list nk-block">
            <div class="nk-block-head-xs">
                <div class="nk-block-between g-2">
                    <div class="nk-block-head-content">
                        <h6 class="nk-block-title title">Quick Access</h6>
                    </div>
                    <div class="nk-block-head-content">
                        <a href="#" class="link link-primary toggle-opt active" data-target="quick-access">
                            <div class="inactive-text">Show</div>
                            <div class="active-text">Hide</div>
                        </a>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="toggle-expand-content expanded" data-content="quick-access">
                <div class="nk-files nk-files-view-grid">
                    <div class="nk-files-list">
                        <div class="nk-file-item nk-file">
                            <div class="nk-file-info">
                                <a href="#" class="nk-file-link">
                                    <div class="nk-file-title">
                                        <div class="nk-file-icon">
                                            <span class="nk-file-icon-type">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                    <g>
                                                        <rect x="32" y="16" width="28"
                                                            height="15" rx="2.5" ry="2.5"
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
                                        </div>
                                        <div class="nk-file-name">
                                            <div class="nk-file-name-text">
                                                <span class="title">UI Design</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="nk-file-actions hideable">
                                <a href="#" class="btn btn-sm btn-icon btn-trigger"><em
                                        class="icon ni ni-cross"></em></a>
                            </div>
                        </div>
                        <div class="nk-file-item nk-file">
                            <div class="nk-file-info">
                                <a href="#" class="nk-file-link">
                                    <div class="nk-file-title">
                                        <div class="nk-file-icon">
                                            <span class="nk-file-icon-type">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                    <g>
                                                        <rect x="32" y="16" width="28"
                                                            height="15" rx="2.5" ry="2.5"
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
                                        </div>
                                        <div class="nk-file-name">
                                            <div class="nk-file-name-text">
                                                <span class="title">DashLite Resource</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="nk-file-actions hideable">
                                <a href="#" class="btn btn-sm btn-icon btn-trigger"><em
                                        class="icon ni ni-cross"></em></a>
                            </div>
                        </div>
                        <div class="nk-file-item nk-file">
                            <div class="nk-file-info">
                                <a href="#" class="nk-file-link">
                                    <div class="nk-file-title">
                                        <div class="nk-file-icon">
                                            <span class="nk-file-icon-type">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                    <g>
                                                        <rect x="18" y="16" width="36"
                                                            height="40" rx="5" ry="5"
                                                            style="fill:#e3edfc" />
                                                        <path
                                                            d="M19.03,54A4.9835,4.9835,0,0,0,23,56H49a4.9835,4.9835,0,0,0,3.97-2Z"
                                                            style="fill:#c4dbf2" />
                                                        <rect x="32" y="20" width="8"
                                                            height="2" rx="1" ry="1"
                                                            style="fill:#7e95c4" />
                                                        <rect x="32" y="25" width="8"
                                                            height="2" rx="1" ry="1"
                                                            style="fill:#7e95c4" />
                                                        <rect x="32" y="30" width="8"
                                                            height="2" rx="1" ry="1"
                                                            style="fill:#7e95c4" />
                                                        <rect x="32" y="35" width="8"
                                                            height="2" rx="1" ry="1"
                                                            style="fill:#7e95c4" />
                                                        <path
                                                            d="M35,16.0594h2a0,0,0,0,1,0,0V41a1,1,0,0,1-1,1h0a1,1,0,0,1-1-1V16.0594A0,0,0,0,1,35,16.0594Z"
                                                            style="fill:#7e95c4" />
                                                        <path
                                                            d="M38.0024,40H33.9976A1.9976,1.9976,0,0,0,32,41.9976v2.0047A1.9976,1.9976,0,0,0,33.9976,46h4.0047A1.9976,1.9976,0,0,0,40,44.0024V41.9976A1.9976,1.9976,0,0,0,38.0024,40Zm-.0053,4H34V42h4Z"
                                                            style="fill:#7e95c4" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="nk-file-name">
                                            <div class="nk-file-name-text">
                                                <span class="title">All work.zip</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="nk-file-actions hideable">
                                <a href="#" class="btn btn-sm btn-icon btn-trigger"><em
                                        class="icon ni ni-cross"></em></a>
                            </div>
                        </div>
                        <div class="nk-file-item nk-file">
                            <div class="nk-file-info">
                                <a href="#" class="nk-file-link">
                                    <div class="nk-file-title">
                                        <div class="nk-file-icon">
                                            <span class="nk-file-icon-type">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                    <path
                                                        d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z"
                                                        style="fill:#e3edfc" />
                                                    <path
                                                        d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z"
                                                        style="fill:#b7d0ea" />
                                                    <path
                                                        d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z"
                                                        style="fill:#c4dbf2" />
                                                    <path
                                                        d="M42,31H30a3.0033,3.0033,0,0,0-3,3V45a3.0033,3.0033,0,0,0,3,3H42a3.0033,3.0033,0,0,0,3-3V34A3.0033,3.0033,0,0,0,42,31ZM29,38h6v3H29Zm8,0h6v3H37Zm6-4v2H37V33h5A1.001,1.001,0,0,1,43,34ZM30,33h5v3H29V34A1.001,1.001,0,0,1,30,33ZM29,45V43h6v3H30A1.001,1.001,0,0,1,29,45Zm13,1H37V43h6v2A1.001,1.001,0,0,1,42,46Z"
                                                        style="fill:#36c684" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="nk-file-name">
                                            <div class="nk-file-name-text">
                                                <span class="title">Sales Reports.xlsx</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="nk-file-actions hideable">
                                <a href="#" class="btn btn-sm btn-icon btn-trigger"><em
                                        class="icon ni ni-cross"></em></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .nk-files -->
            </div>
        </div>
        <div class="nk-fmg-listing nk-block-lg">
            <div class="nk-block-head-xs">
                <div class="nk-block-between g-2">
                    <div class="nk-block-head-content">
                        <h6 class="nk-block-title title">Browse Files</h6>
                    </div>
                    <div class="nk-block-head-content">
                        <ul class="nk-block-tools g-3 nav">
                            <li><a data-bs-toggle="tab" href="#file-grid-view" class="nk-switch-icon active"><em
                                        class="icon ni ni-view-grid3-wd"></em></a></li>
                            <li><a data-bs-toggle="tab" href="#file-group-view" class="nk-switch-icon"><em
                                        class="icon ni ni-view-group-wd"></em></a></li>
                            <li><a data-bs-toggle="tab" href="#file-list-view" class="nk-switch-icon"><em
                                        class="icon ni ni-view-row-wd"></em></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane active" id="file-grid-view">
                    <div class="nk-files nk-files-view-grid">
                        <div class="nk-files-list">
                            @for ($i = 1; $i <= 12; $i++)
                                <div class="nk-file-item nk-file">
                                    <div class="nk-file-info">
                                        <div class="nk-file-title">
                                            <div class="nk-file-icon">
                                                <a class="nk-file-icon-link" href="#">
                                                    <span class="nk-file-icon-type">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                            <g>
                                                                <rect x="32" y="16" width="28"
                                                                    height="15" rx="2.5" ry="2.5"
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
                                                    <a href="#" class="title">Area {{ $i }}
                                                        <em class="asterisk-off icon ni ni-star-fill"></em>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nk-file-desc">
                                            <li class="date">Total Files</li>
                                            <li class="size">16</li>
                                        </ul>
                                    </div>
                                    <div class="nk-file-actions">
                                        <div class="dropdown">
                                            <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-plain no-bdr">
                                                    <li><a href="#file-details" data-bs-toggle="modal"><em
                                                                class="icon ni ni-eye"></em><span>Details</span></a>
                                                    </li>
                                                    <li><a href="#file-share" data-bs-toggle="modal"><em
                                                                class="icon ni ni-share"></em><span>Share</span></a>
                                                    </li>
                                                    <li><a href="#file-copy" data-bs-toggle="modal"><em
                                                                class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                    <li><a href="#file-move" data-bs-toggle="modal"><em
                                                                class="icon ni ni-forward-arrow"></em><span>Move</span></a>
                                                    </li>
                                                    <li><a href="#" class="file-dl-toast"><em
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
                            @endfor
                        </div>
                    </div><!-- .nk-files -->
                </div><!-- .tab-pane -->
                <div class="tab-pane" id="file-group-view">


                    <div class="nk-files nk-files-view-group">
                        <div class="nk-files-head">
                            <div class="nk-file-item">
                                <div class="nk-file-info">
                                    <div class="dropdown">
                                        <div class="tb-head dropdown-toggle dropdown-indicator-caret"
                                            data-bs-toggle="dropdown">Last Opened</div>
                                    </div>
                                </div>
                                <div class="nk-file-actions">
                                    <div class="dropdown">
                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#file-share" data-bs-toggle="modal"><em
                                                            class="icon ni ni-share"></em><span>Share</span></a>
                                                </li>
                                                <li><a href="#file-copy" data-bs-toggle="modal"><em
                                                            class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                <li><a href="#file-move" data-bs-toggle="modal"><em
                                                            class="icon ni ni-forward-arrow"></em><span>Move</span></a>
                                                </li>
                                                <li><a href="#" class="file-dl-toast"><em
                                                            class="icon ni ni-download"></em><span>Download</span></a>
                                                </li>
                                                <li><a href="#"><em
                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-files-group">
                            <h6 class="title">Folder</h6>
                            <div class="nk-files-list">
                                @for ($i = 1; $i <= 12; $i++)
                                    <div class="nk-file-item nk-file">
                                        <div class="nk-file-info">
                                            <div class="nk-file-title">
                                                <div class="nk-file-icon">
                                                    <span class="nk-file-icon-type">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                            <g>
                                                                <rect x="32" y="16" width="28"
                                                                    height="15" rx="2.5" ry="2.5"
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
                                                </div>
                                                <div class="nk-file-name">
                                                    <div class="nk-file-name-text">
                                                        <a href="#" class="title">UI Design</a>
                                                        <div class="asterisk"><a href="#"><em
                                                                    class="asterisk-off icon ni ni-star"></em><em
                                                                    class="asterisk-on icon ni ni-star-fill"></em></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nk-file-desc">
                                                <li class="date">Today</li>
                                                <li class="size">4.5 MB</li>
                                                <li class="members">3 Members</li>
                                            </ul>
                                        </div>
                                        <div class="nk-file-actions">
                                            <div class="dropdown">
                                                <a href=""
                                                    class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                    data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>

                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>


                </div><!-- .tab-pane -->
                <div class="tab-pane" id="file-list-view">
                    @for ($i = 1; $i <= 12; $i++)
                        <div class="nk-files nk-files-view-list">
                            <div class="nk-files-head">
                                <div class="nk-file-item">
                                    <div class="nk-file-info">
                                        <div class="tb-head dropdown-toggle dropdown-indicator-caret"
                                            data-bs-toggle="dropdown">Name</div>
                                        <div class="dropdown-menu dropdown-menu-xs">
                                            <ul class="link-list-opt no-bdr">
                                                <li class="opt-head"><span>ORDER BY</span></li>
                                                <li><a href="#"><span>Descending</span></a></li>
                                                <li><a href="#"><span>Ascending</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="tb-head"></div>
                                    </div>
                                    <div class="nk-file-meta">
                                        <div class="dropdown">
                                            <div class="tb-head dropdown-toggle dropdown-indicator-down"
                                                data-bs-toggle="dropdown">Last Opened</div>
                                            <div class="dropdown-menu dropdown-menu-xs">
                                                <ul class="link-list-opt ui-colored no-bdr">
                                                    <li class="opt-head"><span>ORDER BY</span></li>
                                                    <li><a class="active" href="#"><span>Descending</span></a>
                                                    </li>
                                                    <li><a href="#"><span>Ascending</span></a></li>
                                                    <li class="divider"></li>
                                                    <li class="opt-head"><span>SHOW</span></li>
                                                    <li><a class="active" href="#"><span>Last Opened</span></a>
                                                    </li>
                                                    <li><a href="#"><span>Name</span></a></li>
                                                    <li><a href="#"><span>Size</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-file-members">
                                        <div class="tb-head">Members</div>
                                    </div>
                                    <div class="nk-file-actions">
                                        <div class="dropdown">
                                            <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .nk-files-head -->
                            <div class="nk-files-list">
                                <div class="nk-file-item nk-file">
                                    <div class="nk-file-info">
                                        <div class="nk-file-title">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="file-check-n1">
                                                <label class="custom-control-label" for="file-check-n1"></label>
                                            </div>
                                            <div class="nk-file-icon">
                                                <span class="nk-file-icon-type">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                        <g>
                                                            <rect x="32" y="16" width="28"
                                                                height="15" rx="2.5" ry="2.5"
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
                                            </div>
                                            <div class="nk-file-name">
                                                <div class="nk-file-name-text">
                                                    <a href="#" class="title">UI/UX Design</a>
                                                    <div class="nk-file-star asterisk"><a href="#"><em
                                                                class="asterisk-off icon ni ni-star"></em><em
                                                                class="asterisk-on icon ni ni-star-fill"></em></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-file-meta">
                                        <div class="tb-lead">Today, 08:29 AM</div>
                                    </div>
                                    <div class="nk-file-members">
                                        <div class="tb-lead">Only Me</div>
                                    </div>
                                    <div class="nk-file-actions">
                                        <div class="dropdown">
                                            <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-plain no-bdr">
                                                    <li><a href="#file-details" data-bs-toggle="modal"><em
                                                                class="icon ni ni-eye"></em><span>Details</span></a>
                                                    </li>
                                                    <li><a href="#file-share" data-bs-toggle="modal"><em
                                                                class="icon ni ni-share"></em><span>Share</span></a>
                                                    </li>
                                                    <li><a href="#file-copy" data-bs-toggle="modal"><em
                                                                class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                    <li><a href="#file-move" data-bs-toggle="modal"><em
                                                                class="icon ni ni-forward-arrow"></em><span>Move</span></a>
                                                    </li>
                                                    <li><a href="#" class="file-dl-toast"><em
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
                            </div>
                        </div>
                    @endfor
                </div><!-- .tab-pane -->
            </div><!-- .tab-content -->
        </div><!-- .nk-block -->
    </div>
</div>
