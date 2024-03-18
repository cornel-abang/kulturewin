<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\Artist;
use App\Http\Requests\EditFAQRequest;
use App\Http\Requests\CreateFAQRequest;

class FAQController extends Controller
{
    public function createFAQForm() 
    {
        return view('dash.faq.create');
    }

    public function submitCreateFAQForm(CreateFAQRequest $request)
    {
        FAQ::create($request->validated());

        session()->flash('faq_created', true);

        return redirect()->route('faq.index');
    }

    public function allFAQ()
    {
        $faqs = FAQ::all();

        return view('dash.faq.index', compact('faqs'));
    }

    public function fetchFAQ(int $id)
    {
        $faq = FAQ::find($id);

        return view('dash.faq.edit', compact('faq'));
    }

    public function updateFAQ(int $id, EditFAQRequest $request)
    {
        $faq = FAQ::find($id);
        $faq->update($request->validated());

        session()->flash('faq_edited', true);

        return redirect()->route('faq.index');
    }

    public function deleteFAQ(int $id)
    {
        $faq = Faq::find($id);
        $faq->delete();

        session()->flash('faq_deleted', true);

        return redirect()->route('faq.index');
    }
}