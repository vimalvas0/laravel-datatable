<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;


class GalleryController extends Controller
{
    //


    public function index(){
        $allImages = Gallery::get();

        $images = [];

        foreach($allImages as $image)
        {
            $carbon = new Carbon($image->created_at);
            $time_image = $carbon->diffForHumans(Carbon::now());

            $images[] = array(
                'user' => $image->user,
                'id' => $image->id,
                // 'imageName' => Storage::path("images/{$image->imageName}"),
                'imageName' => $image->imageName,
                'createdAt' => $time_image
            );
        }

        // echo '<pre>';
        // print_r($images);

        return view('gallery', compact('images'));
    }



    public function storeImage(Request $req)
    {
        $file = $req->file('file')->getClientOriginalName();
        $fileName = explode('.', $file)[0];
        $fileExt = explode('.', $file)[1];
        $timestamp = Carbon::now()->timestamp;

        $finalFileName = $fileName . $timestamp;
        $currentUser = auth()->user()['name'];

        $gallery = new Gallery;

        $gallery->user = $currentUser;

        $gallery->imageName = $finalFileName . '.' . $fileExt;

        $gallery->save();

        if($req->file('file')->move(public_path('images'), $finalFileName . '.' . $fileExt))
        {
            return redirect('gallery');
        }else{
            return 'Failed Upload';
        }

    }

    public function delete($id)
    {
        $toDelete = Gallery::where('id', $id)->first();
        $toDelete->delete();

        return redirect('gallery');

    }
}
