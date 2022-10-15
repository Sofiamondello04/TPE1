{include file="header.tpl"}
<table class="table">
    <thead>
        <tr>
            <td>Nombre</td>
            <td>Borrar</td>
            <td>Editar</td>
        </tr>
    </thead>
    <tbody>
        {foreach from=$marcas item=$marca}
            
            <tr><td>{$marca->nombre_marca}</td>
                <td><a href='deleteBrand/{$marca->id_m}' type='button' class='btn btn-danger'>Borrar</a></td>
                <td><a href='goEditBrand/{$marca->id_m}' type='button' class='btn btn-danger'>Editar</a></td>
            </tr>
        {/foreach}
    </tbody>
</table>
        

{include file="footer.tpl"}