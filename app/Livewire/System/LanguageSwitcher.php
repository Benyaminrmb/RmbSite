<?php

namespace App\Livewire\System;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class LanguageSwitcher extends Component
{
    public $selectedLanguage = '';
    public string $route = '';

    public function mount()
    {
        $this->selectedLanguage = app()->getLocale();
        $this->route = Route::current()->uri;
       /* $locale='fa';
        dd(preg_match("/^$locale\//", $this->route));
        dd($this->route);*/
    }

    public function render()
    {
        return view('livewire.system.language-switcher');
    }

    public function updateLanguage($selectedLanguage)
    {
        $locales = config('localized-routes.url_locales');
        $newUrl =''; // Start with the current URL

        App::setLocale($selectedLanguage);


        foreach ($locales as $locale) {
            // Check if URL starts with a supported locale and a slash
            if (preg_match("/^$locale\//", $this->route)) {
                $replacement='';
                if($selectedLanguage !== 'en'){
                    $replacement=$locale;
                }

                $newUrl = preg_replace("/^$locale\//",$replacement , $this->route);
                break;
            }
        }

        if($newUrl === ''){
            $newUrl=$selectedLanguage.'/'.$this->route;
        }
        $newUrl='/'.$newUrl;
        // Redirect to the modified URL with the new locale
        $this->redirect(url: $newUrl, navigate: true);
    }
}
