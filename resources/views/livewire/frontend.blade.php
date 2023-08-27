{{--Component Pai--}}
<div>
    <h1>Meus Componentes</h1>

    {{-- Componente filho (reuso) --}}
    {{-- Ao passar um paramentro para o componente filho, o mesmo se torna prioridade de inicialização do atributo --}}
    {{-- Prioridade maxima depois do mount --}}
    <livewire:contador :count="$defaultCounter" />
</div>
