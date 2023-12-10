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
                                                            <a class="back-to" href="/instruments">
                                                                <em class="icon ni ni-arrow-left"></em>
                                                                <span>Return</span>
                                                            </a>
                                                        </div>   
                                                        <h3 class="nk-block-title page-title" style="letter-spacing: 1px">
                                                          INSTRUMENT POLICY
                                                        </h3>
                                                        <div class="nk-block-des text-soft">
                                                            <p>You can create or view an instruments for accreditation.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-block-between -->
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <div class="card card-bordered card-preview" style="min-height: 400px">
                                                    <div class="card-inner">
                                                        <h3>{{$instruments->ins_text}}</h3>
                                                        <p>Joint Commission defines Primary Source Verification
                                                            as the "verification of an individual practitioner's
                                                            reported qualifications.</p>
                                                        <hr>
                                                        <table class="datatable-init table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Instruments</th>
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
                                                                                                    href="/instrument/parameter/{{$policy_id}}/{{$rw->ins_id}}">
                                                                                                    <em
                                                                                                        class="icon ni ni-eye"></em>
                                                                                                    <span> View
                                                                                                        Parametres</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            @if ($rw->ins_code == null)
                                                                                                <li>
                                                                                                    <a onclick="edit_area({{ $rw->ins_id }})"
                                                                                                        href="#create-area"
                                                                                                        data-bs-toggle="modal">
                                                                                                        <em
                                                                                                            class="icon ni ni-edit"></em>
                                                                                                        <span>Edit
                                                                                                            Instruments</span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <a onclick="remove_area({{ $rw->ins_id }})"
                                                                                                    href="javascript:void(0)">
                                                                                                    <em
                                                                                                        class="icon ni ni-trash"></em><span>Remove
                                                                                                        Instrument</span>
                                                                                                </a>
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

    <script src="/assets/js/bundle.js?ver=3.0.3"></script>
    <script src="/assets/js/scripts.js?ver=3.0.3"></script>
    <script src="/assets/js/apps/file-manager.js?ver=3.0.3"></script>

</body>

</html>
