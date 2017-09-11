<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class BlogController extends Controller
{
    public function index()
    {
        $pages = Page::all()->sortByDesc('created_at');

        return view('admin.blog.index', compact('pages'));
    }

    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('admin.blog.view', compact('page'));
    }

    public function update($id, Request $request)
    {
        $page = Page::findOrFail($id);

        $this->validate($request, [
           'slug' => 'required|max:255',
           'page_title' => 'required|max:255',
        ]);

        $page->fill($request->all());
        $page->is_published = $request->is_published == 1 ? true : false;
        $page->save();
        Session::flash('flash_blog_update_message', 'Страница успешно обновлена!');

        return redirect('admin/blogs');
    }

    public function create()
    {
        $page = new Page();

        return view('admin.blog.view', compact('page'));
    }

    public function store(Request $request)
    {
        Page::create($request->all());

        Session::flash('flash_blog_store_message', 'Статья успешно создана!');

        return redirect('admin/blogs');
    }


    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();
        Session::flash('flash_page_delete_message', 'Страница успешно удалена!');

        return redirect('admin/blogs');
    }
}
