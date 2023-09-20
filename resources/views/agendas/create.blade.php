<x-layout title='Criar Contatos'>

    <!-- Página para Cadastro do contato -->
    <main>

        <h1 style="font-family: Arial, Helvetica, sans-serif; font-weight: bold" >Adicionar Contato</h1>

        <div class="form-container">
    <!-- Form para Cadastro do contato -->
    <form action="{{ route('agendas.store')}}" method="POST">
        @csrf
        <label style="font-weight: bold">Nome: </label>
        <input type="text" name="name" id="name" placeholder="Nome" required><br><br>
        <!-- Adicione o atributo 'required' ao campo Nome -->

        <label style="font-weight: bold">Fone:&nbsp;&nbsp;</label>
        <input type="text" name="phone" id="phone" placeholder="Telefone" required><br><br>
        <!-- Adicione o atributo 'required' ao campo Telefone -->

        <button type="submit" class="btn btn-success" style="font-weight: bold;">Adicionar</button>
    </form>
</div>
        
    </main>
        
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const phoneInput = document.getElementById('phone');

        phoneInput.addEventListener('input', function (e) {
        const cleanedValue = e.target.value.replace(/\D/g, ''); // Remove caracteres não numéricos

        let formattedValue = '';

                if (cleanedValue.length <= 2) {
                    // Dois primeiros dígitos dentro dos parênteses
                    formattedValue = '(' + cleanedValue;
                } else if (cleanedValue.length <= 11) {
                    // Formata como (00) 00000-0000 Convencional
                    formattedValue = '(' + cleanedValue.substring(0, 2) + ') ' +
                    cleanedValue.substring(2, 7) + '-' + cleanedValue.substring(7, 11);
                } else {
                    // Limita a 11 dígitos 
                    formattedValue = '(' + cleanedValue.substring(0, 2) + ') ' +
                    cleanedValue.substring(2, 7) + '-' + cleanedValue.substring(7, 11);
                }

                e.target.value = formattedValue; // Define o valor formatado no campo de entrada
            });
        });
    </script>
    
</x-layout>