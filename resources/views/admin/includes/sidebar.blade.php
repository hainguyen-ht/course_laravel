<?php
	$lists = config('menu');
?>
<nav class="mt-2">
	<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
	@foreach($lists as $list)
		<li class="nav-item has-treeview">
		    <a href="{{ !isset($list['item']) ? route('dashboard') : '#' }}" class="nav-link">
		      <i class="nav-icon fas {{ $list['icon'] }}"></i>
		      <p>
		        {{ $list['title'] }}
		        @if(isset($list['item']))
		        	<i class="right fas fa-angle-left"></i>
		        @endif
		      </p>
		    </a>
		    <ul class="nav nav-treeview">
		    @if(isset($list['item']))
		    	@foreach($list['item'] as $item)
				    <li class="nav-item">
				        <a href="{{ route($item['link']) }}" class="nav-link">
				          <i class="far fa {{$item['icon']}} nav-icon"></i>
				          <p>{{$item['title']}}</p>
				        </a>
				    </li> 
		    	@endforeach
		    @endif
		    </ul>
		</li>
	@endforeach
	</ul>
</nav>