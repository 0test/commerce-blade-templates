<tr>
	<td class="text-xs-right" colspan="4">{{ $data['title'] }}:</td>
	<td class="text-xs-right">{!! evo()->runSnippet('PriceFormat',['convert'=>0, 'price'=>$data['price']]) !!}</td>
</tr>
