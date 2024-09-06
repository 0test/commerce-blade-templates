<tr>
	<td class="" colspan="2">{{ $data['title'] }}:</td>
	<td class="text-nowrap" width="1">{!! evo()->runsnippet('PriceFormat',['convert'=>0, 'price'=>$data['price']]) !!}</td>
</tr>
