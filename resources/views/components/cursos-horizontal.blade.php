

<div class="horizontal-cards">
    <div class="panel container mx-auto my-16">
    @foreach ($courses as $item)
        <article class="md:flex">
            <div class="md:w-1/5 mr-4 mt-4 d-flex flex-column">
                <div class="horizontal-cards-image">
                    <img src="{{$item['image-cover']}}" alt="{!!$item['alt-cover']!!}" 
                        class="img-fluid" width="263" height="200" 
                        decoding="async" loading="lazy" fetchpriority="auto" 
                    />
                    @if(isset($item['special']) && $item['special']==true)
                    <span class="bg-green-500 rounded p-1 text-white inline-block position-absolute pin-t10 pin-r10">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218.644 300" class="fill-current w-5 h-5">
                            <path d="M215.283 99.885l-8.444-10.383a14.953 14.953 0 01-3.169-11.795l2.12-13.21a14.94 14.94 0 00-9.431-16.329l-12.503-4.765a14.939 14.939 0 01-8.64-8.64l-4.764-12.502a14.94 14.94 0 00-16.33-9.432l-13.208 2.12a14.94 14.94 0 01-11.796-3.156L118.735 3.35a14.94 14.94 0 00-18.851 0l-10.382 8.444a14.94 14.94 0 01-11.796 3.157l-13.21-2.12a14.94 14.94 0 00-16.329 9.431l-4.764 12.503a14.939 14.939 0 01-8.64 8.64L22.26 48.168a14.94 14.94 0 00-9.431 16.33l2.12 13.209a14.94 14.94 0 01-3.156 11.795L3.35 99.885a14.94 14.94 0 000 18.851l8.444 10.383a14.94 14.94 0 013.156 11.795l-2.146 13.222a14.94 14.94 0 009.432 16.33l12.503 4.764a14.939 14.939 0 018.64 8.64l4.765 12.55a14.94 14.94 0 0016.329 9.433l13.21-2.12a14.94 14.94 0 0111.795 3.155l10.382 8.445a14.94 14.94 0 0018.852 0l10.382-8.445a14.94 14.94 0 0111.796-3.156l13.21 2.12a14.94 14.94 0 0016.329-9.431l4.764-12.503a14.939 14.939 0 018.64-8.64l12.502-4.764a14.94 14.94 0 009.432-16.33l-2.12-13.209a14.953 14.953 0 013.168-11.796l8.445-10.382a14.94 14.94 0 00.024-18.912zm-106.016 84.642c-41.538 0-75.211-33.673-75.211-75.21s33.673-75.211 75.21-75.211 75.211 33.673 75.211 75.21c-.046 41.5-33.662 75.137-75.161 75.211h-.05z"></path>
                            <circle cx="109.315" cy="109.317" r="62.148"></circle>
                            <path d="M91.634 225.411l-10.382-8.445a1.875 1.875 0 00-1.218-.414h-.293l-13.209 2.12c-13.1 2.097-25.875-5.277-30.611-17.67l-3.107-8.14L10.22 277.19a3.656 3.656 0 004.472 4.435l35.217-9.748a3.656 3.656 0 013.559.95l25.59 26.041a3.656 3.656 0 006.092-1.608l17.78-66.34a28.03 28.03 0 01-11.297-5.508zM185.781 192.887l-3.107 8.14c-4.737 12.392-17.511 19.766-30.611 17.67l-13.21-2.12h-.292a1.875 1.875 0 00-1.218.413l-10.382 8.445a28.029 28.029 0 01-11.37 5.557l17.78 66.34a3.656 3.656 0 006.092 1.608l25.59-26.041a3.656 3.656 0 013.558-.95l35.218 9.748a3.656 3.656 0 004.472-4.435l-22.52-84.375z"></path>
                        </svg>
                    </span>
                    @endif
                </div>
                <div class="flex flex-column md:flex-row mt-2">
                    @if (!empty($item['mercadopago']))
                    @include('components.mercadopago-payment-button', ['preference_id' => $item['mercadopago'] ])
                    @endempty
                </div>
            </div>
            <div class="md:w-4/5 ml-4 mt-4 d-flex flex-column">
                <h2 class="text-2xl text-green-500 font-semibold">
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
            @include('components.schemamarkup', ['schemamarkup' => $item['schemamarkup'] ])
            @endif
        </article>
        @if(!$loop->last)<hr/>@endif
    @endforeach
    </div>
</div>
