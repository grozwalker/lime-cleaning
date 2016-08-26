<?php

namespace App\Http\Controllers\Admin;

use App\Profile;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class ProfileController extends Controller
{
    /**
     * Получаем данные всех клиентов и выводим их ввиде таблицы с возможностью редактирования
     */
    public function index()
    {
        $profiles = Profile::all()->sortByDesc('id');

        return view('admin.profile.index', compact('profiles'));
    }

    public function view(Profile $profile)
    {
        return view('admin.profile.view', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {


        $this->validate($request, [
           'name' => 'required|max:255',
            'phone' => 'required|max:255'
        ]);

        $profile->fill($request->all())->save();
        Session::flash('flash_profile_update_message', 'Профиль успешно обновлен!');

        return redirect('admin/profiles');
    }

    public function create()
    {
        $profile = new Profile();

        return view('admin.profile.view', compact('profile'));
    }

    public function store(Request $request)
    {
        Profile::create($request->all());


        Session::flash('flash_profile_store_message', 'Профиль успешно создан!');

        return redirect('admin/profiles');
    }


    public function destroy(Profile $profile)
    {
        $profile->delete();
        Session::flash('flash_profile_delete_message', 'Профиль успешно удален!');

        return redirect('admin/profiles');
    }
}
