<?php

class ContentController extends BaseController {

    public function reload()
    {
        if ( Request::ajax() && Auth::check() )
            return View::make('template.content')->with('posts', Auth::user()->posts());
    }

}
