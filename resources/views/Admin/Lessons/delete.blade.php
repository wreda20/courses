<!-- Modal -->
<div class="modal fade" id="delete{{ $lesson->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Files</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.lessons.destroy', 'test') }}" method="post">
                @method('delete')
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{ $lesson->id }}">
                    <h5>Are Sure Of The Deleting Process ? <span style="color: red"> {{$lesson->title}}</span></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
