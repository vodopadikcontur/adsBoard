<?php

    namespace App\Http\Controllers;

    use App\Models\Ad;
    use App\Models\User;
    use http\Env\Request;
    use Illuminate\Support\Facades\Auth;

    class AdsController
    {
        public function index()
        {
            $ads = Ad::paginate(5);

            compact('ads');

            return view('ads', compact('ads'));
        }

        public function create()
        {
            return view('ads.edit');
        }

        public function store(\Illuminate\Http\Request $request)
        {
            $request->validate([
                'title' => ['required', 'min:3', 'max:255'],
                'desc' => ['required', 'min:3', 'max:255']
            ]);

            $data = $request->all();

            Ad::create([
                'title' => $data['title'],
                'desc' => $data['desc'],
                'author_id' => Auth::user()->id
            ]);

            return redirect('/');
        }


        public function show($id)
        {
            return view('ads.show', [
                'ad' => Ad::findOrFail($id)
            ]);
        }

        public function destroy($id)
        {
            $ad = Ad::find($id);
            $ad->delete();

            return redirect('/');
        }

        public function edit($id)
        {
            $ad = Ad::find($id);
            return view('ads.update', compact('ad'));
        }

        public function update(\Illuminate\Http\Request $request, $id)
        {
            $request->validate([
                'title' => ['required', 'min:3', 'max:255'],
                'desc' => ['required', 'min:3', 'max:255']
            ]);

            $ad = Ad::find($id);
            $ad->title = $request->input('title');
            $ad->desc = $request->input('desc');
            $ad->update();
            return redirect('/');
        }
    }

