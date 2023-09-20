<x-layout title='Editar Contatos'>

    <!-- Página para Edição do contato -->
    <main>

    <h1>Editar Contato</h1>
    <hr style="max-width: 80%; margin: 20px auto;">

    <div>
        <!-- Form para Edição do contato -->
        <form action="{{ route('agendas.update', $agenda->id) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- Input para a mostragem do nome -->
            <label>Nome: </label>
            <input type="text" name="name" id="name" placeholder="Nome" value="{{ $agenda->name }}" required><br><br>
    
            <!-- Input para a mostragem do telefone -->
            <label>Fone: &nbsp;</label>
            <input type="text" name="phone" id="phone" placeholder="Telefone" value="{{ $agenda->phone }} " required><br><br>
            
            <div style="display: flex; justify-content: center;">
                <button type="submit" class="btn btn-light">Editar</button>
            </div>
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