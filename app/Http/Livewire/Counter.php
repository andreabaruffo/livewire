<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $counter = 0;
    public $incrementNumber = 0;

    public function increment(){
        $this->counter++;
    }
    public function decrease(){
        $this->counter--;
    }

    public function incrementByNumber($number){
        $this->counter += $number;
    }

    public function decreaseByNumber($number){
        $this->counter -= $number;
    }

    public function incrementByInputNumber(){
        $this->counter += $this->incrementNumber;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
