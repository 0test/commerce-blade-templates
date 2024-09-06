<tr data-id="{{ $data['id'] }}" data-commerce-row="{{ $data['row'] }}">
	<td>
		<a href="{{ $data['url'] }}">{{ $data['name'] }}</a>
		<div class="small text-muted">
			{!! $data['options'] !!}
		</div>
		<b>× {{ $data['count'] }}</b>
	</td>
	<td class="text-nowrap" width="1">
		{!! evo()->runsnippet('PriceFormat',['convert'=>0, 'price'=>$data['price']]) !!}
	</td>
	<td class="text-nowrap" width="1">
		{!! evo()->runsnippet('PriceFormat',['convert'=>0, 'price'=>$data['total']]) !!}
	</td>
</tr>
