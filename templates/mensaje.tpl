{include file="header.tpl"}
<!--Para este caso use el INNER JOIN en getAProduct-->
<h3>{$titulo}</h3>
<ul>
    <li>{$producto->nombre}</li>
    <li>{$producto->precio}</li>
    <li>{$producto->talle}</li>
    <li>{$producto->nombre_marca}</li>
</ul>





{include file="footer.tpl"}