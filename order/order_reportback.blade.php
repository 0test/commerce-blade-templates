<p>
	Здравствуйте!<br>
	Вы оставили заказ на сайте {{ evo()->getConfig('site_url') }}.<br>
	Номер вашего заказа: {{ $data['order']['id'] }}
</p>

<h4>Данные покупателя:</h4>

<p>
	Способ доставки: {{ $data['order']['fields']['delivery_method_title'] }}<br>
	Способ оплаты: {{ $data['order']['fields']['payment_method_title'] }}
</p>

{{ $data['extra'] ?? '' }}

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
