<?php

namespace App\Http\Livewire\Admin;


use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Category;

class AdminCategoryAddComponent extends Component
{

    public $name;
    public $slug;

    public function generateslug()
    {


     $this->slug = Str::slug($this->name);


    }

    public function storeCategory(){


        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message' , 'Kategori Başarıyla Eklendi!');

    }

    public function render()
    {


        return view('livewire.admin.admin-category-add-component')->layout('layouts.admin');

    }
}
