<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
	<label for="{{ $name }}">{{ $label }}</label>
	<div class="input-date form-group input-group">
		<input data-date-format="{{ $pickerFormat }}" data-date-pickdate="true" data-date-picktime="false" data-date-useseconds="{{ $seconds ? 'true' : 'false' }}" class="form-control" name="{{ $name }}" type="text" id="{{ $name }}" value="{{ $value }}" @if(isset($readonly))readonly="{{ $readonly }}"@endif>
		<span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
	</div>
	@include(AdminTemplate::getTemplateViewPath('formitem.errors'))
</div>