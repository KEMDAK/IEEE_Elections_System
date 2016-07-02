<!-- personal email -->
<div class="form-group">
    <label class="control-label col-sm-2" for="personal_email">Email*</label>
    <div class="col-sm-10">
        {!! Form::text('personal_email', null, ['class' => 'form-control', 'placeholder'=>'This will be used for login (gmail is prefered)']) !!}
    </div>
</div>

<!-- IEEE membership ID -->
<div class="form-group">
    <label class="control-label col-sm-2" for="ieee_membership_id">IEEE membership ID*</label>
    <div class="col-sm-10">
        {!! Form::text('ieee_membership_id', null, ['class' => 'form-control', 'placeholder'=>'Enter your IEEE membership number']) !!}
    </div>
</div>

<!-- GUC ID -->
<div class="form-group">
    <label class="control-label col-sm-2" for="guc_id">GUC ID*</label>
    <div class="col-sm-10">
        {!! Form::text('guc_id', null, ['class' => 'form-control', 'placeholder'=>'Enter your GUC ID']) !!}
    </div>
</div>

<!-- first name -->
<div class="form-group">
  <label class="control-label col-sm-2" for="first_name">First Name*</label>
  <div class="col-sm-10">
    {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder'=>'Enter first name']) !!}
  </div>
</div>

<!-- last name -->
<div class="form-group">
  <label class="control-label col-sm-2" for="last_name">Last Name*</label>
  <div class="col-sm-10">
    {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder'=>'Enter last name']) !!}
  </div>
</div>


<!-- major -->
<div class="form-group">
    <label class="control-label col-sm-2" for="major">Major*</label>
    <div class="col-sm-10">
        {!! Form::text('major', null, ['class' => 'form-control', 'placeholder'=>'Enter major']) !!}
    </div>
</div>

<!-- guc email -->
<div class="form-group">
  <label class="control-label col-sm-2" for="guc_email">GUC Email*</label>
  <div class="col-sm-10">
    {!! Form::text('guc_email', null, ['class' => 'form-control', 'placeholder'=>'Enter your GUC E-mail']) !!}
  </div>
</div>

<!-- moblie number -->
<div class="form-group">
  <label class="control-label col-sm-2" for="mobile_number">Moblie number*</label>
  <div class="col-sm-10">
    {!! Form::number('mobile_number', null, ['class' => 'form-control', 'placeholder'=>'Enter your number']) !!}
  </div>
</div>

<!-- position -->
<div class="form-group">
  <label class="control-label col-sm-2" for="position">Position*</label>
  <div class="col-sm-10">
    <select class="form-control" name="position">
        <option value="President">President</option>
        <option value="Vice President">Vice President</option>
        <option value="Treassurer">Treassurer</option>
        <option value="Secretary">Secretary</option>
    </select>
  </div>
</div>

<!-- image url -->
<div class="form-group">
  <label class="control-label col-sm-2" for="image_url">Image URL</label>
  <div class="col-sm-10">
    {!! Form::text('image_url', null, ['class' => 'form-control', 'placeholder'=>'Enter image URL (optional you can add it later)']) !!}
  </div>
</div>

<!-- plan url -->
<div class="form-group">
  <label class="control-label col-sm-2" for="plan_url">Plan URL</label>
  <div class="col-sm-10">
    {!! Form::text('plan_url', null, ['class' => 'form-control', 'placeholder'=>'Enter plan URL (optional you can add it later)']) !!}
  </div>
</div>

<!-- video url -->
<div class="form-group">
  <label class="control-label col-sm-2" for="video_url">Video URL</label>
  <div class="col-sm-10">
    {!! Form::text('video_url', null, ['class' => 'form-control', 'placeholder'=>'Enter video URL (optional you can add it later)']) !!}
  </div>
</div>
