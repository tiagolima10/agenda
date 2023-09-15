<x-layout title='Editar Contatos'>

    <!-- Página para Edição do contato -->
    <main>

    <h1>Editar Contato</h1>

    <div>
        <!-- Form para Edição do contato -->
        <form action="{{ route('agendas.update', $agenda->id) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- Input para a mostragem do nome -->
            <label>Nome: </label>
            <input type="text" name="name" id="name" placeholder="Nome" value="{{ $agenda->name }}"><br><br>
    
            <!-- nput para a mostragem do telefone -->
            <label>Fone: &nbsp;</label>
            <input type="text" name="phone" id="phone" placeholder="Telefone" value="{{ $agenda->phone }}"><br><br>
            
            <!-- Botão para editar -->
            <button type="submit" class="btn btn-light">Editar</button>
        </form>
    </div>
    
    </main>
    
</x-layout>