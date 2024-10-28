

<div class="horizontal-cards mt-5">
    <div class="panel mx-auto">
    @foreach ($courses as $item)
        <article class="md:flex mb-4">
            <div class="md:w-2/5 d-flex flex-column">
                <div class="horizontal-cards-image">
                    <img src="{{$item['image-cover']}}" alt="{!!$item['alt-cover']!!}" 
                        class="img-fluid" width="263" height="200" 
                        decoding="async" loading="lazy" fetchpriority="auto" 
                    />
                    @if(isset($item['special']) && $item['special']==true)
                    <span class="bg-green-500 rounded p-1 text-white inline-block position-absolute pin-t10 pin-r10">
                        @include('components.svg.cockade-green')
                    </span>
                    @endif
                </div>
                <div class="flex flex-column md:flex-row mt-2">
                    @if (!empty($item['mercadopago']))
                    @include('components.mercadopago-payment-button', ['preference_id'=>$item['mercadopago']])
                    @endempty
                </div>
            </div>
            <div class="md:w-3/5 ml-md-4 d-flex flex-column">
                <h2>
                    {!!$item['title']!!}
                </h2>
                <p class="lead font-weight-bold">
                    {!!$item['sub-title']!!}
                </p>
                {{--
                <div class="flex flex-column md:flex-row mb-2">
                    <button type="button" class="btn btn-xs btn-green mr-2 mb-2 md:mb-0">HOW TO EARN YOUR CERTIFICATE</button> 
                    <button type="button" class="btn btn-xs btn-gray-light mr-2 mb-2 md:mb-0">PASS</button>
                    <button type="button" class="btn btn-xs btn-gray-light mr-2 mb-2 md:mb-0">MERIT</button> 
                    <button type="button" class="btn btn-xs btn-gray-light mr-2 mb-2 md:mb-0">DISTINCTION</button>
                </div>
                --}}
                <ul>
                @foreach ($item['description'] as $description)
                    <li>{!!$description!!}</li>
                @endforeach
                </ul>
                <br />
                <ul class="text-center mt-auto">
                @foreach ($item['prices'] as $price)
                    <li class="block">{!!$price!!}</li>
                @endforeach
                </ul>
            </div>

            @if(!empty($item['schemamarkup']))
            @include('components.schemamarkup', ['schemamarkup'=>$item['schemamarkup']])
            @endif
        </article>
        @if(!$loop->last)<hr/>@endif
    @endforeach
    </div>
</div>
