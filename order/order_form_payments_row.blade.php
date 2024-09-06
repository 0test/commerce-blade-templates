<div class="mb-1">
	<div class="custom-control custom-radio">
		<input class="custom-control-input"  autocomplete="off" type="radio" name="payment_method" id="payment_method{{ $data['code'] }}" value="{{ $data['code'] }}" {{ $data['checked'] }}>
		<label class="custom-control-label" for="payment_method{{ $data['code'] }}">
			{{ $data['title'] }}
		</label>
	</div>
	{!! $data['markup'] !!}
</div>