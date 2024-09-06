<div data-commerce-cart="{{ $data['hash'] }}">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<td colspan="2">@evoParser('[%cart.item_title%]')</td>
					<td>@evoParser('[%cart.count%]')</td>
					<td class="text-xs-right">@evoParser('[%cart.item_price%]')</td>
					<td class="text-xs-right">@evoParser('[%cart.item_summary%]')</td>
				</tr>
			</thead>
			<tfoot>
				{!! $data['subtotals'] !!}
				<tr>
					<td class="text-xs-right" colspan="4">@evoParser('[%cart.total%]'):</td>
					<td class="text-xs-right">{!! evo()->runsnippet('PriceFormat',['convert'=>0, 'price'=>$data['total']]) !!}</td>
				</tr>
			</tfoot>
			<tbody>
				{!! $data['dl.wrap'] !!}
			</tbody>
		</table>
	</div>
	<div class="row cbfix justify-content-between">
		<div class="col col-auto col-block">
			<a href="@makeUrl($data['settings']['order_page_id'])" class="btn btn-primary">@evoParser('[%cart.to_checkout%]')</a>
		</div>
		<div class="col col-auto col-block">
			<button type="button" class="btn btn-secondary" data-commerce-action="clean">@evoParser('[%cart.clean%]')</button>
		</div>
	</div>
</div>
