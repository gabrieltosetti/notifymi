@component('mail::message')
# Bem-vindo ao sistema Notify-Mi :)

Para acompanhar seu pedido

- Acesse nosso site através do botão abaixo
- Clique em Login
- Preencha seu usuário e senha que acabou de criar
- Acompanhe seus pedidos sem stress

@component('mail::button', ['url' => 'http://localhost:8000/'])
Clique em mim!
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
