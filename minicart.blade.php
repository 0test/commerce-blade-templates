{!! evo()->runSnippet('Cart',[
	'templatePath'=>'views/commerce',
	'tpl' => '@B_FILE: mini.cart_row',
	'optionsTpl' => '@B_FILE: mini.cart_row_options_row',
	'ownerTPL' => '@B_FILE: mini.cart_wrap',
	'subtotalsRowTpl' => '@B_FILE: mini.cart_subtotals_row',
	'subtotalsTpl' => '@B_FILE: mini.cart_subtotals',
	'noneTPL'=>'@B_FILE: mini.cart_empty',
]) !!}