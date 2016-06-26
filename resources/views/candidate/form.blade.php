<!-- first name -->
<div class="form-group">
  <label class="control-label col-sm-2" for="first_name">First Name</label>
  <div class="col-sm-10">
    {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder'=>'Enter first name']) !!}
  </div>
</div>

<!-- last name -->
<div class="form-group">
  <label class="control-label col-sm-2" for="last_name">Last Name</label>
  <div class="col-sm-10">
    {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder'=>'Enter last name']) !!}
  </div>
</div>

<!-- position -->
<div class="form-group">
  <label class="control-label col-sm-2" for="position">Position</label>
  <div class="col-sm-10">
    {!! Form::text('position', null, ['class' => 'form-control', 'placeholder'=>'Enter position']) !!}
  </div>
</div>


<!-- major -->
<div class="form-group">
  <label class="control-label col-sm-2" for="major">Major</label>
  <div class="col-sm-10">
    {!! Form::text('major', null, ['class' => 'form-control', 'placeholder'=>'Enter major']) !!}
  </div>
</div>

<!-- graduation year -->
<div class="form-group">
  <label class="control-label col-sm-2" for="major">Graduation Year</label>
  <div class="col-sm-10">
    {!! Form::selectRange('number', 1995, 2025, null, ['class' => 'form-control']) !!}
  </div>
</div>

<!-- description -->
<div class="form-group">
  <label class="control-label col-sm-2" for="description">Description</label>
  <div class="col-sm-10">
    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows'=>'4', 'placeholder'=>'Enter description']) !!}
  </div>
</div>
