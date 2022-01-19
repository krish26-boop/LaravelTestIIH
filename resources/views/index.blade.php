@extends('layout/master')


@section('body')

<!-- partial -->

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <!-- <div>
						<h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
					</div> -->
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button class="btn btn-primary btn-icon-text mb-2 mb-md-0" id="btn-add">
                <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                Add Users
            </button>

        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block" id="msg">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('info'))
    <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Please check the form below for errors
    </div>
    @endif
    <!-- row -->

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"></h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th scope="row">#</th>
                                    <th scope="row">Name</th>
                                    <th scope="row">Email</th>
                                    <th scope="row">Officer</th>
                                    <th scope="row">Date Of Birth</th>
                                    <th scope="row">Skills</th>
                                </tr>
                            </thead>
                            <tbody id="todos-list" name="todos-list">


                                @foreach($users as $user)
                                <tr id="users{{$user->id}}">
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->officer}}</td>
                                    <td>{{$user->date_of_birth}}</td>
                                    <td>{{$user->skills}}</td>
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

<div class="modal fade" id="formModal" aria-hidden="true" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="formModalLabel">Create User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="myForm" name="myForm" method="POST" novalidate="">

                    <div class="form-group">
                        <label for="exampleInputText1">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText1">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" value="">
                        
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Officer</label>
                        <select class="form-control" name="officer" id="officer">
                            <option selected="" disabled="">Select Officer</option>
                            @foreach($users as $user)
                            <option value="{{$user->name}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText1">Date of Birth</label>
                        <input type="date" name="date_of_birth" class="form-control" id="date_of_birth">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText1">skills</label><br>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" name="skills[]" id="skills" class="form-check-input" value="Management">
                                Management
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" name="skills[]" id="skills" class="form-check-input" value="Communication">
                                Communication
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" name="skills[]" id="skills" class="form-check-input" value="Computer">
                                Computer
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" name="skills[]" id="skills" class="form-check-input" value="Leadership">
                                Leadership
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" name="skills[]" id="skills" class="form-check-input" value="Problem-solving">
                                Problem-solving
                            </label>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes
                </button>
                <input type="hidden" id="todo_id" name="todo_id" value="0">

            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    jQuery(document).ready(function($) {
        jQuery('#btn-add').click(function() {
            jQuery('#btn-save').val("add");
            jQuery('#myForm').trigger("reset");
            jQuery('#formModal').modal('show');
        });

        $("#btn-save").click(function(e) {
            e.preventDefault();
            var insert = [];
            $('.form-check-input').each(function() {
                if ($(this).is(":checked")) {
                    insert.push($(this).val());
                }
            });
            insert = insert.toString();
            var formData = {
                "_token": "{{ csrf_token() }}",
                name: jQuery('#name').val(),
                email: jQuery('#email').val(),
                officer: jQuery("select#officer option").filter(":selected").text(),
                date_of_birth: jQuery('#date_of_birth').val(),
                skills: insert,
            };

            var todo_id = jQuery('#todo_id').val();

            var state = jQuery('#btn-save').val();
            var type = "POST";
            var ajaxurl = '{{route('usermanage.store')}}';
            $(document).find("span.text-danger").remove();
            $.ajax({
                type: type,
                url: ajaxurl,
                data: formData,
                dataType: 'json',
                success:function(data) {
                   
                    var todo = '<tr id="todo' + data.id + '"><td>' + data.name + '</td><td>' + data.email + '</td><td>' + data.officer + '</td><td>' + data.date_of_birth + '</td><td>' + data.skills + '</td>';
                    if (state == "add") {
                        jQuery('#todo-list').append(todo);
                    } else {
                        jQuery("#todo" + todo_id).replaceWith(todo);
                        
                    }
                    
                    jQuery('#myForm').trigger("reset");
                    jQuery('#formModal').modal('hide');
                    // jQuery("#dataTableExample").ajax.reload();
                    // dataTable.ajax.reload();
                    // $('#dataTableExample').DataTable().ajax.reload();
                    alert('Data Inserted Successfully.');
                    window.location.reload();
                   
                },
                error:function(data) {
                    // console.log(data);
                    // console.log(data.responseJSON.errors);
                   
                    $.each(data.responseJSON.errors,function(field_name,error){
                        $(document).find('[name='+field_name+']').after('<span class="text-strong textdanger" style="color:red;">' +error+ '</span>')
                    })
                }
            });
        });
    });
</script>
@endsection