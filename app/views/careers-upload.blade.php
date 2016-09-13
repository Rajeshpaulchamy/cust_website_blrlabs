<div class="row">
	<div class="col-lg-12">
		<div id="failure"> </div>

		<h3>Upload your resume</h3>
		{{ Form::open(array('url' => 'careers', 'files'=>true)) }}

			@if ($errors->has('name'))
				<div class="form-group has-error">
			@else
				<div class="form-group">
			@endif
				{{ Form::label('name', 'Your Name(required)',
										array('class' => 'control-label')) }}

				@if ($errors->has('name')) 
					<p class="help-block">({{ $errors->first('name') }})</p>
				@endif

				{{ Form::text('name', '',
							array('class' => 'form-control',
									'value' => Input::old('name') )) }}

			</div>
		
			@if ($errors->has('email'))
				<div class="form-group has-error">
			@else
				<div class="form-group">
			@endif

				{{ Form::label('email', 'Email (required)',
										array('class' => 'control-label')) }}
				@if ($errors->has('email')) 
					<p class="help-block">({{ $errors->first('email') }})</p>
				@endif

				{{ Form::email('email', '',
						array('class' => 'form-control',
									'value' => Input::old('email') )) }}

			</div>
		
			<div class="form-group">

				{{ Form::label('qualification', 'Qualification (required)',
										array('class' => 'control-label')) }}

				{{ Form::select('qualification', 
					[
						'B.Tech' => 'B.Tech (EEE/ECE/CS and IT)',
						'M.Tech' => 'M.Tech (EEE/ECE/CS and IT)',					
						'B.E' => 'B.E (EEE/ECE/CS and IT)',
						'M.E' => 'M.E (EEE/ECE/CS and IT)',
						'B.Sc' => 'B.Sc Computer Science',
						'M.Sc' => 'M.Sc Computer Science'
						
					], '',
					array('class' => 'form-control',
							'value' => Input::old('qualification'))
				) }}

			</div>

				{{ Form::label('resume', 'Upload your resume',
										array('class' => 'control-label')) }}
			@if ($errors->has('resume'))
				<div class="form-group has-error">
			@else
				<div class="form-group">
			@endif
			
			@if ($errors->has('resume'))
				<p class="help-block">(File upload is not correct)</p>
			@endif
			
				{{ Form::file('resume') }}
			</div>

		
			@if ($errors->has('g-recaptcha-response'))
				<div class="form-group has-error">
			@else
				<div class="form-group">
			@endif
				@if ($errors->has('g-recaptcha-response')) 
					<p class="help-block">(Captcha entered is not correct)</p>
				@endif

				{{ Form::captcha() }}
				
			</div>

			<div class="form-group">
	
				{{ Form::submit('Send Resume',
							array('class' => 'btn btn-primary')) }}
			</div>
		
		{{ Form::close() }}

		<div id="success"> </div>

		@if (Session::get('success'))
			<div class="alert alert-dismissible alert-success">
				Your resume is successfully uploaded.
				</br>
				We will revert to you if your profile matches with the requirements.
				</br>
				Thank you for your interest in BLRLABS!!!
			</div>
		@endif

	</div>
</div>