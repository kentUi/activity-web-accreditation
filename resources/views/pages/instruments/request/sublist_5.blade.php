@php
    use App\Models\InstrumentSublist;
@endphp
@php
    $rsy = InstrumentSublist::where('ins_parentid', $id)->get();
@endphp
@foreach ($rsy as $rw)
    <tr>
        <td style="padding-left: 240px">{{ $rw->ins_text }}</td>
        <td>
            <center>
                <div class="dropdown p-0">
                    <a href="javascript:void(0)" class="dropdown-toggle btn btn-icon btn-trigger p-0"
                        data-bs-toggle="dropdown">
                        <em class="icon ni ni-more-h"></em>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <ul class="link-list-opt no-bdr">
                            <li>
                                <a onclick="remove_sub_statement({{ $rw->ins_id }})" href="javascript:void(0)">
                                    <em class="icon ni ni-trash"></em><span>Remove
                                        Statement</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </center>
        </td>
    </tr>
@endforeach