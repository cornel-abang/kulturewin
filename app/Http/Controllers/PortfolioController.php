<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Http\Requests\EditPortfolioRequest;
use App\Http\Requests\SubmitPortfolioRequest;

class PortfolioController extends Controller
{
    public function createPortfolioForm()
    {
        return view('dash.portfolio.create');
    }

    public function submitPortfolioForm(SubmitPortfolioRequest $request)
    {
        $image = $this->uploadImage($request->fe_image);
        $data = $request->validated();
        $data['fe_image'] = $image;

        Portfolio::create($data);

        session()->flash('portfolio_created', true);

        return redirect()->route('portfolio.index');
    }

    public function portfolioIndex()
    {
        $portfolio = Portfolio::all();

        return view('dash.portfolio.index', compact('portfolio'));
    }

    public function fetchPortfolio(int $id)
    {
        $portfolio = Portfolio::find($id);

        return view('dash.portfolio.edit', compact('portfolio'));
    }

    public function updatePortfolio(int $id, EditPortfolioRequest $request)
    {
        $portfolio = Portfolio::find($id);
        $data = $request->validated();
       
        if ($request->hasFile('fe_image')) {
            $image = $this->uploadImage($request->fe_image);
            $data['fe_image'] = $image;
        }

        $portfolio->update($data);

        session()->flash('portfolio_updated', true);

        return redirect()->route('portfolio.index');
    }

    public function deletePortfolio(int $id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();

        session()->flash('portfolio_deleted', true);

        return redirect()->route('portfolio.index');
    }
}