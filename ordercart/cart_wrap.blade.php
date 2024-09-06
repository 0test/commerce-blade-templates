<div data-commerce-cart="{{ $data['hash'] }}">
	<div class="p-2 p-lg-3 border rounded bg-light">
		<div class="table-responsive">
			<table class="table-sm w-100 text-sm">
				<thead class="border-bottom">
					<tr>
						<td>@evoParser('[%cart.item_title%]')</td>
						<td width="1">@evoParser('[%cart.item_price%]')</td>
						<td width="1">@evoParser('[%cart.item_summary%]')</td>
					</tr>
				</thead>
				<tfoot class="border-top">
					{!! $data['subtotals'] !!}
					<tr class="border-top">
						<td class="text-nowrap" colspan="2">@evoParser('[%cart.total%]'):</td>
						<td class="text-nowrap" width="1">{!! evo()->runsnippet('PriceFormat',['convert'=>0, 'price'=>$data['total']]) !!}</td>
					</tr>
				</tfoot>
				<tbody>
					{!! $data['dl.wrap'] !!}
				</tbody>
			</table>
		</div>
	</div>
</div>
