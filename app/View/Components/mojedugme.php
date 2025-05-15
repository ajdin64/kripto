<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MojeDugme extends Component
{
    public $text;
    public $url;

    /**
     * Kreiraj novu instancu komponente.
     */
    public function __construct($text, $url)
    {
        $this->text = $text;
        $this->url = $url;
    }

    /**
     * Dobij sadržaj koji predstavlja komponentu.
     */
    public function render(): View|Closure|string
    {
        // Prosleđivanje promenljive $text u Blade šablon
        return view('components.mojedugme');
    }
}
