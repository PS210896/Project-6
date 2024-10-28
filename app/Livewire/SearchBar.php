<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Internship;

class SearchBar extends Component
{
    public $searchTerm;
    public $search = "";

    public function render()
    {
        $results = [];

        if (strlen($this->search) >= 1){
            $results = Internship::where('course','like','%'.$this->search.'%')->limit(5)->get();
        }

        return view('livewire.search-bar', [
            'internships' => $results
        ]);
    }
}
