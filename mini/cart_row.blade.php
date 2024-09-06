<tr data-id="{{ $data['id'] }}" data-commerce-row="{{ $data['row'] }}">
	<td>{{ $data['name'] }}</td>
	<td>{{ $data['count'] }}</td>
	<td class="text-nowrap">{!! evo()->runsnippet('PriceFormat',['convert'=>0, 'price'=>$data['price']]) !!}</td>
	<td class="text-nowrap">{!! evo()->runsnippet('PriceFormat',['convert'=>0, 'price'=>$data['total']]) !!}</td>
</tr>