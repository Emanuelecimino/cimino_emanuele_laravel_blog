<div>
@if(session()->has('warning')) 
    <div class="alert alert-warning">
        {{ session('warning') }}
    </div>
    @endif
</div>