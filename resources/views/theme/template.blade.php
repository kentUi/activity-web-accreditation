<!DOCTYPE html>
<html lang="zxx" class="js">

@extends('theme.header')

<body class="nk-body bg-lighter ">
    <div class="nk-app-root">
        <div class="nk-wrap">

            <div class="nk-content p-0">
                <div class="container-fluid p-0">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-fmg" style="min-height: 1000px;">
                                @include('theme.sidemenu')
                                <div class="nk-fmg-body-head d-none d-lg-flex pt-0 pb-0">
                                    <div class="nk-fmg-search">
                                        <em class="icon ni ni-search"></em>
                                        <input type="text" class="form-control border-transparent form-focus-none"
                                            placeholder="Search files, folders">
                                    </div>
                                    <div class="nk-fmg-actions">
                                        <div class="nk-fmg-body-head d-none d-lg-flex pt-0 pb-0">
                                            @include('theme.header-top')
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @extends('theme.footer')
    </div>
    </div>

    <script src="./assets/js/bundle.js?ver=3.0.3"></script>
    <script src="./assets/js/scripts.js?ver=3.0.3"></script>
    <script src="./assets/js/apps/file-manager.js?ver=3.0.3"></script>

</body>

</html>
