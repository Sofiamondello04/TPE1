<!-- formulario de alta de producto-->
{include file="header.tpl"}
<h3>{$titulo}</h3>

<form action="addProduct" method="POST" class="my-4">

    <div class="row">
        <div class="col-9">
            <div class="form-group">
            
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control">
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>Marca</label>
                <select name="id_marca" class="form-control">
                    {foreach from=$marcas item=$marca}
                        <option value="{$producto->id_marca}">{$marca->nombre_marca}</option>
                    {/foreach}
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Precio</label>
        <input name="precio" type="number" class="form-control">
    </div>

    <div class="form-group">
        <label>Talle</label>
        <input name="talle" type="text" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
