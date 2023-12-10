

<div class="modal fade" tabindex="-1" role="dialog" id="create-area">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <a href="javascript:void(0)" class="close" data-bs-dismiss="modal"><em
                    class="icon ni ni-cross-sm"></em></a>

            <div class="modal-body modal-body-xs">
                <h5 id="form_header_area">Create Additional Area</h5>
                <hr>
                <form action="{{ route('save.area') }}" method="POST" id="area_panel">
                    @csrf
                    <input type="hidden" name="_5GhW2DxRpQsLbZ1" id="__A7KQe3RTtyZFc90">
                    <label class="form-label">Area Name :
                    </label>
                    <input name="inp_area" id="inp_area" type="text" class="form-control"
                        placeholder="Enter Area name here..">
                    <button type="submit" class="btn btn-primary btn-block mt-3" id="form_button">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="create-instruments">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <a href="javascript:void(0)" class="close" data-bs-dismiss="modal"><em
                    class="icon ni ni-cross-sm"></em></a>

            <div class="modal-body modal-body-xs">
                <h5 id="form_header">Create Instruments</h5>
                <hr>
                <form action="{{ route('save.instrument') }}" method="POST" id="instrument_panel">
                    @csrf
                    <input type="hidden" name="_5GhW2DxRpQsLbZ1" id="__7KQe3RTtyZFc90">
                    <label class="form-label">Intended Program :
                    </label>
                    <input name="inp_program" id="inp_program" type="text" class="form-control"
                        placeholder="Enter Intended Program name here..">

                    <label class="form-label mt-2">Type of Instrument :
                    </label>
                    <input name="inp_type" id="inp_type" type="text" class="form-control"
                        placeholder="Enter Type of Instrument name here.." value="OBE Instruments">

                    <button type="submit" class="btn btn-primary btn-block mt-3" id="form_button">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@if (isset($_GET['area-success']))
    <script>
        Swal.fire(
            'New Area',
            'A new Area has been added!',
            'success'
        ).then(() => {
            window.location.href = 'instruments';
        })
    </script>
@endif

@if (isset($_GET['param-success']))
    <script>
        Swal.fire(
            'New Parameters',
            'A new parameters has been added!',
            'success'
        ).then(() => {
            window.location.href = '/instrument/parameter/{{$instrument_id}}/{{$area_id}}';
        })
    </script>
@endif
@if (isset($_GET['param-updated']))
    <script>
        Swal.fire(
            'Successfully Updated',
            'The updated parameters has been applied!',
            'success'
        ).then(() => {
            window.location.href = '/instrument/parameter/{{$instrument_id}}/{{$area_id}}';
        })
    </script>
@endif

@if (isset($_GET['area-updated']))
    <script>
        Swal.fire(
            'Successfully Updated',
            'The updated area has been applied!',
            'success'
        ).then(() => {
            window.location.href = 'instruments';
        })
    </script>
@endif



@if (isset($_GET['ss']))
    <script>
        Swal.fire(
            'New Instruments',
            'A new instrument has been added!',
            'success'
        ).then(() => {
            window.location.href = 'instruments?s';
        })
    </script>
@endif

@if (isset($_GET['u']))
    <script>
        Swal.fire(
            'Successfully Updated',
            'The updated instrument has been applied!',
            'success'
        ).then(() => {
            window.location.href = 'instruments?s';
        })
    </script>
@endif

@php
    $url_param = route('update.parameter');
    $url_instrument = route('update.instrument');
    $url_area = route('update.area');
@endphp

<script>
    function remove(id) {
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
                    url: '/api/instrument/remove',
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
                            window.location.href = 'instruments?s';
                        });
                    }
                })
            }
        })
    }

    function remove_area(id) {
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
                    url: '/api/area/remove',
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
                            window.location.href = 'instruments';
                        });
                    }
                })
            }
        })
    }

    function edit(id) {
        var form = document.getElementById('instrument_panel');
        var form_header = document.getElementById('form_header');
        var form_id = document.getElementById('__7KQe3RTtyZFc90');

        var form_program = document.getElementById('inp_program');
        var form_type = document.getElementById('inp_type');

        var url = "{{ $url_instrument }}";
        form_id.value = id;
        form_header.innerHTML = 'Update Instruments';
        form.action = url;

        $.ajax({
            url: '/api/instrument/details',
            type: 'POST',
            data: {
                'id': id
            },
            success: function(resp) {
                form_program.value = resp['ins_text'];
                form_type.value = resp['ins_type'];
            }
        })
    }

    function edit_area(id) {
        var form = document.getElementById('area_panel');
        var form_header = document.getElementById('form_header_area');
        var form_id = document.getElementById('__A7KQe3RTtyZFc90');

        var form_area = document.getElementById('inp_area');

        var url = "{{ $url_area }}";
        form_id.value = id;
        form_header.innerHTML = 'Update Area';
        form.action = url;

        $.ajax({
            url: '/api/area/details',
            type: 'POST',
            data: {
                'id': id
            },
            success: function(resp) {
                form_area.value = resp['ins_text'];
            }
        })
    }

    function edit_param(id) {
        var form = document.getElementById('parameter_panel');
        var form_header = document.getElementById('form_header_parameter');
        var form_id = document.getElementById('__AP7KQe3RTtyZFc90');

        var form_area = document.getElementById('inp_parameter');

        var url = "{{ $url_param }}";
        form_id.value = id;
        form_header.innerHTML = 'Update Parameter';
        form.action = url;

        $.ajax({
            url: '/api/parameter/details',
            type: 'POST',
            data: {
                'id': id
            },
            success: function(resp) {
                form_area.value = resp['param_text'];
            }
        })
    }
</script>
