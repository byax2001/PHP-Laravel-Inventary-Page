<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert2 extends Component
{
    public $talert;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type='info')
    {
        //
        

        switch($type){
            case 'info':
                $talert ='bg-blue-100 border-blue-500 text-blue-700';
                break;
            case 'danger':
                $talert ='bg-red-100 border-red-500 text-red-700';
                break;
            case 'success':
                $talert ='bg-green-100 border-green-500 text-green-700';
                break;
            case 'warning':
                $talert ='bg-orange-100 border-orange-500 text-orange-700';
                break;
            default:
                $talert ='bg-blue-100 border-blue-500 text-blue-700';
        }
        $this->talert = $talert;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert2');
    }
}
