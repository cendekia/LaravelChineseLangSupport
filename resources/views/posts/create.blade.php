@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-body">
					{!! Form::open(['url' => App::getLocale()]) !!}

						<!-- Title Locale En Form Input -->
						<div class="form-group">
							{!! Form::label('title_locale_en', 'Title (EN) : ') !!}
							{!! Form::text('title_locale_en', null, ['class' => 'form-control']) !!}
						</div>

						<!-- Title Locale Zh Tw Form Input -->
						<div class="form-group">
							{!! Form::label('title_locale_zh_tw', 'Title (中國) : ') !!}
							{!! Form::text('title_locale_zh_tw', null, ['class' => 'form-control']) !!}
						</div>

						<!-- Description Locale En Form Input -->
						<div class="form-group">
							{!! Form::label('description_locale_en', 'Description (EN) : ') !!}
							{!! Form::textarea('description_locale_en', null, ['class' => 'form-control']) !!}
						</div>

						<!-- Description Locale Zh Tw Form Input -->
						<div class="form-group">
							{!! Form::label('description_locale_zh_tw', 'Description (中國) : ') !!}
							{!! Form::textarea('description_locale_zh_tw', null, ['class' => 'form-control']) !!}
						</div>

						<!-- Add New Submit Button -->
						<div class="form-group">
							{!! Form::submit('Add New', ['class' => 'btn btn-primary form-control']) !!}
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
