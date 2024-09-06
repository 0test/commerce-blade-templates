<div class="wishlist-table table-responsive" data-commerce-cart="{{ $data['hash'] }}">
	<table class="table">
		<thead>
			<tr>
				<td colspan="2">@evoParser('[%cart.item_title%]')</td>
				<td class="text-xs-right">@evoParser('[%cart.item_price%]')</td>
				<td style="width: 1%;"></td>
			</tr>
		</thead>
		<tbody>
			{!! $data['dl.wrap'] !!}
		</tbody>
	</table>
</div>
