<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PasswordGenerator extends Component
{
    public $generatedpwd,$password,$length;
    public function render()
    {
        $this->generatedpwd;
        return view('livewire.password-generator');
    }

    public function generate()
    {
        $this->validate([
            'password'=>'required',
            'length'=>'required|numeric|max:50'
        ]);


        $length = $this->length;

        if($this->password === 'alph')
        {
            function rand_string( $length ) {
                $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+|{}[]";
                return substr(str_shuffle($chars),0,$length);
            }

            $this->generatedpwd = rand_string($length);
        }

        if ($this->password === 'numeric' ) {
            function rand_string( $length ) {
                $chars = "1234567890";
                return substr(str_shuffle($chars),0,$length);
            }

            $this->generatedpwd = rand_string($length);
        }

        if ($this->password === 'mix' ) {
            function rand_string( $length ) {
                $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
                return substr(str_shuffle($chars),0,$length);
            }

            $this->generatedpwd = rand_string($length);
        }

       // dd('here');
    }
}
