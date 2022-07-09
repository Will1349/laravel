@if (session('status'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>{{ session('status') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
