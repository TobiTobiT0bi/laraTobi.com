<?php

namespace App\Http\Requests;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:5|max:100',
            'description' => 'required|string|min:1',
            'price' => 'required|integer|min:1',
            'brand_id' => 'required|integer'
        ];
    }

    /**
     * Handle the request after validation.
     *
     * @return void
     */
    public function handle()
    {
        // Crea un nuevo usuario
        /* Product::create([
            'title' => $this->validated()['title'],
            'description' => $this->validated()['description'],
            'price' => $this->validated()['price'],
            'brand_id' => $this->validated()['brand_id']
        ]); */

        // Redirige a la página de éxito
        //return redirect()->route('users.index');
    }
}
