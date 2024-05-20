<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Functions\Helper;
use App\Http\Requests\ComicRequest;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $comics = Comic::orderBy('id', 'desc')->get();







        return view('comics.index',compact('comics'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $method='POST';
        $route= route('comics.store');
        $comic=null;
        return view('comics.create_edit', compact('method','route','comic'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComicRequest $request)
    {
        $form_data=$request->all();


        $new_comic= new Comic();

        $new_comic->fill($form_data);

        $new_comic->slug=Helper::generateSlug($form_data['title'], new Comic);

        $new_comic->save();

        return redirect()->route('comics.show',$new_comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {

        return view('comics.show',compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {

        $method='PATCH';
        $route= route('comics.update', $comic);
        return view('comics.create_edit',compact('method','route','comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        $form_data=$request->all();

        if ($form_data['title']== $comic->title) {
            $form_data['slug']= $comic->slug;
        } else {
           $form_data['slug']=Helper::generateSlug($form_data['title'], new Comic);
        }

        $comic->update($form_data);

        return redirect()->route('comics.show',$comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index',$comic)->with('cancel', 'Il fumetto '. $comic->title .' è stato eliminato con successo!');
    }
}
