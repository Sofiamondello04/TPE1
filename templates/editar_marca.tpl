{include file="header.tpl"}

<h2>{$titulo}</h2>

<form action="editBrand" method="POST">
<input type="hidden" value="{$id}" name="id" id="id" required>
<div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombre</label>
               
                <input name="nombre_marcaE" type="text" class="form-control">
            </div>
        </div>
        
<input type="submit" class="btn btn-primary" value="Editar">
    
</form>
