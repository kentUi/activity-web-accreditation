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
                                                            <h5 class="" style="text-transform: capitalize">
                                                                UNIVERSITY OF SCIENCE AND TECHNOLOGY OF
                                                                SOUTHERN
                                                                PHILIPPINES</h5>
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
                                                                    <h5>{{ $area[0]->ins_text }}</h5>
                                                                    <hr>
                                                                    <div class="dropdown" style="float: right;">
                                                                        <a href="#" class="btn btn-light"
                                                                            data-bs-toggle="dropdown"><em
                                                                                class="icon ni ni-plus"></em>
                                                                            <span>Attach Documents</span></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                @if ($info->prog_level != 'For PSV Accreditation')
                                                                                <li>
                                                                                    <a href="#create-sublist"
                                                                                        onclick="subStatement('{{ $area[0]->ins_id }}', '{{ $area[0]->ins_text }}')"
                                                                                        data-bs-toggle="modal">
                                                                                        <em
                                                                                            class="icon ni ni-plus-circle"></em>
                                                                                        <span>Create Statement</span>
                                                                                    </a>
                                                                                </li>
                                                                                @endif
                                                                                <li>
                                                                                    <a href="#file-upload"
                                                                                        data-bs-toggle="modal">
                                                                                        <em
                                                                                            class="icon ni ni-upload-cloud"></em>
                                                                                        <span>Upload File</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <table class="datatable-init table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th width="50">
                                                                                    <center>#</center>
                                                                                </th>
                                                                                <th>Instrument / Attachment</th>
                                                                                <th width="110" class="text-center">
                                                                                    Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @php
                                                                                use App\Models\InstrumentSub;
                                                                                use App\Models\InstrumentSublist;
                                                                                use Illuminate\Support\Facades\Storage;
                                                                                $num = 1;
                                                                            @endphp
                                                                            @foreach ($folders as $rw)
                                                                                @php
                                                                                    $rsx = InstrumentSub::where('ins_text', $rw->ins_text)->first();
                                                                                @endphp
                                                                                <tr>
                                                                                    <td>
                                                                                        {{ $num++ }}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{ $rw->ins_text }}
                                                                                    </td>
                                                                                    @if ($info->prog_level != 'For PSV Accreditation')
                                                                                    <td class="text-center">
                                                                                        <a href="/program/higher/folder/{{ $rw->ins_id }}"
                                                                                            class="btn btn-xs btn-primary">
                                                                                            Proceed
                                                                                            &nbsp; <span
                                                                                                class="ni ni-arrow-right"></span>
                                                                                        </a>
                                                                                    </td>
                                                                                    @else
                                                                                    <td class="text-center">
                                                                                        <a href="/program/folder/{{ $rw->ins_id }}"
                                                                                            class="btn btn-xs btn-primary">
                                                                                            Proceed
                                                                                            &nbsp; <span
                                                                                                class="ni ni-arrow-right"></span>
                                                                                        </a>
                                                                                    </td>
                                                                                    @endif
                                                                                </tr>
                                                                            @endforeach
                                                                            @foreach ($files as $xrw)
                                                                                <tr>
                                                                                    <td>
                                                                                        {{ $num++ }}
                                                                                    </td>
                                                                                    <td>
                                                                                        <a target="_blank"
                                                                                            href="{{ Storage::url($xrw->file_directory) }}">
                                                                                            {{ $xrw->file_name }}
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <a target="_blank"
                                                                                            href="{{ Storage::url($xrw->file_directory) }}"
                                                                                            class="btn btn-xs btn-info">
                                                                                            Preview
                                                                                            &nbsp; <span
                                                                                                class="ni ni-eye"></span>
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

    <div class="modal fade" tabindex="-1" role="dialog" id="file-upload">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <form method="POST" action="{{ route('file.create') }}" autocomplete="off"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body modal-body-md">
                        <div class="form-group">
                            <label class="form-label" for="customFileLabel">File Upload</label>
                            <div class="form-control-wrap">
                                <div class="form-file">
                                    <input type="file" name="inp_files" class="form-file-input" id="customFile"
                                        accept=".pdf">
                                    <label class="form-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="nk-modal-action justify-end">
                            <ul class="btn-toolbar g-4 align-center">
                                <li><a href="#" data-bs-dismiss="modal" class="link link-primary">Cancel</a></li>
                                <li><button type="submit" class="btn btn-primary">Add Files</button></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="create-sublist">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <form method="POST" action="{{ route('prog.instrument.create-sub') }}" autocomplete="off">
                    @csrf
                    <div class="modal-body modal-body-md">
                        <div class="nk-upload-form">
                            <h5 class="title mb-3">Create Sub-Statement</h5>
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-left">
                                        <em class="icon ni ni-file"></em>
                                    </div>
                                    <input type="text" readonly id="inp_substatement" class="form-control"
                                        placeholder="Enter sub-statement here..">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="hidden" id="__t4y5iwqPlzQ" name="__5ARqZT879i">
                                    <div class="form-icon form-icon-left">
                                        <em class="icon ni ni-pen"></em>
                                    </div>
                                    <input type="text" name="inp_statement" class="form-control" id="default-03"
                                        placeholder="Enter sub-statement here..">
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="nk-modal-action justify-end">
                            <ul class="btn-toolbar g-4 align-center">
                                <li><a href="#" data-bs-dismiss="modal"
                                        class="link link-primary">Cancel</a>
                                </li>
                                <li><button type="submit" class="btn btn-primary">Create</button></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function subStatement(id, statement) {
            document.getElementById('__t4y5iwqPlzQ').value = id;
            document.getElementById('inp_substatement').value = statement;
        }
    </script>

    <script src="/assets/js/bundle.js?ver=3.0.3"></script>
    <script src="/assets/js/scripts.js?ver=3.0.3"></script>
    <script src="/assets/js/apps/file-manager.js?ver=3.0.3"></script>

</body>

</html>
