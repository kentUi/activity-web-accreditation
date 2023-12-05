@php
    use App\Models\InstrumentSub;
    use App\Models\InstrumentSublist;
    
    $info = InstrumentSublist::where('ins_id', $id)->first();
@endphp
@if ($info)
    @php $rsx = InstrumentSub::where('ins_text', $info->ins_text)->get(); @endphp
    @foreach ($rsx as $rwx)
        @php
            $rsy = InstrumentSublist::where('ins_parentid', $rwx->ins_id)->get();
        @endphp
        @foreach ($rsy as $rwy)
            <div class="nk-file-item nk-file">
                <div class="nk-file-info">
                    <div class="nk-file-title" style="padding-left: 155px;">

                        <div class="nk-file-icon">
                            @include('pages.instruments.icon-sublist')
                        </div>
                        <div class="nk-file-name">
                            <div class="nk-file-name-text">
                                <a href="javascript:void(0)" class="title">{{ $rwy->ins_text }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-file-meta">
                    <div class="tb-lead">25 Apr, 01:21 AM</div>
                </div>
                <div class="nk-file-actions">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                            data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <ul class="link-list-plain no-bdr">
                                <li>
                                    @php
                                        $info = InstrumentSub::where('ins_text', $rwy->ins_text)->first();
                                    @endphp
                                    <a href="#create-sublist"
                                        onclick="subStatement('{{ $info->ins_id }}', '{{ $rwy->ins_text }}')"
                                        data-bs-toggle="modal">
                                        <em
                                            class="icon ni ni-plus"></em>
                                        <span>New Statement</span>
                                    </a>
                                </li>
                                <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a>
                                </li>
                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @php
                echo view('pages.instruments.request.sublist_2')->with(['id' => $rwy->ins_id]);
            @endphp
        @endforeach
    @endforeach
@endif
