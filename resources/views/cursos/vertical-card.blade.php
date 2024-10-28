
<div class="vertical-cards mt-5">
@foreach ($courses as $item)
    <article class="vertical-card">
        <div class="vertical-card__top">
            <div class="vertical-card__cover">
                <picture>
                    <img src="{{$item['image-cover']}}" alt="{{$item['alt-cover'] ?? ''}}" 
                        class="img-fluid card-img-top" width="360" 
                        decoding="async" loading="lazy" fetchpriority="auto" 
                    />
                </picture>
                @isset($item['special'])
                <div class="vertical-card__metadata">
                    <div class="d-inline-block mt-n1">
                        <span class="a-tag bg-color-calabaza color-sonar">
                            <span>{{$item['special']}}</span>
                        </span>
                    </div>
                </div>
                @endisset
            </div>
            <div class="vertical-card__body">
                <h2 class="vertical-card__title">
                    {!!$item['title']!!}
                </h2>
                
                <p class="card__teacher">
                    @foreach ($item['description'] as $description)
                    {!!$description!!}@if(!$loop->last)<br />@endif
                    @endforeach
                </p>

                @isset($item['image-body'])
                <img src="{{$item['image-body']}}" alt="{{$item['alt-body']}}" 
                class="img-fluid card-img-top" 
                    decoding="async" loading="lazy" fetchpriority="auto" 
                />
                @endisset
            </div>
        </div>
        <div class="vertical-card__bottom">

            {{--
            <div>
                <span class="a-tag a-tag--is-hollow bg-gradient-plus-neutral-100 a-tag--plus">
                    <span>GRATIS CON PLUS</span>
                </span>
            </div>
            --}}

            <div class="m-price-tag a-text--small">
                <ul class="text-center">
                    @foreach ($item['prices'] as $price)
                        <li class="block">{!!$price!!}</li>
                    @endforeach
                </ul>
            </div>

            <div class="mt-1">
                <div class="d-flex">
                    @if (!empty($item['mercadopago']))
                    @include('components.mercadopago-payment-button', ['preference_id'=>$item['mercadopago']])
                    @endempty
                </div>
            </div>
        </div>

        @if(!empty($item['schemamarkup']))
        @include('components.schemamarkup', ['schemamarkup'=>$item['schemamarkup']])
        @endif
    </article>
@endforeach
</div>