{include file="header.tpl"}

<h3>{$titulo}</h3>

<form action="editProduct" method="POST">
<input type="hidden" value="{$id}" name="id" id="id" required>
<div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombre</label>
               
                <input name="nombreE" type="text" class="form-control" value="{$producto->nombre}">
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>Marca</label>
                <select name="id_marcaE" class="form-control" value="{$producto->nombre_marca}">
                    {foreach from=$marcas item=$marca}
                        <option value="{$marca->id_m}">{$marca->nombre_marca}</option>
                    {/foreach}
                    
               
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Precio</label>
        <input name="precioE" type="number" class="form-control" value="{$producto->precio}">
    </div>

    <div class="form-group">
        <label>Talle</label>
        <input name="talleE" type="text" class="form-control" value="{$producto->talle}">
    </div>
<input type="submit" class="btn btn-primary" value="Editar">
    
</form>
