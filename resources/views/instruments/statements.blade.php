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
                                                        <div class="nk-block-head-sub">
                                                            <a class="back-to"
                                                                href="/instrument/parameter/{{ $instrument_id }}/{{ $area_id }}">
                                                                <em class="icon ni ni-arrow-left"></em>
                                                                <span>Return</span>
                                                            </a>
                                                        </div>
                                                        <h3 class="nk-block-title page-title"
                                                            style="letter-spacing: 1px">
                                                            STATEMENTS
                                                        </h3>
                                                        <div class="nk-block-des text-soft">
                                                            <p>You can create or view an instruments for accreditation.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <div class="card card-bordered card-preview" style="min-height: 400px">
                                                    @include('instruments.statement-inner')
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

    @include('instruments.statement-script');

    <script src="/assets/js/bundle.js?ver=3.0.3"></script>
    <script src="/assets/js/scripts.js?ver=3.0.3"></script>
    <script src="/assets/js/apps/file-manager.js?ver=3.0.3"></script>

</body>

</html>
