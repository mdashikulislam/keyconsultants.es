@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="note text-right" style="margin-right: 30px;">
                <button data-toggle="modal" data-target="#add_note" type="button" class="btn btn-success"><i class="fa fa-plus fa-fw"></i>Add Note</button>
            </div>
        </div>
        <div class="col-md-12">
            <div class="timeline">
            @forelse($seekerNotes as $note)
                <!-- timeline time label -->
                    <div class="time-label">
                        <span class="bg-primary">{{\Carbon\Carbon::parse($note->created_at)->isoFormat('Do, MMMM YYYY - h:mm:ss a')}}</span>
                    </div>
                    <div>
                        <i class="fas fa-list bg-secondary"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header">Title : {{$note->title}}</h3>
                            <div class="timeline-body">
                                {!!$note->content  !!}
                            </div>
                            <div class="timeline-footer">
                                <a onclick="deleteNote({{$note->id}})" href="{{route('admin.note.delete',['id'=>$note->id])}}" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_note"  style=" padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('admin.seeker.note.add')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$id}}">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Private Note</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input name="title" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Note</label>
                            <textarea id="note" name="note" rows="5" class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection
@push('js')
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'note', {
        } );
        function deleteNote(id){
            event.preventDefault();
            var url = '{{route('admin.seeker.note.delete',['id'=>':id'])}}';
            url = url.replace(':id',id);
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
                    window.location.href = url;
                }
            })
        }
    </script>
@endpush
