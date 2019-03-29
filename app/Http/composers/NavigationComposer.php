<?php

namespace App\Http\Composers;
use App\Category;
use App\Setting;
use App\Page;
// use Hamcrest\Core\Set;
use Illuminate\Contracts\View\View;


class NavigationComposer
{

	public function getInspired(View $view)
	{
		$categories = Category::all();
		$view->withCategories($categories);
	}

	public function whereWego(View $view)
	{
		$wheres = Region::all();
		$view->withWheres($wheres);
	}

	public function footer(View $view)
	{
		$setting = Setting::firstOrFail();
		if ($setting) {
			$view->withSetting($setting);
		}
	}

	public function getPage(View $view)
	{
		$pages = Page::where('main',1)->where('status',1)->orderBy('position', 'asc')->get();
		if ($pages) {
			$view->withPages($pages);
		}
	}
}