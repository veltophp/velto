<?php

namespace Modules\Axion;

use Velto\Core\Controller\Controller;
use Velto\Core\Request\Request;
use Modules\Auth\Models\Auth;
use Modules\Axion\Models\Axion;


class CrudController extends Controller
{

    public function crud()
    {

        $user_id = Auth::user()->id;

        $datas = Axion::where('user_id', $user_id)->desc()->paginate(4);

        $dataCount = Axion::where('user_id', $user_id)->count();

        return view('axion.crud-basic.crud')->compact($datas , $dataCount);

    }

    public function crudStore(Request $request)
    {
        $user_id = Auth::user()->id;

        $errors = validate($request->all(), [
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if(!empty($errors)) {
            return to_route_response('axion.crud')->errorAlert($errors);
        }

        if (hasFile($request, 'image')) {
            $file = $request->file('image');
            $imageName = imageName($file);
            $imageSave = imageSave($imageName)->from($file)->to('assets/images');
        }

        $data =[
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageSave,
            'user_id'  => $user_id,
        ];

        $data = Axion::create($data);

        return to_route_response('axion.crud')->successAlert('Data uploaded successfully!');

    }

    public function crudView($id)
    {

        $user_id = Auth::user()->id;
        $data = Axion::where('id', $id)
        ->andWhere('user_id', $user_id)->first();

        return view('axion.crud-basic.crud-view')
        ->with('data', $data);

    }

    public function crudDelete($id)
    {
        $user_id = Auth::user()->id;
        
        $data = Axion::where('id', $id)->andWhere('user_id', $user_id)->first();

        if ($data) {
            deleteImage($data->image);
            $data->delete();

            return to_route_response('axion.crud')->successAlert('Data deleted successfully!');
        }

        return to_route_response('axion.crud')->errorAlert('Error! Failed to delete Data');
    }

    public function crudEdit($id)
    {
        $user_id = Auth::user()->id;

        $data = Axion::where('id',$id)->andWhere('user_id',$user_id)->first();

        $datas = Axion::where('user_id', $user_id)->desc('id')->paginate(4);

        $dataCount = Axion::where('user_id', $user_id)->count();

        return view('axion.crud-basic.crud-edit')->compact($data, $datas, $dataCount);
    }

    public function crudUpdate(Request $request, $id)
    {
        $user_id = Auth::user()->id;

        $errors = validate($request->all(), [
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if (!empty($errors)) {
            return to_route_response('axion.crud.edit', [$id])->errorAlert($errors);
        }

        $record = Axion::where('id', $id)->andWhere('user_id', $user_id)->first();

        if (!$record) {
            return to_route_response('axion.crud')->errorAlert('Data not found or access denied.');
        }

        $imagePath = $record->image;

        if (hasFile($request, 'image')) {
            $file = $request->file('image');
            $imageName = imageName($file);
            $imagePath = imageSave($imageName)->from($file)->to('assets/images');
        }

        $data = [
            'name'        => $request->name,
            'description' => $request->description,
            'image'       => $imagePath,
        ];

        Axion::where('id', $id)->andWhere('user_id', $user_id)->update($data);
        return to_route_response('axion.crud')->successAlert('Data updated successfully!');
    }

    public function crudSearch(Request $request)
    {
        $search = $request->search;

        $user_id = Auth::user()->id;

        $query = Axion::search($search);

        if ($query->hasError()) {
            return to_route_response('axion.crud')->errorAlert($query->getError());

        }

        $results = $query->get();

        if (empty($results)) {
            return to_route_response('axion.crud')->errorAlert('No search results found.');
        }        
        

        $datas = Axion::where('user_id', $user_id)->desc()->paginate(4);

        $dataCount = Axion::where('user_id', $user_id)->count();

        return view('axion.crud-basic.crud')->compact($datas , $dataCount, $results);

    }


}

