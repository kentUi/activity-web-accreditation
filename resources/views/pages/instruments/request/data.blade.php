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
                    <div class="nk-file-title" style="padding-left: 105px;">
                        @if($from == 'area')
                        <div class="nk-file-icon">
                            <span class="nk-file-icon-type">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 72 72">
                                    <g>
                                        <rect x="32"
                                            y="16"
                                            width="28"
                                            height="15"
                                            rx="2.5"
                                            ry="2.5"
                                            style="fill:#f29611">
                                        </rect>
                                        <path
                                            d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z"
                                            style="fill:#ffb32c">
                                        </path>
                                        <path
                                            d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z"
                                            style="fill:#f2a222">
                                        </path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                            
                        @else
                       
                        <div class="nk-file-icon">
                            @include('pages.instruments.icon-paper')
                        </div>
                        @endif
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
                echo view('pages.instruments.request.sublist_1')->with(['id' => $rwy->ins_id]);
            @endphp
        @endforeach
    @endforeach
@endif
