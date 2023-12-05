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
                                                                        <a href="/member/area/">x</a>
                                                                    </li>
                                                                    <li class="breadcrumb-item active">
                                                                        <a href="/"></a>
                                                                    </li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-content">
                                                <div class="tab-pane active" id="file-grid-view">

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <h5>LIST OF PROGRAMS</h5>
                                                                    <hr>
                                                                    <div class="dropdown" style="float: right;">
                                                                        <a href="#" class="btn btn-light" data-bs-toggle="dropdown"><em
                                                                                class="icon ni ni-plus"></em> <span>Create Program</span></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#create-folder" data-bs-toggle="modal"><em class="icon ni ni-folder-plus"></em><span>Create
                                                                                            Program</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <table class="datatable-init table" style="font-size: 13px">
                                                                        <thead>
                                                                            <tr>
                                                                                <th width="50">
                                                                                    <center>#</center>
                                                                                </th>
                                                                                <th>Program name</th>
                                                                                <th>Rating Obtained</th>
                                                                                <th>Current Level</th>
                                                                                <th>Type</th>
                                                                                <th width="120" class="text-center">Action</th>
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
                                                                                        {{ $rw->prog_rating }}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{ $rw->prog_level }}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{ $rw->prog_type }}
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <a href="#" class="btn btn-xs btn-warning">
                                                                                            <span class="ni ni-pen"></span> &nbsp; 
                                                                                        </a>
                                                                                        @if($rw->prog_type == 'For PSV Accreditation')
                                                                                        <a href="/program/application/{{$rw->prog_id}}" class="btn btn-xs btn-primary">
                                                                                             &nbsp;<span class="ni ni-arrow-right"></span> 
                                                                                        </a>
                                                                                        @else
                                                                                        <a href="/program/higher/application/{{$rw->prog_id}}" class="btn btn-xs btn-primary">
                                                                                            &nbsp;<span class="ni ni-arrow-right"></span> 
                                                                                       </a>
                                                                                        @endif
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
                <form action="{{ route('program.save') }}" method="POST">
                    @csrf
                    <div class="modal-body modal-body-md">
                        <div class="nk-upload-form">
                            <label class="form-label">Program Name :
                            </label>
                            <input name="inp_program" type="text"
                                class="form-control"
                                placeholder="Enter Program name here..">

                            <label class="form-label mt-2">Program Type:
                            </label>
                            <select name="inp_type" id=""
                                value="x" class="form-control">
                                <option value="Graduate">Graduate</option>
                                <option value="Undergraduate">Undergraduate
                                </option>
                            </select>

                            <label class="form-label mt-2">Current Level:
                            </label>
                            <select name="inp_level" id=""
                                value="x" class="form-control">
                                <option value="For PSV Accreditation">For
                                    PSV Accreditation</option>
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

                            <label class="form-label mt-2">Rating Obtained:
                            </label>
                            <input name="inp_rating" type="text"
                                class="form-control"
                                placeholder="Enter Program name here..">

                            <label class="form-label mt-2">End of Validity:
                            </label>
                            <input name="inp_validity" type="date"
                                min="{{ date('Y-m-d') }}"
                                class="form-control"
                                placeholder="Enter Program name here..">

                            
                        </div>
                        <div class="nk-modal-action justify-end">
                            <ul class="btn-toolbar g-4 align-center">
                                <li><a href="#" class="link link-primary">Cancel</a></li>
                                <li><button type="submit"
                                    class="btn btn-primary btn-block mt-3">Submit</button></li>
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
                <form method="POST" action="{{ route('file.create') }}" autocomplete="off"
                    enctype="multipart/form-data">
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
