@if(session()->has('message'))
<div class="container">
  <div class="alert alert-success alert-dismissible">
    {{-- <button type="button" class="close" data-dismiss="alert">&times;</button> --}}
    <strong> </strong> {{session()->get('message')}}
  </div>
</div>
@endif
