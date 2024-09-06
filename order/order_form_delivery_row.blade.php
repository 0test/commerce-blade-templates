<div class="mb-1">
	<div class="custom-control custom-radio">
		<input class="custom-control-input" autocomplete="off" type="radio" name="delivery_method" id="delivery_method{{ $data['code'] }}" value="{{ $data['code'] }}" {{ $data['checked'] }}>
		<label class="custom-control-label" for="delivery_method{{ $data['code'] }}">
			{{ $data['title'] }}
		</label>
	</div>
	{!! $data['markup'] !!}
</div>
