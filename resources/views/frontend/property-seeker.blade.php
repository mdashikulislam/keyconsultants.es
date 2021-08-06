
<!-- Modal -->
<div class="modal fade" id="property_seeker" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Property Seeker</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('property.seeker')}}" method="POST">
                @csrf
                <div class="modal-body">
                        <input type="hidden" name="mod_ref_number">
                        <input type="hidden" name="mod_province">
                        <input type="hidden" name="mod_district">
                        <input type="hidden" name="mod_city">
                        <input type="hidden" name="mod_type">
                        <input type="hidden" name="mod_min_price">
                        <input type="hidden" name="mod_max_price">
                        <input type="hidden" name="mod_min_bedroom">
                        <input type="hidden" name="mod_max_bedroom">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
