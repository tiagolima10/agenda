<x-layout title='Visualizar Agenda'>
    <main>
        <!-- Tela de visualização dos contatos -->
        <h1 style="font-family: Arial, Helvetica, sans-serif; font-weight: bold" >Contato</h1>
        <div id="colunas">
        <label>Nome: {{$agenda->name}}</label><br>
        <label>Telefone: {{$agenda->phone}}</label><br>  
        </div>
    </main>
    
</x-layout>