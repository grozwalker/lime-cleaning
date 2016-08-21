<?php

namespace App\Http\Controllers;

use App\Service;
use App\Subservice;
use Illuminate\Http\Request;

use App\Http\Requests;

class SubserviceController extends Controller
{
    public function create(Service $service)
    {
        $subService = new Subservice();

        return view('admin.subservice.view', compact('subService', 'service'));
    }

    public function store(Request $request, Service $service)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $subService = new Subservice();

        $subService->name = $request->name;
        $subService->service_id = $service->id;
        $subService->active = $request->active ? true : false;

        $subService->save();

        return redirect('/admin/service/'.$service->id);
    }

    public function view(Service $service, Subservice $subservice)
    {
        return view('admin.subservice.view', compact('subservice', 'service'));
    }

    public function update(Request $request, Service $service, Subservice $subservice)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $subservice->name = $request->name;
        $subservice->active = $request->active == 1 ? true : false;

        $subservice->save();

        return redirect('/admin/service/'.$service->id);
    }

    public function destroy(Service $service, Subservice $subservice)
    {
        $subservice->delete();

        return redirect('/admin/service/'.$service->id);
    }

}
