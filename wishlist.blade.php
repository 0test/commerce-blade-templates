{!! evo()->runSnippet('Wishlist',[
	'templatePath'=>'views/commerce',
	'tpl' => '@B_FILE: wishlist.wishlist_row',
	'ownerTPL' => '@B_FILE: wishlist.wishlist_wrap',
	'noneTPL'=>'@B_FILE: wishlist.wishlist_empty',
	'tvList'=>'image'
]) !!}