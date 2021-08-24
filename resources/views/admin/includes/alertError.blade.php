@if (Session::has('error'))
    <div class="alert alert-success">
        {{ Session::get('error') }}
    </div>
@endif
