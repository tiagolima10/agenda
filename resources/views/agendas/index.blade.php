<x-layout title='Listar Contatos'>

    <!-- Tela Principal do projeto, onde se encontram as informações de todos os contatos e suas opções -->

    <style>
        /* Estilos para o modal */
        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%; 
            transform: translate(-50%, -50%); /* Centraliza o modal corretamente */
            width: 400px; 
            height: 200px;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            z-index: 9999;
            margin: 0;
            padding: 0;
        }
    
        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            overflow: auto; /* Barra de rolagem */
        }
    
        /* Estilos para os botões do modal */
        #confirmDelete,
        #cancelDelete {
            margin: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
        .modal {
            width: 80%;
            height: auto;
        }

        table {
            font-size: 80%;
        }
}
    </style>

    <main>

        <h1>Listar Contatos</h1>

        @include('components/flash-message')
        <div>
            <table class="table-responsive">
                <thead>
                    <tr class="flex-row">
                        <th style="text-align: center; vertical-align: middle;">ID</th>
                        <th style="text-align: center; vertical-align: middle;">NOME</th>
                        <th style="text-align: center; vertical-align: middle;">TELEFONE</th>
                        <th style="text-align: center; vertical-align: middle;">OPÇÕES</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach ($agendas as $agenda)
                        <tr>
                            <td style="text-align: center; vertical-align: middle;">{{ $agenda->id }}</td>
                            <td style="text-align: center; vertical-align: middle;">
                                <?php
                                // Divide a string do nome usando o espaço em branco como delimitador
                                $nomeDividido = strtok($agenda->name, ' ');
                            
                                // Exibe apenas a parte inicial do nome (até o primeiro espaço em branco)
                                echo htmlentities($nomeDividido);
                                ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle;">{{ $agenda->phone }}</td>
                            <td style="display: flex; flex-direction: row; justify-content: center;">

                                <!-- Botão para Visualizar -->
                                <button type="button" class="btn btn-success" title="Visualizar">
                                    <a href="{{ route('agendas.show', $agenda->id)}}" style="text-decoration: none">&#x1F441;</a>
                                </button>


                                <!-- Botão para Editar -->
                                <button type="button" class="btn btn-light" title="Editar">
                                    <a href="{{ route('agendas.edit', $agenda->id)}}" style="text-decoration: none">&#x270F;</a>
                                </button>


                                <form action="{{ route('agendas.destroy', $agenda->id)}}" method="POST" id="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <!-- Botão para Excluir -->
                                    <button type="button" class="btn btn-danger" style="color: black; text-decoration: none; font-weight: bold;" title="Excluir" onclick="confirmDelete()">&#x1F5D1;</button>
                                </form>

                                <div id="myModal" class="modal">
                                    <div class="modal-content">
                                        <p>Tem certeza de que deseja excluir este registro?</p>
                                        <button id="confirmDelete">Confirmar</button>
                                        <button id="cancelDelete">Cancelar</button>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    
    <script>
        const modal = document.getElementById('myModal');
    const confirmButton = document.getElementById('confirmDelete');
    const cancelButton = document.getElementById('cancelDelete');

    confirmButton.addEventListener('click', function () {
        // Excluir
        document.getElementById('delete-form').submit();
    });

    cancelButton.addEventListener('click', function () {
        // Cancelar
        modal.style.display = 'none';
    });

    function confirmDelete() {
        // Mostrar o Modal
        modal.style.display = 'block';
    }

    </script>

</x-layout>
