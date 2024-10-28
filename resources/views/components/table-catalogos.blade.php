
@isset($items)
<div class="page-header">
    <h2 class="post-title" id="cat-{{$title}}"><a href="#cat-{{$title}}">{{$title}}</a></h2>
</div>
<div class="post-content pt-4">
    <div class="woocommerce">
        <table class="shop_table shop_table_responsive" cellspacing="0">
            <thead>
                <tr>
                    <th class="product-name">Producto</th>
                    <th class="product-description">Descripción</th>
                    <th class="product-size">Tamaño</th>
                    <th class="product-link">PDF</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($items as $item)
                <tr class="woocommerce-cart-form__cart-item cart_item">
                    <td class="product-name" data-title="Producto">
                        {!!$item['name']!!}
                    </td>
                    <td class="product-description" data-title="Descripción">
                        {!!$item['description']!!}
                    </td>
                    <td class="product-size" data-title="Tamaño">
                        {!!$item['size']!!}
                    </td>
                    <td class="product-link" data-title="PDF">
                        <a href="{{$item['link']}}" title="Descargar" rel="nofollow noopener" target="_blank">
                            @include('components.svg.pdf')
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endisset
