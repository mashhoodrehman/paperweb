<?php

namespace App\ViewComposer;

use Illuminate\View\View;

class SideBarMenuView
{
    /**
     * Create a new categories composer.
     *
     * @param  CategoryRepository $categories
     * @return void
     */

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $xml = simplexml_load_string(file_get_contents(storage_path('xml/sidemenu.xml')));
        $view->with('sidemenu', $xml);
    }
}