<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductModal extends Component
{

    public $showModal = false;
    public $submit = 'create';

    public $formData = [
        'id' => null,
        'company_id' => '',
        'name' => '',
        'model_set' => '',
        'fax_memo' => '',
        'tag' => ['1','2','3'],

        'weight' => '',

        'class' => '',
        'material' => 1,
        'color' => 5,
        'style' => 1,

        'status' => 1,

        'price_factory' => '',
        'price_cubic' => '',
        'price_stone' => '',
        'weight_minus' => '',
        'memo' => '',
    ];

    public $price = [
        ['id'=>1, 'name'=>'1grade','value'=>0],
        ['id'=>2, 'name'=>'2grade','value'=>0],
        ['id'=>3, 'name'=>'3grade','value'=>0],
        ['id'=>4, 'name'=>'4grade','value'=>0],
    ];

    public $count = 0;

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
        $this->reset('count');
    }

    protected $listeners = ['create', 'edit', 'addStones'];

    public function addStones($type=1)
    {
        $this->count ++;
        $this->stones[] = [
            'type' => $type,
            'stone_id' => '',
            'name' => null,
            'main' => false,
            'amount' => '',
            'weight' => 0,
            'price_buy' => 0,
            'price' => $this->price,
            'weight_apply' => 0,
            'pay_apply' => 1,
            'memo' => '',
        ];
//        dd($this->stones);
    }

    public function create()
    {
//        $this->reset('stones');
//        $this->reset('count');
//        $this->resetErrorBag();
//        $this->submit = 'create';

        $this->showModal = true;
    }

    public function submit()
    {
        $this->reset('stones');
        $this->reset('count');
        $this->resetErrorBag();
        $this->submit = 'create';

//        $this->showModal = false;
//        dd($this->stones);
    }

    public function dehydrateShowModal($value)
    {
//        if($value === false) {
//            $this->stones = [];
//        }
//        if(count($value) > 0) {
////            dump($this->stones);
//            $this->stones = [];
////            dump($value);
////            dump($this->stones);
//        }
    }

    public function updatedShowModal($data)
    {
//        if($data === false) {
//            $this->reset('stones');
//            $this->count = 0;
//        }
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
