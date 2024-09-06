{!! evo()->runSnippet('Cart',[
	'instance'=>'wishlist',
	'ownerTPL' => '@CODE: <div data-commerce-cart="[+hash+]"><a href="[~17~]" title="Избранное"><i class="fa fa-heart"></i> [+count+]</a></div>',
	'noneTPL'=>'@CODE: <div data-commerce-cart="[+hash+]"></div>',
]) !!}