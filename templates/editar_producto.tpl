{include file="header.tpl"}

<h3>{$titulo}</h3>

<form action="editProduct" method="POST">
    <input type="hidden" value="{$id}" name="id" id="id" required>
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>{$nombre}</label>          
                <input name="nombreE" type="text" class="form-control" value="{$producto->nombre}" required>
            </div>
        </div>      
            <div class="form-group">
                <label>{$marca}</label>
                <select name="id_marcaE" class="form-control" required>
                    {foreach from=$marcas item=$marca} 
                        <option value="{$marca->id_m}">{$marca->nombre_marca}</option>
                    {/foreach}             
                </select>
            </div>   
        <div class="form-group">
            <label>{$precio}</label>
            <input name="precioE" type="number" class="form-control" value="{$producto->precio}" required>
        </div>
        <div class="form-group">
            <label>{$talle}</label>
            <input name="talleE" type="text" class="form-control" value="{$producto->talle}" required>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <button type="submit" class="btn btn-primary mt-2">{$editar}</button>
        </div>
    </div>
        
</form>
