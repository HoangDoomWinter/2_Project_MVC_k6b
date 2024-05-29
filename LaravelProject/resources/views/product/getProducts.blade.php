@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
</div>
@endif