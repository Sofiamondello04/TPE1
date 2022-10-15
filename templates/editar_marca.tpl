{include file="header.tpl"}

<h2>{$titulo}</h2>

<form action="editBrand" method="POST">
    <input type="hidden" value="{$id}" name="id" id="id" required>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>{$nombre}</label> 
                    <input name="nombre_marcaE" type="text" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <button type="submit" class="btn btn-primary mt-2">{$editar}</button>
            </div>
        </div>     
</form>
