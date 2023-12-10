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
                                                        <h3 class="nk-block-title page-title">
                                                            Manage Applications
                                                        </h3>
                                                        <div class="nk-block-des text-soft">
                                                            <p>You can create a application for accreditation.</p>
                                                        </div>
                                                    </div><!-- .nk-block-head-content -->
                                                    <div class="nk-block-head-content">
                                                        <div class="toggle-wrap nk-block-tools-toggle">
                                                            <a href="#"
                                                                class="btn btn-icon btn-trigger toggle-expand me-n1"
                                                                data-target="pageMenu"><em
                                                                    class="icon ni ni-more-v"></em></a>
                                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                                <li>
                                                                    <a href="#create-application" data-bs-toggle="modal"
                                                                        class="btn btn-primary">
                                                                        <em class="icon ni ni-plus"></em>
                                                                        <span>
                                                                            Prepare for Accreditation
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-block-head-content -->
                                                </div><!-- .nk-block-between -->
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-4">
                                                <div class="card card-bordered h-100">
                                                    <div class="card-inner-group">
                                                        <div class="card-inner">
                                                            <div class="nk-wg-action">
                                                                <div class="nk-wg-action-content">
                                                                    <em class="icon ni ni-cc-alt"></em>
                                                                    <div class="title">PLAN ACCREDITATION
                                                                    </div>
                                                                    <p>We have still <strong>0 Accreditation</strong>,
                                                                        thats need to review.</p>
                                                                </div>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-trigger me-n2"><em
                                                                        class="icon ni ni-forward-ios"></em></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card card-bordered h-100">
                                                    <div class="card-inner-group">
                                                        <div class="card-inner">
                                                            <div class="nk-wg-action">
                                                                <div class="nk-wg-action-content">
                                                                    <em class="icon ni ni-inbox"></em>
                                                                    <div class="title">ON-GOING ACCREDITATION
                                                                    </div>
                                                                    <p>We have still <strong>0 Accreditation</strong>,
                                                                        and the process is ongoing..</p>
                                                                </div>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-trigger me-n2"><em
                                                                        class="icon ni ni-forward-ios"></em></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card card-bordered h-100">
                                                    <div class="card-inner-group">
                                                        <div class="card-inner">
                                                            <div class="nk-wg-action">
                                                                <div class="nk-wg-action-content">
                                                                    <em class="icon ni ni-history"></em>
                                                                    <div class="title">ACCREDITATION HISTORY
                                                                    </div>
                                                                    <p>We have total of <strong>0
                                                                            Accreditation</strong>,
                                                                        in our history.</p>
                                                                </div>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-trigger me-n2"><em
                                                                        class="icon ni ni-forward-ios"></em></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-gs mt-1">
                                            <div class="col-md-12">
                                                <div class="card card-bordered card-preview" style="min-height: 400px">
                                                    <div class="card-inner">
                                                        <p style="text-transform:capitalize">
                                                            UNIVERSITY OF SCIENCE AND TECHNOLOGY OF SOUTHERN PHILIPPINES
                                                            - JASAAN CAMPUS
                                                        </p>
                                                        <hr>
                                                        <table class="datatable-init table">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <center>#</center>
                                                                    </th>
                                                                    <th>Instruments</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

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

    <div class="modal fade" tabindex="-1" role="dialog" id="create-application">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>

                <div class="modal-body modal-body-xs mt-4">
                    <table class="datatable-init table" style="font-size: 13px">
                        <thead>
                            <tr>
                                <th width="50">
                                    <center>#</center>
                                </th>
                                <th>Program name</th>
                                <th>Current Level</th>
                                <th width="50" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $num = 1;
                            @endphp
                            @foreach ($response as $rw)
                                <tr>
                                    <td>
                                        {{ $num++ }}
                                    </td>
                                    <td>
                                        {{ $rw->prog_program }}
                                    </td>
                                    <td>
                                        {{ $rw->prog_level }}
                                    </td>
                                    <td class="text-center">
                                        <a href="#assign-application" data-bs-toggle="modal"
                                            class="btn btn-xs btn-primary">
                                            &nbsp;<span class="ni ni-arrow-right"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="assign-application">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-xs mt-2">
                    <h5>Create Application</h5>
                    <hr>
                    <form action="{{ route('program.save') }}" method="POST">
                        @csrf

                        <label class="form-label">Program Name :
                        </label>
                        <input name="inp_program" type="text" class="form-control"
                            placeholder="Enter Program name here..">

                        <label class="form-label mt-2">Level Applied For:
                        </label>
                        <select name="inp_level" id="" value="x" class="form-control">
                            <option value="For PSV Accreditation">For
                                PSV Accreditation</option>
                            <option value="Candidate">Candidate</option>
                            <option value="Level I">Level I</option>
                            <option value="Level II">Level II</option>
                            <option value="Level III">Level III</option>
                            <option value="Level III, Phase 1">Level
                                III, Phase 1</option>
                            <option value="Level III, Phase 2">Level
                                III, Phase 2</option>
                            <option value="Level IV">Level IV</option>
                            <option value="Level IV, Phase 1">Level IV,
                                Phase 1</option>
                            <option value="Level IV, Phase 2">Level IV,
                                Phase 2</option>
                        </select>
                        <label class="form-label mt-2">Preferred Start Date:
                        </label>
                        <input name="inp_validity" type="date" min="{{ date('Y-m-d') }}" class="form-control"
                            placeholder="Enter Program name here..">

                        <label class="form-label mt-2">Preferred End Date:
                        </label>
                        <input name="inp_validity" type="date" min="{{ date('Y-m-d') }}" class="form-control"
                            placeholder="Enter Program name here..">

                        <button type="submit" class="btn btn-primary btn-block mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/js/bundle.js?ver=3.0.3"></script>
    <script src="/assets/js/scripts.js?ver=3.0.3"></script>
    <script src="/assets/js/apps/file-manager.js?ver=3.0.3"></script>

</body>

</html>
