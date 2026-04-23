<?php

namespace App\Livewire\Front\Components;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;

class ProjectsComponent extends Component
{
    public function render()
    {
        return view('livewire.front.components.projects-component',[
            'projects' => Project::get(),
            'categories' => Category::get()
        ]);
    }
}
