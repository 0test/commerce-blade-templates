<tr>
	<td style="border: 1px solid #ddd; padding: 5px 10px; background: #fff;" colspan="3">{{ $data['title'] }}:</td>
	<td style="border: 1px solid #ddd; padding: 5px 10px; background: #fff;">{!! evo()->runSnippet('PriceFormat',['convert'=>0, 'price'=>$data['price']]) !!}</td>
</tr>


