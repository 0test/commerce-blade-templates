<div class="commerce-cart minicart dropdown" data-commerce-cart="{{ $data['hash'] }}">
	<div>
		<i class="fa fa-shopping-cart"></i> {{ $data['count'] }} @evoParser('[%cart.items_count%]') {!! evo()->runsnippet('PriceFormat',['convert'=>0, 'price'=>$data['total']]) !!} <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
	</div>

	<div class="dropdown-menu">
		<table class="table table-sm text-xsmall">
			<thead>
				<tr>
					<th class="text-nowrap">@evoParser('[%cart.item_title%]')</th>
					<th class="text-nowrap">@evoParser('[%cart.count%]')</th>
					<th class="text-xs-right">@evoParser('[%cart.item_price%]')</th>
					<th class="text-xs-right">@evoParser('[%cart.item_summary%]')</th>
				</tr>
			</thead>

			<tfoot>
				{!! $data['subtotals'] !!}
				<tr>
					<td colspan="3">@evoParser('[%cart.total%]'):</td>
					<td class="text-xs-right text-nowrap">{!! evo()->runsnippet('PriceFormat',['convert'=>0, 'price'=>$data['total']]) !!}</td>
				</tr>
			</tfoot>
			<tbody>
				{!! $data['dl.wrap']  !!}
			</tbody>
		</table>

		<div class="dropdown-divider"></div>

		<a class="dropdown-item text-xsmall" href="@makeUrl($data['settings']['cart_page_id'])">@evoParser('[%cart.to_cart%]')</a>
		<a class="dropdown-item text-xsmall" href="@makeUrl($data['settings']['order_page_id'])">@evoParser('[%cart.to_checkout%]')</a>
	</div>
</div>
