<?php

namespace App\Http\Controllers;

use App\Http\Requests\validationStoreAdmin;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class adminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'posts' => Post::all()->count(),
            'comments' => Comment::all()->count(),
        ]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function manage()
    {
        return view('admin.manage', [
            'posts' => Post::select('id', 'slug', 'warna_model', 'model')->latest()->filter()->get(),
        ]);
    }

    public function updateCreate($slug)
    {
        return view('admin.edit', [
            'posts' => Post::where('slug', $slug)->firstOrFail(),
        ]);
    }

    public function updateStore($post, Request $request)
    {
        $validation = $request->validate([
            'slug' => 'required',
            'title' => 'required',
            'iframe' => 'required',
            'warna_model' => 'required',
            'model' => 'required',
            'nama_pria' => 'required',
            'slug_nama_pria' => 'required',
            'instagram_pria' => 'nullable',
            'bapa_pria' => 'required',
            'ibu_pria' => 'required',
            'nama_wanita' => 'required',
            'slug_nama_wanita' => 'required',
            'instagram_wanita' => 'nullable',
            'bapa_wanita' => 'required',
            'ibu_wanita' => 'required',
            'tempat_akad' => 'required',
            'tanggal_akad' => 'required',
            'jam_akad' => 'required',
            'tempat_resepsi' => 'required',
            'tanggal_resepsi' => 'required',
            'jam_resepsi' => 'required',
        ]);

        Post::where('slug', $post)->update($validation);

        return redirect('/dashboard/manage');
    }

    public function destroy($slug)
    {
        $model = Post::where('slug', $slug)->firstOrFail();

        if ($model->slideshow) {
            Storage::delete($model->musik);
            Storage::delete(json_decode($model->slideshow));
            Storage::delete([$model->story1_img, $model->story2_img, $model->story3_img, $model->imgCouple, $model->coverD, $model->coverM, $model->imgWanita, $model->imgPria , $model->landingImageD , $model->landingImageM , $model->footerImageD , $model->footerImageM ]);
        }

        Post::destroy($model->id);

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }

    public function store(validationStoreAdmin $request)
    {
        $commonRules = $request->rules();

        $validatedData = $request->validate($commonRules);

        $validatedData['musik'] = $request->file('musik')->store('mp3');

        if($request->has('slideshow')) {
            $slds = $request->file('slideshow');
            $data = [];

            foreach ($slds as $imej) {
                $result = $imej->store('imageWedding');
                array_push($data, $result);
            }

            $validatedData['imgCouple'] = $request->file('imgCouple')->store('imageWedding');
            $validatedData['coverD'] = $request->file('coverD')->store('imageWedding');
            $validatedData['coverM'] = $request->file('coverM')->store('imageWedding');
            $validatedData['landingImageD'] = $request->file('landingImageD')->store('imageWedding');
            $validatedData['landingImageM'] = $request->file('landingImageM')->store('imageWedding');
            $validatedData['footerImageD'] = $request->file('footerImageD')->store('imageWedding');
            $validatedData['footerImageM'] = $request->file('footerImageM')->store('imageWedding');
            $validatedData['imgWanita'] = $request->file('imgWanita')->store('imageWedding');
            $validatedData['imgPria'] = $request->file('imgPria')->store('imageWedding');
            $validatedData['slideshow'] = json_encode($data);
            $validatedData['story1_date'] = $request->story1_date;
            $validatedData['story1_img'] = $request->file('story1_img')->store('imageStory');
            $validatedData['story1_text'] = $request->story1_text;
            $validatedData['story2_date'] = $request->story2_date;
            $validatedData['story2_img'] = $request->file('story2_img')->store('imageStory');
            $validatedData['story2_text'] = $request->story2_text;
            $validatedData['story3_date'] = $request->story3_date;
            $validatedData['story3_img'] = $request->file('story3_img')->store('imageStory');
            $validatedData['story3_text'] = $request->story3_text;
            $validatedData['bank'] = $request->bank;
            $validatedData['norek'] = $request->norek;
            $validatedData['atasNama'] = $request->atasNama;
            $mengundang = $request->mengundang;
            $parse = explode('/', $mengundang);
            $validatedData['mengundang'] = json_encode($parse);
        }

        Post::create($validatedData);

        return redirect()->back()->with('success', 'Data berhasil di tambahkan');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
