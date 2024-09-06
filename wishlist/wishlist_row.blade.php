<tr data-id="{{ $data['id'] }}" data-commerce-row="{{ $data['row'] }}">
	
	<td>
		@if(!empty($data['tv.image']))
			<img src="{{\Helper::phpThumb($data['tv.image'], 'w=80,h=80,zc=1')}}" alt="{{ $data['title'] }}">
		@endif
	</td>
	
	<td>
		<a href="{{ $data['url'] }}">{{ $data['pagetitle'] }}</a>
	</td>

	<td class="text-xs-right">
		{!! evo()->runsnippet('PriceFormat',['convert'=>0, 'price'=>$data['tv.price']]) !!}
	</td>

	<td>
		<a href="javascript:;" title="@evoParser('[%common.add_to_cart%]')" class="btn btn-primary" data-commerce-action="add" data-instance="products" data-id="{{ $data['id'] }}"><i class="fa fa-shopping-cart"></i></a>
		<a href="javascript:;" title="@evoParser('[%cart.remove%]')" class="btn btn-danger" data-commerce-action="remove" data-instance="wishlist" data-id="{{ $data['id'] }}"><i class="fa fa-ban"></i></a>
	</td>
</tr>
