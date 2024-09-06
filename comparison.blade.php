{!! evo()->runSnippet('Comparison',[
	'templatePath'=>'views/commerce',
	'showCategories'=>0,
	'tvCategory'=>10,
	'excludeTV'=>'category',
	'includeTV'=>'image,price', //example
	'checkBoundingList'=>0,
	'categoryItemClass'=>'btn-secondary',
	'categoryActiveClass'=>'btn-primary',
	'ownerTPL' => '@B_FILE:comparison.comparison_table',
	'headerTpl' => '@B_FILE:comparison.comparison_table_header_cell',
	'footerTpl' => '@B_FILE:comparison.comparison_table_footer_cell',
	'keyTpl' => '@CODE: <td>[+caption+]</td>',
	'valueTpl' => '@B_FILE:comparison.comparison_table_value_cell',
	'rowTpl'=> '@B_FILE:comparison.comparison_table_row'
]) !!}