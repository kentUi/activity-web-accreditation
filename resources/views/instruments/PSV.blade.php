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
                                                    @php
                                                        use App\Models\InstrumentSublist;
                                                    @endphp
                                                    <div class="card-inner">                                                        
                                                        <a style="float: right;"
                                                            onclick="parent_statement('{{$area->ins_text}}')"
                                                            class="btn btn-light" href="#create-statement"
                                                            data-bs-toggle="modal">
                                                            <em class="icon ni ni-plus"></em>
                                                            <span>Add Statement</span>
                                                        </a>
                                                        <h4>{{$area->ins_text}}</h4>
                                                        <hr>

                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Statements</th>
                                                                    <th width="50" class="text-center">Options</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                    use App\Models\InstrumentSub;
                                                                    $statment_system_input = InstrumentSub::where('ins_parentid', $area_id)
                                                                        ->where('ins_level', 0)
                                                                        ->orderBy('ins_text', 'ASC')
                                                                        ->get();
                                                                @endphp
                                                                @if ($statment_system_input)
                                                                    @foreach ($statment_system_input as $rw)
                                                                        <tr>
                                                                            <td>{{ $rw->ins_text }}</td>
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
                                                                                                @if ($rw->ins_code == null)
                                                                                                    <li>
                                                                                                        <a onclick="add_sub_statement('{{ $rw->ins_id }}','{{ $rw->ins_statementid }}')"
                                                                                                            href="#create-sub-statement"
                                                                                                            data-bs-toggle="modal">
                                                                                                            <em
                                                                                                                class="icon ni ni-plus-circle"></em>
                                                                                                            <span>Add
                                                                                                                Statement</span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a onclick="edit_statement('{{ $rw->ins_id }}')"
                                                                                                            href="#create-statement"
                                                                                                            data-bs-toggle="modal">
                                                                                                            <em
                                                                                                                class="icon ni ni-edit"></em>
                                                                                                            <span>Edit
                                                                                                                Statement</span>
                                                                                                        </a>
                                                                                                    </li>

                                                                                                    @php
                                                                                                        $rsy = InstrumentSublist::where('ins_parentid', $rw->ins_statementid)->count();
                                                                                                    @endphp
                                                                                                    @if ($rsy <= 0)
                                                                                                        <li>
                                                                                                            <a onclick="remove_statement({{ $rw->ins_id }})"
                                                                                                                href="javascript:void(0)">
                                                                                                                <em
                                                                                                                    class="icon ni ni-trash"></em><span>Remove
                                                                                                                    Statement</span>
                                                                                                            </a>
                                                                                                        </li>
                                                                                                    @endif
                                                                                                @endif
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </center>
                                                                            </td>
                                                                        </tr>
                                                                        @php
                                                                            echo view('pages.instruments.request.data')->with(['id' => $rw->ins_id, 'from' => 'area']);
                                                                        @endphp
                                                                    @endforeach
                                                                @endif
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

    <div class="modal fade" tabindex="-1" role="dialog" id="create-statement">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <a href="javascript:void(0)" class="close" data-bs-dismiss="modal">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body modal-body-xs">
                    <h5 id="form_header_statement">Create Statement</h5>
                    <hr>
                    <form action="{{ route('save.psv.statement') }}" method="POST" id="statement_panel">
                        @csrf
                        <label class="form-label">Parent Directory :
                        </label>
                        <input name="inp_parent" id="inp_parent" type="text" class="form-control" readonly
                            style="letter-spacing: 1px;" value="{{$area->ins_text}}">
                        <input type="hidden" value="{{ $area_id }}" name="_KpT2QrXsYzLmN7" id="_PbW3ZsYqL5RvH9">
                        <label class="form-label mt-2">Statement Detail :
                        </label>
                        <input name="inp_statement" id="inp_statement" type="text" class="form-control"
                            placeholder="Enter Statement here..">
                        <button type="submit" class="btn btn-primary btn-block mt-3" id="form_button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="create-sub-statement">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <a href="javascript:void(0)" class="close" data-bs-dismiss="modal">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body modal-body-xs">
                    <h5 id="form_header_sub_statement">Add Sub Statement</h5>
                    <hr>
                    <form action="{{ route('save.sub.statement') }}" method="POST" id="sub_statement_panel">
                        @csrf
                        <span id="inp_parent_sub_x">
                            <label class="form-label">Parent Directory :
                            </label>
                            <input name="inp_parent" id="inp_parent_sub" type="text" class="form-control"
                                readonly style="letter-spacing: 1px;">
                        </span>
                        <input type="hidden" name="_5GhW2DxRpQsLbZ1" id="__S7KQe3RTtyZFc90">

                        {{-- <input type="hidden" value="{{ $instrument_id }}" name="_8FmX1VnLoHsYzA3"
                            id="_JsR4LbYzN8HwQ1">
                        <input type="hidden" value="{{ $area_id }}" name="_KpT2QrXsYzLmN7"
                            id="_PbW3ZsYqL5RvH9">
                        <input type="hidden" value="{{ $parameter_id }}" name="_HsU5ZvRtBwMxL8"
                            id="_TzV9YmWxLpHqN4"> --}}

                        <label class="form-label mt-2">Statement Detail :
                        </label>
                        <input name="inp_statement" id="inp_statement_sub" type="text" class="form-control"
                            placeholder="Enter Statement here..">
                        <button type="submit" class="btn btn-primary btn-block mt-3"
                            id="form_button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @php
        $url_statement = route('update.statement');
        $url_sub_statement = route('update.sub.statement');
    @endphp
    @if (isset($_GET['statement-updated']))
        <script>
            Swal.fire(
                'Successfully Updated',
                'The updated statement has been applied!',
                'success'
            ).then(() => {
                window.location.href = '/instrument/statement/{{ $area_id }}';
            })
        </script>
    @endif
    <script>
        function add_sub_statement(id, statementid) {
            $.ajax({
                url: '/api/statement/details',
                type: 'POST',
                data: {
                    'id': id,
                    'statement': statementid
                },
                success: function(resp) {
                    console.log(resp);
                    document.getElementById('inp_parent_sub').value = resp['st_text'];
                    document.getElementById('__S7KQe3RTtyZFc90').value = resp['st_statementid'];
                }
            });
        }

        function add_sub_x2_statement(id) {
            $.ajax({
                url: '/api/statement/sub/details',
                type: 'POST',
                data: {
                    'id': id
                },
                success: function(resp) {
                    console.log(resp);
                    document.getElementById('inp_parent_sub').value = resp['ins_text'];
                    document.getElementById('__S7KQe3RTtyZFc90').value = resp['ins_id'];
                }
            });
        }

        function edit_sub_statement(id) {
            var form = document.getElementById('sub_statement_panel');
            var form_parent = document.getElementById('inp_parent_sub_x');
            var form_header = document.getElementById('form_header_sub_statement');
            var form_id = document.getElementById('__S7KQe3RTtyZFc90');

            var form_area = document.getElementById('inp_statement_sub');

            var url = "{{ $url_sub_statement }}";
            form_id.value = id;
            form_header.innerHTML = 'Update Sub-Statement';
            form.action = url;

            $.ajax({
                url: '/api/statement/sub/details',
                type: 'POST',
                data: {
                    'id': id
                },
                success: function(resp) {
                    console.log(resp);
                    form_parent.style.display = 'none';
                    form_area.value = resp['ins_text'];
                    form_id.value = resp['ins_id'];
                }
            })
        }

        function edit_statement(id) {
            var form = document.getElementById('statement_panel');
            var form_parent = document.getElementById('inp_parent');
            var form_header = document.getElementById('form_header_statement');
            var form_id = document.getElementById('__A7KQe3RTtyZFc90');

            var form_area = document.getElementById('inp_statement');

            var url = "{{ $url_statement }}";
            form_id.value = id;
            form_header.innerHTML = 'Update Statement';
            form.action = url;

            $.ajax({
                url: '/api/statement/details',
                type: 'POST',
                data: {
                    'id': id
                },
                success: function(resp) {
                    console.log(resp);
                    form_parent.value = resp['st_type'];
                    form_area.value = resp['st_text'];
                }
            })
        }

        function remove_statement(id) {
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
                        url: '/api/statement/remove',
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
                                window.location.href = '/instrument/statement/{{ $area_id }}';
                            });
                        }
                    })
                }
            })
        }

        function remove_sub_statement(id) {
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
                        url: '/api/statement/sub/remove',
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
                                    '/instrument/statement/{{ $area_id }}';
                            });
                        }
                    })
                }
            })
        }

        function parent_statement(type) {
            var parent = document.getElementById('inp_parent');
            parent.value = type;
        }
    </script>


    <script src="/assets/js/bundle.js?ver=3.0.3"></script>
    <script src="/assets/js/scripts.js?ver=3.0.3"></script>
    <script src="/assets/js/apps/file-manager.js?ver=3.0.3"></script>

</body>

</html>
