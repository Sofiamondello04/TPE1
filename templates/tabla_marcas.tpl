{include file="header.tpl"}
<table class="table">
    <thead>
        <tr>
            <td>{$nombre}</td>
            {if isset($smarty.session.USER_EMAIL)}
                <td>{$borrar}</td>
                <td>{$editar}</td>
            {/if}
        </tr>
    </thead>
    <tbody>
        {foreach from=$marcas item=$marca}           
            <tr><td>{$marca->nombre_marca}</td>
            {if isset($smarty.session.USER_EMAIL)}
                <td><a href='deleteBrand/{$marca->id_m}' type='button' class='btn btn-danger'>{$borrar}</a></td>
                <td><a href='goEditBrand/{$marca->id_m}' type='button' class='btn btn-danger'>{$editar}</a></td>
            {/if}
            </tr>
        {/foreach}
    </tbody>
</table>
        

{include file="footer.tpl"}