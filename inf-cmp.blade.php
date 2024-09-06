{!! evo()->runSnippet('Cart',[
	'instance'=>'comparison',
	'ownerTPL' => '@CODE: <div data-commerce-cart="[+hash+]"><a href="[~18~]" title="Сравнение"><i class="fa fa-chart-bar"></i> [+count+]</a></div>',
	'noneTPL'=>'@CODE: <div data-commerce-cart="[+hash+]"></div>',
]) !!}