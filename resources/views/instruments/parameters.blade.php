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
                                                            <a class="back-to" href="/instrument/policy/{{ $instruments->ins_id }}">
                                                                <em class="icon ni ni-arrow-left"></em>
                                                                <span>Return</span>
                                                            </a>
                                                        </div>   
                                                        <h4 class="nk-block-title page-title"
                                                            style="text-transform: uppercase;">
                                                            {{ $instruments->ins_text }}
                                                        </h4>
                                                        <div class="nk-block-des text-soft">
                                                            <p>Joint Commission defines Primary Source Verification
                                                                as the "verification of an individual practitioner's
                                                                reported qualifications.</p>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-block-between -->
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <div class="card card-bordered card-preview" style="min-height: 400px">
                                                    <div class="card-inner">
                                                        <h5>{{ $area->ins_text }}</h5>
                                                        <hr>
                                                        <a style="float: right" class="btn btn-light"
                                                            href="#create-parameters" data-bs-toggle="modal">
                                                            <em class="icon ni ni-plus"></em>
                                                            <span>Create Parameters</span>
                                                        </a>
                                                        <table class="datatable-init table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Parameters</th>
                                                                    <th>Date Created</th>
                                                                    <th width="50" class="text-center">
                                                                        Options</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($paramenters as $rw)
                                                                    <tr>
                                                                        <td>
                                                                            <a class="text-dark"
                                                                                href="/instrument/area/{{ $rw->param_id }}"
                                                                                target="_blank">
                                                                                {{ $rw->param_text }}
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
                                                                                                    href="/instrument/statement/{{ $instrument_id }}/{{ $area_id }}/{{ $rw->param_id }}">
                                                                                                    <em
                                                                                                        class="icon ni ni-eye"></em>
                                                                                                    <span> View
                                                                                                        Statements</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a onclick="edit_param({{ $rw->param_id }})"
                                                                                                    href="#create-parameters"
                                                                                                    data-bs-toggle="modal">
                                                                                                    <em
                                                                                                        class="icon ni ni-edit"></em>
                                                                                                    <span>Edit
                                                                                                        Parameter</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <a onclick="remove_param({{ $rw->param_id }})"
                                                                                                href="javascript:void(0)">
                                                                                                <em
                                                                                                    class="icon ni ni-trash"></em><span>Remove
                                                                                                    Parameter</span>
                                                                                            </a>
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

    <div class="modal fade" tabindex="-1" role="dialog" id="create-parameters">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <a href="javascript:void(0)" class="close" data-bs-dismiss="modal"><em
                        class="icon ni ni-cross-sm"></em></a>

                <div class="modal-body modal-body-xs">
                    <h5 id="form_header_parameter">Create Parameters</h5>
                    <hr>
                    <form action="{{ route('save.parameters') }}" method="POST" id="parameter_panel">
                        @csrf
                        <input type="hidden" name="_5GhW2DxRpQsLbZ1" id="__AP7KQe3RTtyZFc90">
                        <input type="hidden" value="{{ $instrument_id }}" name="_8FmX1VnLoHsYzA3"
                            id="_JsR4LbYzN8HwQ1">
                        <input type="hidden" value="{{ $area_id }}" name="_KpT2QrXsYzLmN7" id="_PbW3ZsYqL5RvH9">
                        <label class="form-label">Parameter Name :
                        </label>
                        <input name="inp_parameter" id="inp_parameter" type="text" class="form-control"
                            placeholder="Enter Parameter name here..">
                        <button type="submit" class="btn btn-primary btn-block mt-3" id="form_button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function remove_param(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/api/parameter/remove',
                        type: 'POST',
                        data: {
                            'id': id
                        },
                        success: function(resp) {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            ).then((result) => {
                                window.location.href =
                                    '/instrument/parameter/{{ $instrument_id }}/{{ $area_id }}';
                            });
                        }
                    })
                }
            })
        }
    </script>
    @include('instruments.parameters-script');

    <script src="/assets/js/bundle.js?ver=3.0.3"></script>
    <script src="/assets/js/scripts.js?ver=3.0.3"></script>
    <script src="/assets/js/apps/file-manager.js?ver=3.0.3"></script>

</body>

</html>
