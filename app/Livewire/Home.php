<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\PortfolioCategory;
use App\Models\PortfolioItem;

class Home extends Component
{
    public $selectedFilter = 'all';
    public $selectedPortfolioItem = null;
    public $showModal = false;

    public function render()
    {
        $portfolioCategories = PortfolioCategory::with(['portfolioItems.itemDetails'])
            ->where('is_active', true)
            ->get();

        $portfolioItems = PortfolioItem::with(['category', 'itemDetails'])
            ->where('is_active', true)
            ->when($this->selectedFilter != 'all', function ($query) {
                $query->whereHas('category', function ($q) {
                    $q->where('id', $this->selectedFilter);
                });
            })
            ->get();

        return view('livewire.home', [
            'portfolioCategories' => $portfolioCategories,
            'portfolioItems' => $portfolioItems
        ]);
    }

    public function filterPortfolio($filter)
    {
        $this->selectedFilter = $filter;
    }

    public function showDetails($portfolioId)
    {
        $this->selectedPortfolioItem = PortfolioItem::with(['category', 'itemDetails'])
            ->where('is_active', true)
            ->find($portfolioId);
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->selectedPortfolioItem = null;
    }
}