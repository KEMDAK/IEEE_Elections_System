<div class = "container">
@if ($errors->any())
  <ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
      <li style = margin-left:10px;>{{ $error }}</li>
    @endforeach
@endif
</div>
