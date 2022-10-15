<!-- formulario de alta de producto-->
{include file="header.tpl"}
<h3>{$titulo}</h3>

<form action="addProduct" method="POST" class="my-4">

    <div class="row">
        <div class="col-9">
            <div class="form-group">
            
                <label>{$nombre}</label>
                <input name="nombre" type="text" class="form-control" required>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>{$marca}</label>
                <select name="id_marca" class="form-control" required>
                    {foreach from=$marcas item=$marca}
                        <option value="{$marca->id_m}">{$marca->nombre_marca}</option>
                    {/foreach}
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>{$precio}</label>
        <input name="precio" type="number" class="form-control" required>
    </div>

    <div class="form-group">
        <label>{$talle}</label>
        <input name="talle" type="text" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary mt-2">{$guardar}</button>
</form>
