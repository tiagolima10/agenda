<x-layout title='Listar Contatos'>

    <!-- Tela Principal do projeto, onde se encontram as informações de todos os contatos e suas opções -->

    <main>

    <h1 style="font-family: Arial, Helvetica, sans-serif; font-weight: bold" >Listar Contatos</h1>

    @include('components/flash-message')
    <div>
        <table>
            <thead>
                <tr class="flex-row">
                    <th>ID</th>
                    <th>NOME</th>
                    <th>TELEFONE</th>
                    <th>OPÇÕES</th>
                </tr>
            </thead>
    
            <tbody>
                @foreach ($agendas as $agenda)
                    <tr>
                        <td>{{ $agenda->id }}</td>
    
                        <td>{{ $agenda->name }}</td>
    
                        <td>{{ $agenda->phone }}</td>
    

                        
                        <td style="display: flex">
                            <!-- Botão para Visualizar -->
                            <button type="button" class="btn btn-success" >
                                <a href="{{ route('agendas.show', $agenda->id)}}" style="text-decoration: none">Visualizar</a>
                            </button>&nbsp;
    
                            <!-- Botão para Editar -->
                            <button type="button" class="btn btn-light">
                                <a href="{{ route('agendas.edit', $agenda->id)}}" style="text-decoration: none">Editar</a>
                            </button>&nbsp;
                            
                            <form action="{{ route('agendas.destroy', $agenda->id)}} " method="POST">
                                @csrf
                                @method('DELETE')
                                <!-- Botão para Deletar -->
                                <button type="submit" class="btn btn-danger" style="color: black; text-decoration: none; font-weight: bold;">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    </main>
    
</x-layout>