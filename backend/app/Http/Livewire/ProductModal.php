<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductModal extends Component
{

    public $showModal = false;
    public $submit = 'create';

    public $stones = [];
    public $stone_list = [
        ['id'=>1, 'name'=>'stone_1'],
        ['id'=>2, 'name'=>'stone_2'],
        ['id'=>3, 'name'=>'stone_3'],
        ['id'=>4, 'name'=>'stone_4'],
        ['id'=>5, 'name'=>'stone_5'],
        ['id'=>6, 'name'=>'stone_6'],
        ['id'=>7, 'name'=>'stone_7'],
    ];

    public function mount()
    {
        $this->reset('stones');
    }

    protected $listeners = ['create', 'edit', 'addStones'];

    public function addStones($type=1)
    {
        $this->stones[] = [
            'type' => $type,
            'stone_id' => 5,
            'name' => null,
        ];
    }

    public function delStones()
    {
        array_pop($this->stones);
    }

    public function create()
    {
//        $this->reset('stones');
//        $this->resetErrorBag();
//        $this->submit = 'create';

        $this->showModal = true;
    }

    public function submit()
    {
//        $this->showModal = false;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.product-modal');
    }
}
