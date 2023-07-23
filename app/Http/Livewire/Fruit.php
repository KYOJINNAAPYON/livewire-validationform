<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FruitName;

class Fruit extends Component
{
    public $name;
    // バリデーションルール
    protected $rules = [
        'name' => 'max:6',
    ];
 
    // バリデーションメッセージ
    protected $messages = [
        'name.max' => '6文字以内でよろしく'
    ];


    public function render()
    {
        return view('livewire.fruit');
    }

    public function submit()
    {
        Fruitname::create([
            "name" => $this->name,
        ]);

        session()->flash('message', '保存しました');
    }

    public function updated($name)
    {
        $this->validateOnly($name);
    }
}
