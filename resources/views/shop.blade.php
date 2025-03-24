@extends('layouts.app')
@section('content')
<main class="pt-90">
    <section class="shop-main container d-flex pt-4 pt-xl-5">
      <div class="shop-sidebar side-sticky bg-body" id="shopFilter">
        <div class="aside-header d-flex d-lg-none align-items-center">
          <h3 class="text-uppercase fs-6 mb-0">Filter By</h3>
          <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
        </div>

        <div class="pt-4 pt-lg-0"></div>

        <div class="accordion" id="categories-list">
          <div class="accordion-item mb-4 pb-3">
            <h5 class="accordion-header" id="accordion-heading-1">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse"
                data-bs-target="#accordion-filter-1" aria-expanded="true" aria-controls="accordion-filter-1">
                Product Categories
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path
                      d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-1" class="accordion-collapse collapse show border-0"
              aria-labelledby="accordion-heading-1" data-bs-parent="#categories-list">
              <div class="accordion-body px-0 pb-0 pt-3">
                <ul class="list list-inline mb-0">
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">Dresses</a>
                  </li>
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">Shorts</a>
                  </li>
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">Sweatshirts</a>
                  </li>
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">Swimwear</a>
                  </li>
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">Jackets</a>
                  </li>
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">T-Shirts & Tops</a>
                  </li>
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">Jeans</a>
                  </li>
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">Trousers</a>
                  </li>
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">Men</a>
                  </li>
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">Jumpers & Cardigans</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>


        <div class="accordion" id="color-filters">
          <div class="accordion-item mb-4 pb-3">
            <h5 class="accordion-header" id="accordion-heading-1">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse"
                data-bs-target="#accordion-filter-2" aria-expanded="true" aria-controls="accordion-filter-2">
                Color
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path
                      d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-2" class="accordion-collapse collapse show border-0"
              aria-labelledby="accordion-heading-1" data-bs-parent="#color-filters">
              <div class="accordion-body px-0 pb-0">
                <div class="d-flex flex-wrap">
                  <a href="#" class="swatch-color js-filter" style="color: #0a2472"></a>
                  <a href="#" class="swatch-color js-filter" style="color: #d7bb4f"></a>
                  <a href="#" class="swatch-color js-filter" style="color: #282828"></a>
                  <a href="#" class="swatch-color js-filter" style="color: #b1d6e8"></a>
                  <a href="#" class="swatch-color js-filter" style="color: #9c7539"></a>
                  <a href="#" class="swatch-color js-filter" style="color: #d29b48"></a>
                  <a href="#" class="swatch-color js-filter" style="color: #e6ae95"></a>
                  <a href="#" class="swatch-color js-filter" style="color: #d76b67"></a>
                  <a href="#" class="swatch-color swatch_active js-filter" style="color: #bababa"></a>
                  <a href="#" class="swatch-color js-filter" style="color: #bfdcc4"></a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="accordion" id="size-filters">
          <div class="accordion-item mb-4 pb-3">
            <h5 class="accordion-header" id="accordion-heading-size">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse"
                data-bs-target="#accordion-filter-size" aria-expanded="true" aria-controls="accordion-filter-size">
                Sizes
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path
                      d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-size" class="accordion-collapse collapse show border-0"
              aria-labelledby="accordion-heading-size" data-bs-parent="#size-filters">
              <div class="accordion-body px-0 pb-0">
                <div class="d-flex flex-wrap">
                  <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">XS</a>
                  <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">S</a>
                  <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">M</a>
                  <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">L</a>
                  <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">XL</a>
                  <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">XXL</a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="accordion" id="brand-filters">
          <div class="accordion-item mb-4 pb-3">
            <h5 class="accordion-header" id="accordion-heading-brand">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-filter-brand" aria-expanded="true" aria-controls="accordion-filter-brand">
                Brands
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-brand" class="accordion-collapse collapse show border-0" aria-labelledby="accordion-heading-brand" data-bs-parent="#brand-filters">
              <div class="search-field multi-select accordion-body px-0 pb-0">
                <ul class="list list-inline mb-0 brand-list">
                  @foreach ($brands as $brand)
                    <li class="list-item">
                      <span class="menu-link py-1">  {{$brand->name}}</span> <span class="text-right float-right">{{$brand->products()->count()}}</span>
                    </li>
                  @endforeach                                                                
                </ul>
              </div>
            </div>
          </div>
        </div>


        <div class="accordion" id="price-filters">
          <div class="accordion-item mb-4">
            <h5 class="accordion-header mb-2" id="accordion-heading-price">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse"
                data-bs-target="#accordion-filter-price" aria-expanded="true" aria-controls="accordion-filter-price">
                Price
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path
                      d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-price" class="accordion-collapse collapse show border-0"
              aria-labelledby="accordion-heading-price" data-bs-parent="#price-filters">
              <input class="price-range-slider" type="text" name="price_range" value="" data-slider-min="10"
                data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]" data-currency="$" />
              <div class="price-range__info d-flex align-items-center mt-2">
                <div class="me-auto">
                  <span class="text-secondary">Min Price: </span>
                  <span class="price-range__min">$250</span>
                </div>
                <div>
                  <span class="text-secondary">Max Price: </span>
                  <span class="price-range__max">$450</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="shop-list flex-grow-1">
       


       
        <div class="products-grid row row-cols-2 row-cols-md-3" id="products-grid">
            @foreach ($products as $product)
            <div class="product-card-wrapper">
                <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                    <div class="pc__img-wrapper">
                        <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="{{route('shop.product.details',["product_slug"=>$product->slug])}}">
                                        <img loading="lazy" src="{{asset('uploads/products')}}/{{$product->image}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">                                            
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    @foreach (explode(",",$product->images) as $gimg)
                                        <a href="{{route('shop.product.details',["product_slug"=>$product->slug])}}">
                                            <img loading="lazy" src="{{asset('uploads/products')}}/{{trim($gimg)}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                        </a>
                                    @endforeach                                        
                                </div>
                            </div>
                            <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_prev_sm" />
                                </svg></span>
                            <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_next_sm" />
                                </svg></span>
                        </div>
                         @if(Cart::instance("cart")->content()->Where('id',$product->id)->count()>0)
                            <a href="{{route('cart.index')}}" class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart btn-warning">Go to Cart</a>
                        @else
                        <form name="addtocart-form" method="POST" action="{{route('cart.add')}}">
                            @csrf
                            <div class="product-single__addtocart">                                               
                                <input type="hidden" name="id" value="{{$product->id}}" />
                                <input type="hidden" name="name" value="{{$product->name}}" />
                                <input type="hidden" name="quantity" value="1"/>
                                <input type="hidden" name="price" value="{{$product->sale_price == '' ? $product->regular_price:$product->sale_price}}" />
                                <button type="submit" class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart">Add to Cart</button>
                            </div>
                        </form>
                        @endif                             
                    </div>
        
                    <div class="pc__info position-relative">
                        <p class="pc__category">{{$product->category->name}}</p>
                        <h6 class="pc__title"><a href="{{route('shop.product.details',["product_slug"=>$product->slug])}}">{{$product->name}}</a></h6>
                        <div class="product-card__price d-flex">
                            <span class="money price">
                                @if($product->sale_price)                    
                                    <s>${{$product->regular_price}}</s> ${{$product->sale_price}} {{round(($product->regular_price - $product->sale_price)*100/$product->regular_price)}} % OFF
                                @else
                                    {{$product->regular_price}}
                                @endif
                            </span>
                        </div>
                        <div class="product-card__review d-flex align-items-center">
                            <div class="reviews-group d-flex">
                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_star" />
                                </svg>
                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_star" />
                                </svg>
                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_star" />
                                </svg>
                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_star" />
                                </svg>
                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_star" />
                                </svg>
                            </div>
                            <span class="reviews-note text-lowercase text-secondary ms-1">8k+ reviews</span>
                        </div>
            
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="divider"></div>
        <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">                
            {{$products->withQueryString()->links('pagination::bootstrap-5')}}
        </div>

        
      </div>
    </section>
    
  </main>

  <form id="frmfilter" action="GET" action="{{route('shop.index')}}">
    
    <input type="hidden" name="page" value="{{$products->currentPage()}}">
    <input type="hidden" name="size" id="size" value="{{$size}}">
    <input type="hidden" name="brands" id="hdnBrands" />

  
  </form>
@endsection

@push('scripts')
<script>
    $(function(){  
        $("#pagesize").on("change",function(){                    
          $("#size").val($("#pagesize option:selected").val());
          $("#frmFilter").submit(); 
      });
      
      $("#orderby").on("change",function(){                    
      $("#order").val($("#orderby option:selected").val());
      $("#frmFilter").submit(); 
  });         

    $("input[name='brands']").on("change",function(){
        var brands ="";
        $("input[name='brands']:checked").each(function(){
            if(brands=="")
            {
                brands += $(this).val();
            }
            else{
                brands += "," + $(this).val();
            }
        });
        $("#hdnBrands").val(brands);
        $("#frmfilter").submit();
    });


    });

</script>
@endpush