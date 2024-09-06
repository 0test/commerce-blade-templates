<p>Новый заказ #{{ $data['order']['id'] }} на сайте {{ evo()->getConfig('site_url') }}</p>

<h4>Данные покупателя:</h4>

<p>
	{{ $data['order']['name'] }}, {{ $data['order']['email'] }}, {{ $data['order']['phone'] }}, {{ $data['order']['fields']['address'] }}<br>
	Способ доставки: {{ $data['order']['fields']['delivery_method_title'] }}<br>
	Способ оплаты: {{ $data['order']['fields']['payment_method_title'] }}
</p>

<h4>Состав заказа:</h4>

{!! evo()->runSnippet('Cart',[
	'instance'=>'order',
	'templatePath'=>'views/commerce',
	'tpl'=>'@B_FILE:order.order_report_items_row',
	'ownerTPL'=>'@B_FILE:order.order_report_items',
	'subtotalsTpl' => '@B_FILE:order.order_report_subtotals',
	'subtotalsRowTpl'=>'@B_FILE:order.order_report_subtotals_row',
	'urlScheme'=>'full'
]) !!}