<th data-commerce-row="{{ $data['row'] }}">
	@if(!empty($data['tv.image']))
		<p><a href="{{ $data['url'] }}"><img src="{{\Helper::phpThumb($data['tv.image'], 'w=80,h=80,zc=1')}}" class="img-fluid" alt="{{ $data['title'] }}"></a></p>
	@endif
	<p><a href="{{ $data['url'] }}">{{ $data['pagetitle'] }}</a></p>
	<a title="Удалить" class="btn btn-sm btn-danger" href="javascript:;" data-commerce-action="remove" data-instance="comparison" data-id="{{ $data['id'] }}"><i class="fa fa-ban"></i></a>
</th>
