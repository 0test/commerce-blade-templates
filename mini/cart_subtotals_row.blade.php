<tr>
	<td colspan="3">{{ $data['title'] }}:</td>
	<td class="text-xs-right">{!! evo()->runsnippet('PriceFormat',['convert'=>0, 'price'=>$data['price']]) !!}</td>
</tr>
