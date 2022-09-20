<?php

namespace App\Http\Controllers;

use App\Models\Inventori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $inventor = Inventori::get();
        $auth = User::where('id', Auth::user()->id)->get();

        $data_invents = [
            'data' => $inventor,
            'auth' => $auth
        ];

        return view('home', compact('data_invents'));
    }

    public function update(Request $request,$id)
    {

        $inventor = Inventori::where('id',$id)->first();
        if($request->photo) {
            $host = $request->getSchemeAndHttpHost();

            $photo = $request->photo;
            $fileNamePhoto = time() . '_' . $photo->getClientOriginalName();
            $fileNamePhoto2 = $host . '/storage/' . $fileNamePhoto;
            $photo->move(public_path('storage'), $fileNamePhoto);

        } else {
            $fileNamePhoto2 = $inventor->photo;
        }

        $inventor->update([
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
            'current' => $request->current,
            'photo' => $fileNamePhoto2,
        ]);

        return redirect()->route('home');
    }

    public function store(Request $request)
    {
        $host = $request->getSchemeAndHttpHost();

        $photo = $request->photo;
        $fileNamePhoto = time() . '_' . $photo->getClientOriginalName();
        $fileNamePhoto2 = $host . '/storage/' . $fileNamePhoto;
        $photo->move(public_path('storage'), $fileNamePhoto);

        $inventor = Inventori::create([
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
            'photo' => $fileNamePhoto2,
            'current' => $request->total,
            'total' => $request->total,
        ]);

        return redirect()->route('home');
    }

    public function destroy($id)
    {
        Inventori::where('id',$id)->delete();

        return redirect()->route('home');
    }

    public function profile(Request $request)
    {
        User::where('id',Auth::user()->id)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('home');
    }
}
