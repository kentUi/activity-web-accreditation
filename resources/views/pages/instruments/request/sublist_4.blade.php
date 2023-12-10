@php
    use App\Models\InstrumentSublist;
@endphp
@php
    $rsy = InstrumentSublist::where('ins_parentid', $id)->get();
@endphp
@foreach ($rsy as $rw)
    <tr>
        <td style="padding-left: 200px">{{ $rw->ins_text }}</td>
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
                                    <a onclick="add_sub_x2_statement('{{ $rw->ins_id }}')" href="#create-sub-statement"
                                        data-bs-toggle="modal">
                                        <em class="icon ni ni-plus-circle"></em>
                                        <span>Add
                                            Statement</span>
                                    </a>
                                </li>
                                <li>
                                    <a onclick="edit_sub_statement({{ $rw->ins_id }})" href="#create-sub-statement"
                                        data-bs-toggle="modal">
                                        <em class="icon ni ni-edit"></em>
                                        <span>Edit
                                            Statement</span>
                                    </a>
                                </li>
                                @php
                                    $rsy = InstrumentSublist::where('ins_parentid', $rw->ins_id)->count();
                                @endphp
                                @if ($rsy <= 0)
                                    <li>
                                        <a onclick="remove_sub_statement({{ $rw->ins_id }})" href="javascript:void(0)">
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
        echo view('pages.instruments.request.sublist_5')->with(['id' => $rw->ins_id]);
    @endphp
@endforeach