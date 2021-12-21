<?php

namespace App\Http\Controllers\Admin;

use App\Models\Keyword;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\KeywordStoreRequest;
use App\Http\Requests\KeywordUpdateRequest;


class KeywordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keywords = Keyword::get();
        return view('admin.keywords.index', [
            'keywords' => $keywords,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.keywords.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KeywordStoreRequest $request)
    {
        $validated = $request->validated();
        $keyword = Keyword::create($validated);
        $request->session()->flash('message', __('keywords.massages.created_successfully'));
        return redirect(route('admin.keywords.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keyword  $keyword
     * @return \Illuminate\Http\Response
     */
    public function show(Keyword $keyword)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keyword  $keyword
     * @return \Illuminate\Http\Response
     */
    public function edit(Keyword $keyword)
    {
        return view('admin.keywords.edit', [
            'keyword' => $keyword,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keyword  $keyword
     * @return \Illuminate\Http\Response
     */
    public function update(KeywordUpdateRequest $request, Keyword $keyword)
    {
        $validated = $request->validated();
        $keyword->update($validated);
        $request->session()->flash('message', __('keywords.massages.updated_successfully'));
        return redirect(route('admin.keywords.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keyword  $keyword
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keyword $keyword)
    {
        $keyword->delete();
    }
}
