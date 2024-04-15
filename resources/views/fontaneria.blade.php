<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href = "/css/pag.css">
    <title>Document</title>
</head>
<body>
<header>
        @include('includes.navbar')
    </header>
<div class="container">
    <h1>Fontaneria</h1>
</div>
    <div class="container">
        <div class="product">
            <img style="width: 70%;" src="data:image/jpeg;base64,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" alt="Producto 1">
            <h3>Grifo de Cocina</h3>
            <p>Grifo monomando para cocina con acabado cromado.</p>
            <p>Precio: $45.99</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="data:image/jpeg;base64,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" alt="Producto 2">
            <h3>Tubo PVC 2 Pulgadas</h3>
            <p>Tubo de PVC rigido de 2 pulgadas, longitud 3 metros.</p>
            <p>Precio: $8.75</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="data:image/jpeg;base64,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" alt="Producto 2">
            <h3>Sifon para Lavabo</h3>
            <p>Sifon cromado para lavabo con sistema antiolor.</p>
            <p>Precio: $12.50</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img style="width: 70%;" src="data:image/jpeg;base64,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" alt="Producto 2">
            <h3>Cinta de Teflon</h3>
            <p>Cinta de teflon para sellado de roscas de tuberias.</p>
            <p>Precio: $2.99</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img style="width: 70%;" src="data:image/jpeg;base64,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" alt="Producto 2">
            <h3>LLave de Paso</h3>
            <p>LLave de paso para bronce de 1/2 pulgada con palanca</p>
            <p>Precio: $18.25</p>
            <button>Comprar</button>
        </div>
    </div>        
</body>
<footer>
    @include('includes.footer')
</footer>
</html>