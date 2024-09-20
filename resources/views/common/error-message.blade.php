
@if($errors->any())
<div class="alert alert-danger" role="alert">
    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
        <span aria-hidden="true">&times;</span>
    </button>
    {!! session('flash_error') !!}
    {!! session('flash_message_error') !!} 
    @php Session::forget('flash_error')  @endphp
</div>
@endif
@if(Session::has('flash_message_success'))
<div class="alert alert-success" role="alert">
    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
        <span aria-hidden="true">&times;</span>
    </button>
    {!! session('flash_message_success') !!}
    @php Session::forget('flash_message_success') @endphp
</div>
@endif