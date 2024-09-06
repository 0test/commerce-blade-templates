<tr>
	<td style="border: 1px solid #ddd; padding: 5px 10px; background: #fff;">
		<a href="{{ $data['url'] }}">{{ $data['name'] }}</a>
		<div class="small text-muted">
			{!! $data['options'] !!}
		</div>
	</td>
	<td style="border: 1px solid #ddd; padding: 5px 10px; background: #fff;">
		{{ $data['count'] }}
	</td>
	<td style="border: 1px solid #ddd; padding: 5px 10px; background: #fff;">
		{!! evo()->runsnippet('PriceFormat',['convert'=>0, 'price'=>$data['price']]) !!}
	</td>
	<td style="border: 1px solid #ddd; padding: 5px 10px; background: #fff;">
		{!! evo()->runsnippet('PriceFormat',['convert'=>0, 'price'=>$data['total']]) !!}
	</td>
</tr>
