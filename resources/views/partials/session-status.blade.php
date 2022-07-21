@if (session('status'))
<div class="alert alert-success alert-dismissible fade show w-30 col-12 col-sm-10 col-lg-6 mx-auto align-items-center"
    role="alert">
    <strong>{{ session('status') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
</div>
@endif
