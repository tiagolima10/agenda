<x-layout title='Criar Contatos'>

    <!-- Página para Cadastro do contato -->
    <main>

        <h1 style="font-family: Arial, Helvetica, sans-serif; font-weight: bold" >Adicionar Contato</h1>

        <div class="form-container">

            <!-- Form para Cadastro do contato -->
            <form action="{{ route('agendas.store')}}" method="POST">
                @csrf
                <label style="font-weight: bold">Nome: </label>
                <input type="text" name="name" id="name" placeholder="Nome"><br><br>
        
                <label style="font-weight: bold">Fone:&nbsp;&nbsp;</label>
                <input type="text" name="phone" id="phone" placeholder="Telefone"><br><br>
        
                <button type="submit" class="btn btn-success" style="font-weight: bold;">Adicionar</button>
            </form>
        </div>
        
    </main>
        
</x-layout>