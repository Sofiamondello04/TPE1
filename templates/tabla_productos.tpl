{include file="header.tpl"}
<table class="table">
    <thead>
        <tr>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Talle</td>
            <td>Marca</td>
            {if isset($smarty.session.USER_EMAIL)}
            <td>Borrar</td>
            <td>Editar</td>
            {/if}
        </tr>
    </thead>
    <tbody>
        {foreach from=$productos item=$producto}
            <tr><td>{$producto->nombre}</td>
                <td>{$producto->precio}</td>
                <td>{$producto->talle}</td>
                <td>{$producto->nombre_marca}</td>
                {if isset($smarty.session.USER_EMAIL)}
                <td><a href='deleteProduct/{$producto->id}' type='button' class='btn btn-danger'>Borrar</a></td>
                <td><a href='goEditProduct/{$producto->id}' type='button' class='btn btn-danger'>Editar</a></td>
                {/if}
            </tr>
        {/foreach}
    </tbody>
</table>



{include file="footer.tpl"}
