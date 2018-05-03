<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'title' => 'required',
          'description' => 'required',
          'price' => 'required|numeric',
          'manufacturer_id' => 'required',
          'category_id' => 'required',
          'quantity' => 'required|numeric',
          'image_url' => 'required',
        ];
    }
    public function messages(){
      return[
        'title.required' => 'Prasau ivesti produkto pavadinima',
        'description.required' => 'Prasau ivesti produkto aprasyma',
        'price.required' => 'Prasau ivesti produkto kaina',
        'manufacturer_id.required' => 'Prasau pasirinkti produkto gamintoja',
        'category_id.required' => 'Prasau pasirinkite produkto kategorija',
        'quantity.required' => 'Prasau ivesti produkto kieki',
        'image_url.required' => 'Prasau ivesti produkto nuotraukos adresa',
      ];
    }
}
