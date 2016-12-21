	<nav class="nav-searchbar">
		<ul class="nav nav-tabs">
			<li class="pull-right col-md-6 col-xs-12">
				<div class="nav-search-field">
					{!! Form::open(['route' => 'search.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right']) !!}
						<div class="pull-right search-products">
							<div class="pull-left search-input">
								{!! Form::text('title', null, ['autocomplete' => 'off', 'size' => '30']) !!}
							</div>
							<div class="pull-right search-btn">
								<input type="submit" value="search" class="material-icons">
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</li>
		</ul>
	</nav>