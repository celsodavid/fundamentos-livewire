{{--Component Pai--}}
<div class="bg-gray-300 container mx-auto w-1/2">
    <h1>Meus Componentes</h1>

    {{-- Componente filho (reuso) --}}
    {{-- Ao passar um paramentro (:count="$defaultCounter") para o componente filho, o mesmo se torna prioridade de inicialização do atributo --}}
    {{-- Prioridade maxima depois do mount --}}
    <livewire:contador :count="$defaultCounter" />
</div>
