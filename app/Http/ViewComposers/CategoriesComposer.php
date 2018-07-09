<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use App\Categories;

class CategoriesComposer
{
    /**
     * The user repository implementation.
     *
     * @var Categories
     */
    protected $categories;

    /**
     * Create a new profile composer.
     *
     * @param  Categories  $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->categories = Categories::all()->pluck('category_name')->toArray();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $categories = $this->render_categories();
        $view->with('categories', $categories);
    }

    private function render_categories() {
      //Parent categories
      $parent_categories = Categories::where('parent_id', 0)->select('id', 'category_name', 'link')->get();
      //Child Categories
      $child_categories = Categories::where('parent_id', '!=', 0)->select('category_name','parent_id', 'link')->get();
      $child_cat = array();
      foreach($child_categories as $item) {
        $child_cat[$item['parent_id']][] =  array('name' => $item['category_name'], 'link' => $item['link']);
      }
      $result = '';
      foreach ($parent_categories as $item) {
        if (in_array($item['id'] , array_keys($child_cat))) {
          $result .= '
          <li class="dropdown">
            <a href="'. $item['link'] .'" class="dropdown-toggle" data-toggle="dropdown">'. $item['category_name'] .'<b class="caret"></b></a>
            <ul class="dropdown-menu">';
          foreach ($child_cat[$item['id']] as $value) {
            $result .= '<li><a href="'. $value['link'] . '">' . $value['name'] . '</a></li>';
          }
          $result .= '</ul>
          </li>';
        }
        else {
          $result .= '<li><a href="'. $item['link'] .'">' . $item['category_name'] . '</a></li>';
        }
      }
      return $result;
    }
}
