<h2>Nuevo contacto</h2>

<p><strong>Nombre:</strong> {{ $data['name'] }}</p>

<p><strong>Email:</strong> {{ $data['email'] }}</p>

<p><strong>WhatsApp:</strong>
    {{ $data['phone'] ?? 'No especificado' }}
</p>

<p><strong>Proyecto:</strong>
    {{ $data['project_type'] ?? 'No especificado' }}
</p>

<p><strong>Mensaje:</strong></p>

<p>
    {{ $data['message'] }}
</p>