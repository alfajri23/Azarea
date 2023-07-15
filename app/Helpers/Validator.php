<?php

namespace App\Helpers;

class Validator {

    public static function message(){
        return $messages = [
            'mimes' => ':attribute tipe yang diterima: :values',
            'max' => 'Ukuran maksimal :attribute :values',
            'required' => ':attribute harus diisi.',
        ];


    }
}

?>