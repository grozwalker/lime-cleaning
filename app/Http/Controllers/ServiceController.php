<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;

class ServiceController extends Controller
{
    public function index()
    {
        //$services = Service::get();
        $services = Service::where('parent_id', 0) -> with('children')->get();

        return view('admin.service.index', compact('services'));
    }

    public function create()
    {
        $service = new Service();
        $services = Service::lists('name', 'id');
        $services->prepend('None');

        return view('admin.service.view', compact('service', 'services'));
    }

    public function store(Request $request)
    {
        /*$validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }*/

        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $service = new Service();

        $service->name = $request->name;
        $service->parent_id = $request->parent_id;
        $service->active = $request->active ? true : false;

        $service->save();

        return redirect('/admin/services');
    }

    public function view(Service $service)
    {
        $services = Service::lists('name', 'id');
        $services->prepend('None');

        $subServices = $service->subservice;

        return view('admin.service.view', compact('service', 'services', 'subServices'));
    }

    public function update(Request $request, Service $service)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $service->name = $request->name;
        $service->parent_id = $request->parent_id;
        $service->active = $request->active == 1 ? true : false;

        $service->save();

        return redirect('/admin/services');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect('/admin/services');
    }
}
