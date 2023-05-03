


<div id="DeleteContact{{ $contact->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-top">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="topModalLabel">Delete Contact</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form action="{{ route('contacts.destroy','test') }}" method="post">
        @csrf
        {{ method_field('delete') }}
<div class="modal-body">
<h5>Are you sur to delete this contact ?</h5>
<input type="hidden" name="id"  value="{{ $contact->id }}">
<input class="form-control" name="name" value="{{ $contact->name }}" type="text" readonly>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
<button type="submit" class="btn btn-danger">Delete</button>
</div>
</form>
</div>
</div>
</div>
