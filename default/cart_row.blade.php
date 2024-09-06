<tr data-id="{{ $data['id'] }}" data-commerce-row="{{ $data['row'] }}">
	<td>
		@if(!empty($data['tv.image']))
			<img src="{{\Helper::phpThumb($data['tv.image'], 'w=80,h=80,zc=1')}}" class="img-fluid" alt="{{ $data['title'] }}">
		@endif
	</td>
	<td>
		<a href="{{ $data['url'] }}">{{ $data['name'] }}</a>
		<div class="small text-muted">
			{!! $data['options'] !!}
		</div>
	</td>
	<td>
		<input type="text" name="count" class="form-control" value="{{ $data['count'] }}" data-commerce-action="recount">
		<button type="button" data-commerce-action="decrease">@evoParser('[%cart.decrease%]')</button>
		<button type="button" data-commerce-action="increase">@evoParser('[%cart.increase%]')</button>
		<button type="button" data-commerce-action="remove">@evoParser('[%cart.remove%]')</button>
	</td>
	<td class="text-xs-right">
		{!! evo()->runsnippet('PriceFormat',['convert'=>0, 'price'=>$data['price']]) !!}
	</td>
	<td class="text-xs-right">
		{!! evo()->runsnippet('PriceFormat',['convert'=>0, 'price'=>$data['total']]) !!}
	</td>
</tr>
