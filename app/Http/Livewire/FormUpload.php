<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FormUpload extends Component
{
    use WithFileUploads;

    public string $name = '';

    public string $email = '';

    public string $message = '';

    public $file;

    public array $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public array $messages = [
        'name.required' => 'O campo nome é obrigatório',
        'email.required' => 'O campo e-mail é obrigatório',
        'email.email' => 'O campo e-mail deve ser um e-mail válido',
        'message.required' => 'O campo mensagem é obrigatório',
        'message.min' => 'O campo mensagem deve ter no mínimo 10 caracteres',
    ];

    public function submit(): void
    {
        $this->validate();

        $fileName = sprintf('%s.%s', time(), $this->file->extension());

        // esse item salva no banco
        $file = $this->file->storeAs('photos', $fileName, 'uploads');

        // como mostra no frontend
        $fileUrl = config('app.url') . "/uploads/{$file}";

        dump("Arquivo salvo com sucesso: " . $file);

        dd("File URL: {$fileUrl}");

        $this->emit('message::success', [
            'name' => $this->name,
        ]);

        $this->reset('name', 'email', 'message');

        $this->dispatchBrowserEvent('fildFocus', ['element' => 'name']);
    }

    public function render()
    {
        return view('livewire.form-upload');
    }
}
