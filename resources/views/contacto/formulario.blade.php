@include('resources')


<h1>Formulario de contacto</h1>

<form action="/contacto" method="POST" role="form">
    {{ csrf_field() }}
    <label>nombre</label><input type="text" name="nombre" id="nombre">
    <label>mensaje</label><textarea name="mensaje" id="mensaje"></textarea>
        <input type="submit">

</form>