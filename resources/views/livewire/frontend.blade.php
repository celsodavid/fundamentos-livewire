{{--Component Pai--}}
<div class="p-6 bg-gray-200 container mx-auto">
    <x-notifications />

    <h1 class="text-2xl text-center">Meus Componentes</h1>

    {{-- Componente filho (reuso) --}}
    {{-- Ao passar um paramentro (:count="$defaultCounter") para o componente filho, o mesmo se torna prioridade de inicialização do atributo --}}
    {{-- Prioridade maxima depois do mount --}}
{{--    <livewire:contador :count="$defaultCounter" />--}}

{{--    <livewire:form />--}}

{{--    <livewire:find-zipcode />--}}

{{--    @foreach($users as $user)--}}
{{--         ao chamar varios componentes dentro de um loop definir um :wire:key --}}
{{--        <livewire:user-card :wire:key="'users-' . $user->id" :user-id="$user->id" />--}}
{{--    @endforeach--}}

{{--    <livewire:form-upload />--}}

{{--    @if($screen === 'list')--}}
{{--        <livewire:customer-list />--}}
{{--    @endif--}}

{{--    @if($screen === 'add')--}}
{{--        <livewire:customer-add />--}}
{{--    @endif--}}

{{--    @if($screen === 'edit')--}}
{{--        <livewire:customer-edit :customer="$customer" />--}}
{{--    @endif--}}

    <livewire:product-list />
</div>
