<x-layout title='Visualizar Agenda'>
    <style>
        /* Quebrar texto a cada 20 caracteres */
        label.break-lines {
            overflow-wrap: break-word;
            max-width: 20ch;
            display: inline-block;
        }
    </style>
    
    <main>
        <!-- Tela de visualização dos contatos -->
        <h1 style="font-family: Arial, Helvetica, sans-serif; font-weight: bold">Contato</h1>
        <hr style="max-width: 80%; margin: 20px auto;">
        <div id="colunas">
            <label style="font-weight: bold" class="break-lines">Nome: {{$agenda->name}}</label><br>
            <label style="font-weight: bold">Telefone: {{$agenda->phone}}</label><br>  
        </div>
    </main>
</x-layout>
