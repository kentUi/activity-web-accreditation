@php
    use App\Models\InstrumentSublist;
@endphp
<div class="card-inner">
    <h3>{{ $instruments->ins_text }}</h3>
    <p>Joint Commission defines Primary Source Verification
        as the "verification of an individual practitioner's
        reported qualifications.</p>
    <hr>
    <a style="float: right" onclick="parent_statement('SYSTEM INPUT')" class="btn btn-light" href="#create-statement"
        data-bs-toggle="modal">
        <em class="icon ni ni-plus"></em>
        <span>Add Statement</span>
    </a>
    <h4 class="mt-4">SYSTEM INPUT</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Statements</th>
                <th width="50" class="text-center">Options</th>
            </tr>
        </thead>
        <tbody>
            @php
                use App\Models\Statement;
                $statment_system_input = Statement::where('st_instrumentid', $instrument_id)
                    ->where('st_areaid', $area_id)
                    ->where('st_parameterid', $parameter_id)
                    ->where('st_type', 'SYSTEM INPUT')
                    ->orderBy('st_text', 'ASC')
                    ->get();
            @endphp
            @if ($statment_system_input)
                @foreach ($statment_system_input as $rw)
                    <tr>
                        <td>{{ $rw->st_text }}</td>
                        <td>
                            <center>
                                <div class="dropdown p-0">
                                    <a href="javascript:void(0)" class="dropdown-toggle btn btn-icon btn-trigger p-0"
                                        data-bs-toggle="dropdown">
                                        <em class="icon ni ni-more-h"></em>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="link-list-opt no-bdr">
                                            @if ($rw->ins_code == null)
                                                <li>
                                                    <a onclick="add_sub_statement('{{ $rw->st_id }}','{{ $rw->st_statementid }}')"
                                                        href="#create-sub-statement" data-bs-toggle="modal">
                                                        <em class="icon ni ni-plus-circle"></em>
                                                        <span>Add
                                                            Statement</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a onclick="edit_statement('{{ $rw->st_id }}')"
                                                        href="#create-statement" data-bs-toggle="modal">
                                                        <em class="icon ni ni-edit"></em>
                                                        <span>Edit
                                                            Statement</span>
                                                    </a>
                                                </li>

                                                @php
                                                    $rsy = InstrumentSublist::where('ins_parentid', $rw->st_statementid)->count();
                                                @endphp
                                                @if ($rsy <= 0)
                                                    <li>
                                                        <a onclick="remove_statement({{ $rw->st_id }})"
                                                            href="javascript:void(0)">
                                                            <em class="icon ni ni-trash"></em><span>Remove
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
                        echo view('pages.instruments.request.data')->with(['id' => $rw->st_statementid, 'from' => 'instrument']);
                    @endphp
                @endforeach
            @endif
        </tbody>
    </table>
    <hr>
    <a style="float: right" onclick="parent_statement('IMPLEMENTATION')" class="btn btn-light" href="#create-statement"
        data-bs-toggle="modal">
        <em class="icon ni ni-plus"></em>
        <span>Add Statement</span>
    </a>
    <h4 class="mt-4">IMPLEMENTATION</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Statements</th>
                <th width="160" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $statment_system_input = Statement::where('st_instrumentid', $instrument_id)
                    ->where('st_areaid', $area_id)
                    ->where('st_parameterid', $parameter_id)
                    ->where('st_type', 'IMPLEMENTATION')
                    ->orderBy('st_text', 'ASC')
                    ->get();
            @endphp
            @if ($statment_system_input)
                @foreach ($statment_system_input as $rw)
                    <tr>
                        <td>{{ $rw->st_text }}</td>
                        <td>
                            <center>
                                <div class="dropdown p-0">
                                    <a href="javascript:void(0)" class="dropdown-toggle btn btn-icon btn-trigger p-0"
                                        data-bs-toggle="dropdown">
                                        <em class="icon ni ni-more-h"></em>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="link-list-opt no-bdr">
                                            @if ($rw->ins_code == null)
                                                <li>
                                                    <a onclick="add_sub_statement('{{ $rw->st_id }}','{{ $rw->st_statementid }}')"
                                                        href="#create-sub-statement" data-bs-toggle="modal">
                                                        <em class="icon ni ni-plus-circle"></em>
                                                        <span>Add
                                                            Statement</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a onclick="edit_statement('{{ $rw->st_id }}')"
                                                        href="#create-statement" data-bs-toggle="modal">
                                                        <em class="icon ni ni-edit"></em>
                                                        <span>Edit
                                                            Statement</span>
                                                    </a>
                                                </li>

                                                @php
                                                    $rsy = InstrumentSublist::where('ins_parentid', $rw->st_statementid)->count();
                                                @endphp
                                                @if ($rsy <= 0)
                                                    <li>
                                                        <a onclick="remove_statement({{ $rw->st_id }})"
                                                            href="javascript:void(0)">
                                                            <em class="icon ni ni-trash"></em><span>Remove
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
                        echo view('pages.instruments.request.data')->with(['id' => $rw->st_statementid, 'from' => 'instrument']);
                    @endphp
                @endforeach
            @endif
        </tbody>
    </table>
    <hr>
    <a style="float: right" onclick="parent_statement('OUTCOME')" class="btn btn-light" href="#create-statement"
        data-bs-toggle="modal">
        <em class="icon ni ni-plus"></em>
        <span>Add Statement</span>
    </a>
    <h4 class="mt-4">OUTCOME</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Statements</th>
                <th width="160" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $statment_system_input = Statement::where('st_instrumentid', $instrument_id)
                    ->where('st_areaid', $area_id)
                    ->where('st_parameterid', $parameter_id)
                    ->where('st_type', 'OUTCOME')
                    ->orderBy('st_text', 'ASC')
                    ->get();
            @endphp
            @if ($statment_system_input)
                @foreach ($statment_system_input as $rw)
                    <tr>
                        <td>{{ $rw->st_text }}</td>
                        <td>
                            <center>
                                <div class="dropdown p-0">
                                    <a href="javascript:void(0)" class="dropdown-toggle btn btn-icon btn-trigger p-0"
                                        data-bs-toggle="dropdown">
                                        <em class="icon ni ni-more-h"></em>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="link-list-opt no-bdr">
                                            @if ($rw->ins_code == null)
                                                <li>
                                                    <a onclick="add_sub_statement('{{ $rw->st_id }}','{{ $rw->st_statementid }}')"
                                                        href="#create-sub-statement" data-bs-toggle="modal">
                                                        <em class="icon ni ni-plus-circle"></em>
                                                        <span>Add
                                                            Statement</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a onclick="edit_statement('{{ $rw->st_id }}')"
                                                        href="#create-statement" data-bs-toggle="modal">
                                                        <em class="icon ni ni-edit"></em>
                                                        <span>Edit
                                                            Statement</span>
                                                    </a>
                                                </li>

                                                @php
                                                    $rsy = InstrumentSublist::where('ins_parentid', $rw->st_statementid)->count();
                                                @endphp
                                                @if ($rsy <= 0)
                                                    <li>
                                                        <a onclick="remove_statement({{ $rw->st_id }})"
                                                            href="javascript:void(0)">
                                                            <em class="icon ni ni-trash"></em><span>Remove
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
                        echo view('pages.instruments.request.data')->with(['id' => $rw->st_statementid, 'from' => 'instrument']);
                    @endphp
                @endforeach
            @endif
        </tbody>
    </table>
</div>
