{{--Component Pai--}}
<div class="p-6 bg-gray-200 container mx-auto w-1/2">
    <x-notifications />

    <h1 class="text-2xl text-center">Meus Componentes</h1>

    {{-- Componente filho (reuso) --}}
    {{-- Ao passar um paramentro (:count="$defaultCounter") para o componente filho, o mesmo se torna prioridade de inicialização do atributo --}}
    {{-- Prioridade maxima depois do mount --}}
{{--    <livewire:contador :count="$defaultCounter" />--}}

{{--    <livewire:form />--}}

    <livewire:find-zipcode />
</div>
