<form method="post" data-commerce-order="{{ $data['form_hash'] }}">
	<p>Все поля формы обязательны к заполнению</p>
	<input type="hidden" name="formid" value="order">

	<div class="form-group">
		<input required type="text" class="form-control {{ $data['name.errorClass'] ?? '' }} {{ $data['name.requiredClass'] ?? '' }}" placeholder="Ваше имя *" name="name" value="{{ $data['name.value'] ?? '' }}">
		{!! $data['name.error'] ?? '' !!}
	</div>

	<div class="form-group">
		<input required type="text" class="form-control {{ $data['email.errorClass'] ?? '' }} {{ $data['email.requiredClass'] ?? '' }}" placeholder="e-mail *" name="email" value="{{ $data['email.value'] ?? '' }}">
		{!! $data['email.error'] ?? '' !!}
	</div>

	<div class="form-group">
		<input required type="text" class="form-control {{ $data['phone.errorClass'] ?? '' }} {{ $data['phone.requiredClass'] ?? '' }}" placeholder="Номер телефона *" name="phone" value="{{ $data['phone.value'] ?? '' }}">
		{!! $data['phone.error'] ?? '' !!}
	</div>

	<div class="form-group">
		<textarea rows="4" id="address" class="form-control {{ $data['address.errorClass'] ?? '' }} {{ $data['address.requiredClass'] ?? '' }}" placeholder="Адрес доставки" name="address" value="{{ $data['address.value'] ?? '' }}"></textarea>
		{!! $data['address.error'] ?? '' !!}
	</div>

	<div data-commerce-deliveries>
		{!! $data['delivery'] !!}
	</div>

	<div data-commerce-payments>
		{!! $data['payments'] !!}
	</div>

	{!! $data['form.messages'] ?? '' !!}

	<div class="custom-control custom-checkbox mb-3">
		<input class="custom-control-input" type="checkbox" value="1" checked="checked" required="required" name="sogl" id="sogl">
		<label class="custom-control-label" for="sogl">Я согласен на обработку <a href="@makeUrl('22')" target="_blank">моих персональных данных</a></label>
	</div>

	<button type="submit" class="btn btn-primary">Отправить заказ</button>
</form>
