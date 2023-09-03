### Fundamentos Livewire

#### Instalação Livewire
* `composer require livewire/livewire`

### Projetos 
* Componente Contador:
  * `sail art make:livewire contador`
* Componente Frontend:
  * `sail art make:livewire frontend`
* Componente Buscador de CEP:
  * `sail art make:livewire find-zipcode`
* Componente Custome Crud with WireUi Notification Complete:
  * `sail art make:livewire custome-list`
  * `sail art make:model Customer -mf`

### Instalação Tailwind CSS
* [Install TailwindCss](https://jobstreinamentos.com.br/support/knowledgebase.php?article=3)

### Instalação do Livewire WireUi
* [Get-Started](https://livewire-wireui.com/docs/get-started)
  * use `sail composer require wireui/wireui:^2.x-dev`

### Instalação Filament Datatable
* [Tables](https://filamentphp.com/docs/2.x/tables/installation) (Project 4 - Componente Custome Crud with WireUi Notification Complete)
  * `sail composer require filament/tables:"^2.0"`
  * with new projects laravel
    * `sail artisan tables:install`
    * `sail npm install`
    * `sail npm run dev`
  * project laravel exisists
    * `sail npm install alpinejs @alpinejs/focus postcss tailwindcss @tailwindcss/forms @tailwindcss/typography --save-dev`

### Hooks Livewire (Exemplo 1)
* [JS-Hooks](https://laravel-livewire.com/docs/2.x/lifecycle-hooks#js-hooks)
  * Uso no frontend
* [Dispatching Browser Events](https://laravel-livewire.com/docs/2.x/events#browser)
  * Uso no frontend usando o dispatch

### API(s) Utilizada(s)
* Buscado de CEP
  * [ViaCep](https://viacep.com.br/)

### Dicas
* [Livewire Uploads](https://laravel-livewire.com/docs/2.x/file-uploads#basic-upload)
