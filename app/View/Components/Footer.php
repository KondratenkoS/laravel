<?php
namespace App\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    public function render():string
    {
        return view('components.footer', [
            'str' => 'asd asd as a ',
        ]);
    }
}
