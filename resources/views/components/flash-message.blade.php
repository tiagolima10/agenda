<!-- Flash para mostra de mensagens de erro e sucesso -->

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

@if(session('danger'))
    <p style="color: red">{{ session('danger') }}</p>
@endif