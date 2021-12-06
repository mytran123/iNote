<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div class="contain mt-2">
    <div class="row">
        <div class="col-md-12 card-header text-center font-weight-bold">
            <h2>Note List</h2>
        </div>
        <div class="col-md-12 mt-1 mb-2">
            <button type="button" id="addNewNote" class="btn btn-success">Add</button>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($notes as $key=>$note)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$note->image}}</td>
                        <td>{{$note->name}}</td>
                        <td>{{$note->category}}</td>
                        <td>{{$note->description}}</td>
                        <td>
                            <a href="javascript:void(0)" class="btn btn-primary edit" data-id="{{$note->id}}">Edit</a>
                            <a href="javascript:void(0)" class="btn btn-primary delete"
                               data-id="{{$note->id}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $notes->links() !!}
        </div>
    </div>
</div>
<!-- boostrap model -->
<div class="modal fade" id="ajax-note-model" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ajaxNoteModel"></h4>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" id="addEditNoteForm" name="addEditNoteForm" class="form-horizontal"
                      method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Note Name"
                                   value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">

                        <label for="name" class="col-sm-2 control-label">Category</label>

                        <div class="col-sm-12">
                            <select name="category" id="category" required="required">
                                <option value="">Option</option>
                                <option value="Word">Word</option>
                                <option value="Learn">Learn</option>
                                <option value="Family">Family</option>
                                <option value="Friend">Friend</option>
                            </select>
{{--                            <input type="text" class="form-control" id="category" name="category"--}}
{{--                                   placeholder="Enter Category" value="" maxlength="50" required="">--}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="description" name="description"
                                   placeholder="Enter Description" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Image</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="image" name="image" placeholder="Enter Image"
                                   value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="btn-save" value="addNewNote">Save changes
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!-- end bootstrap model -->
<script type="text/javascript">
    $(document).ready(function ($) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#addNewNote').click(function () {
            $('#addEditNoteForm').trigger("reset");
            $('#ajaxNoteModel').html("Add Note");
            $('#ajax-note-model').modal('show');
        });
        $('body').on('click', '.edit', function () {
            var id = $(this).data('id');
            //ajax
            $.ajax({
                type: "POST",
                url: "{{ url('edit-note') }}",
                data: {id: id},
                dataType: 'json',
                success: function (res) {
                    $('#ajaxNoteModel').html("Edit Note");
                    $('#ajax-note-model').modal('show');
                    $('#id').val(res.id);
                    $('#name').val(res.name);
                    $('#description').val(res.description);
                    $('#category').val(res.category);
                    $('#image').val(res.image);
                }
            });
        });
        $('body').on('click', '.delete', function () {
            if (confirm("Delete Record?") == true) {
                var id = $(this).data('id');
                //ajax
                $.ajax({
                    type: "POST",
                    url: "{{url('delete-note')}}",
                    data: {id: id},
                    dataType: 'json',
                    success: function (res) {
                        window.location.reload();
                    }
                });
            }
        });
        $('body').on('click', '#btn-save', function (event) {
            var id = $("#id").val();
            var name = $("#name").val();
            var description = $("#description").val();
            var category = $("#category").val();
            var image = $("#image").val();
            $("#btn-save").html('Please Wait...');
            $("#btn-save").attr("disabled", true);
            //ajax
            $.ajax({
                type: "POST",
                url: "{{url('add-update-note')}}",
                data: {
                    id: id,
                    name: name,
                    description: description,
                    category: category,
                    image: image,
                },
                dataType: 'json',
                success: function (res) {
                    window.location.reload();
                    $("#btn-save").html('Submit');
                    $("#btn-save").attr('disabled', false);
                }
            });
        });
    });
</script>
