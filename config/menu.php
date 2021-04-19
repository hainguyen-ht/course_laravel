<?php
	
	return [
		[
			'title' => 'Dashboard',
			'icon'  => 'fa-home'
		],
		[
			'title' => 'Categories',
			'icon'  => 'fa-bezier-curve',
			'item'  => [
				[
					'title' => 'Show Categories',
					'icon'  => 'fa-list',
					'link'	=> 'category.index'
				],
				[
					'title' => 'Add Category',
					'icon'  => 'fa-plus',
					'link'	=> 'category.create'
				]
			]
		],[
			'title' => 'Courses',
			'icon'  => 'fa-book',
			'item'  => [
				[
					'title' => 'Show Courses',
					'icon'  => 'fa-list',
					'link'	=> 'course.index'
				],
				[
					'title' => 'Add Course',
					'icon'  => 'fa-plus',
					'link'	=> 'course.create'
				]
			]
		],[
			'title' => 'Account',
			'icon'  => 'fa-users',
			'item'  => [
				[
					'title' => 'Show Acount',
					'icon'  => 'fa-list',
					'link'	=> 'account.index'
				],
				[
					'title' => 'Add Acount',
					'icon'  => 'fa-plus',
					'link'	=> 'account.create'
				]
			]
		]
	]
	
?>