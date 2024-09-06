<table style="border-collapse: collapse;">
	<tr>
		<td style="border: 1px solid #ddd; padding: 5px 10px; background: #f6f6f6;">Наименование</td>
		<td style="border: 1px solid #ddd; padding: 5px 10px; background: #f6f6f6; text-align: center;">Кол-во</td>
		<td style="border: 1px solid #ddd; padding: 5px 10px; background: #f6f6f6; text-align: right;">Цена</td>
		<td style="border: 1px solid #ddd; padding: 5px 10px; background: #f6f6f6; text-align: right;">Стоимость</td>
	</tr>

	{!! $data['dl.wrap'] !!}
	{!! $data['subtotals'] !!}

	<tr>
		<td style="border: 1px solid #ddd; padding: 5px 10px;" colspan="3">Итого:</td>
		<td style="border: 1px solid #ddd; padding: 5px 10px; white-space: nowrap;">{!! evo()->runsnippet('PriceFormat',['convert'=>0, 'price'=>$data['total']]) !!}</td>
	</tr>
</table>
