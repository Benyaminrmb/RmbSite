<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class TinyAbout extends Component
{
    public string $greeting;

    public function mount()
    {
        $this->greeting = __('about.greeting');
    }
    public function render()
    {
        return view('livewire.sections.tiny-about');
    }

    public function downloadCv($lang): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        if($lang==='fa')
            $file="Benyamin's resume.pdf";
        else
            $file="Benyamin's resume-en.pdf";
        return response()->download(public_path("cvs/$file"));
    }
}
