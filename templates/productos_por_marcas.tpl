{include file="header.tpl"}
<table class="table">
    <thead>
        <tr>
            <td>{$nombre}</td>
            <td>{$precio}</td>
            <td>{$talle}</td>
            <td>{$marca}</td>
            <td>{$verDetalle}</td>
            {if isset($smarty.session.USER_EMAIL)}
                <td>{$borrar}</td>
                <td>{$editar}</td>
            {/if}
        </tr>
    </thead>
    <tbody>
        {foreach from=$productosMarca item=$producto}
            <tr><td>{$producto->nombre}</td>
                <td>{$producto->precio}</td>
                <td>{$producto->talle}</td>
                <td>{$producto->nombre_marca}</td> <!--Para este caso use el INNER JOIN en getProductsOfBrands-->
                <td><a href='goViewProduct/{$producto->id}' type='button' class='btn btn-danger'>{$detalle}</a></td>
                {if isset($smarty.session.USER_EMAIL)}
                    <td><a href='deleteProduct/{$producto->id}' type='button' class='btn btn-danger'>{$borrar}</a></td>
                    <td><a href='goEditProduct/{$producto->id}' type='button' class='btn btn-danger'>{$editar}</a></td>
                {/if}
            </tr>
        {/foreach}
    </tbody>
</table>



{include file="footer.tpl"}