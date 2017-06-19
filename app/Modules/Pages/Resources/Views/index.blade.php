@extends('admin::layouts.default')


@section('content')

	<div class="content__inner">
		
		<header class="content__title">

			<h1>Pages</h1>

			<div class="actions">
				
				<a href="" class="actions__item zmdi zmdi-trending-up"></a>
				<a href="" class="actions__item zmdi zmdi-check-all"></a>

				<div class="dropdown actions__item">
					<i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="" class="dropdown-item">Refresh</a>
						<a href="" class="dropdown-item">Manage Widgets</a>
						<a href="" class="dropdown-item">Settings</a>
					</div>
				</div>

			</div>

		</header>

	</div>

@endsection