<div class="bg-blue-200 m-4 p-4">
    <h1 class="text-1xl font-bold">{{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Criando em: {{ $user->created_at->format('d/m/Y H:i') }}</p>
</div>
