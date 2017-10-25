@section('brand')
	<a class="navbar-brand" href="{{ isset($url) ? $url : '#' }}">
		{{ isset($title) ? $title : 'Dashboard' }}
	</a>
@stop