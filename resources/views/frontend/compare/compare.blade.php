@extends('frontend.layouts.master') @section('main_content')


<div data-v-512c03cc="" class="container">
    <div data-v-512c03cc="" class="product_compare_wrap">
        <div data-v-512c03cc="" class="section-title">
            <h2 data-v-512c03cc="" class="title">Product Comparison</h2>
        </div>


        @empty(session('compare'))
        <li class="list-group-item lh-condensed pt-3 text-center">

            <div class="cart-title">No product in compare list.</div>


        </li>
        @endempty


        @if(session('compare'))

        <div data-v-512c03cc="" class="table-responsive">
            <table data-v-512c03cc="" class="table table-bordered">
                <thead data-v-512c03cc="">
                    <tr data-v-512c03cc="">
                        <td data-v-512c03cc="" colspan="4"><strong data-v-512c03cc="">Product Details</strong></td>
                    </tr>
                </thead>
                <tbody data-v-512c03cc="">



                    <tr data-v-512c03cc="">
                        <th data-v-512c03cc="">Image</th>

                        @foreach(session('compare') as $key => $product)


                        <th data-v-512c03cc="" width="25%">
                            <div data-v-512c03cc="" class="fst_image"><a data-v-512c03cc="" href="#" class="" target="_self" title="MADISON"><img data-v-512c03cc="" src="{{$product['image']}}" loading="lazy" class="w-100 img-1 img-responsive" alt="MADISON" width="100%"></a></div>
                        </th>
                      

                        @endforeach

                        <!---->
                    </tr>
                    <tr data-v-512c03cc="">
                        <td data-v-512c03cc="">Product Name</td>

                        @foreach(session('compare') as $key => $product)

                        <th data-v-512c03cc="" width="25%"><a data-v-512c03cc="" href="#" class="" target="_self">
                            {{$product['title']}}
                            </a></th>
                       

                    @endforeach


                        <!---->
                    </tr>
                    <tr data-v-512c03cc="">
                        <td data-v-512c03cc="">Short Description</td>

                        @foreach(session('compare') as $key => $product)

                        <th data-v-512c03cc="" width="25%">{!!$product['description']!!}</th>

@endforeach
                        <!---->
                    </tr>
                    <tr data-v-512c03cc="">
                        <td data-v-512c03cc="">Price</td>

                        @foreach(session('compare') as $key => $product)

                        <td data-v-512c03cc="" style="text-align: center; color: red; font-weight: bold;">
                            <div data-v-512c03cc="" class="price"><span data-v-512c03cc="" class="price-new">{{number_format($product['price'])}}</span></div>
                        </td>
                       

                        @endforeach

                        <!---->
                    </tr>
                    {{-- <tr data-v-512c03cc="">
                        <td data-v-512c03cc="">Specifications</td>

                        @foreach(session('compare') as $key => $product)

                        <th data-v-512c03cc="" width="25%">
                            <p data-v-512c03cc="">Color : <span data-v-512c03cc="">Antique</span></p>
                            <p data-v-512c03cc="">Size : <span data-v-512c03cc="">Double</span></p>
                            <p data-v-512c03cc="">Material : <span data-v-512c03cc="">Metal</span></p>
                            <p data-v-512c03cc="">Dimension : <span data-v-512c03cc="">L- 205 x W- 156.8 x H-85.5 CM</span></p>
                        </th>
                        <th data-v-512c03cc="" width="25%">
                            <p data-v-512c03cc="">Color : <span data-v-512c03cc="">Antique</span></p>
                            <p data-v-512c03cc="">Size : <span data-v-512c03cc="">Double</span></p>
                            <p data-v-512c03cc="">Material : <span data-v-512c03cc="">Metal</span></p>
                            <p data-v-512c03cc="">Dimension : <span data-v-512c03cc="">L- 205 x W- 156.8 x H-85.5 CM</span></p>
                        </th>

                        @endforeach

                        
                    </tr> --}}
                    <tr data-v-512c03cc="">
                        <td data-v-512c03cc=""></td>

                        @foreach(session('compare') as $key => $product)

                        <td  data-v-512c03cc="">
                            <div data-v-512c03cc class="button_cp d-flex flex-wrap justify-content-center align-items-center"><a data-v-512c03cc="" href="{{route('compare.delete',$key)}}" class="btn btn-block1">
                                    REMOVE
                                </a> <a data-v-512c03cc=""  href="{{route('frontend.product.show', $product['slug'])}}" class="btn  btn-success ml-1">Details</a></div>
                        </td>

                        
@endforeach

<div class="btn btn-danger my-3"><a href="{{route('compare.clear')}}" class="text-white">Clear all</a> </div>

                        <!---->
                    </tr>
                </tbody>
            </table>
        </div>
        @endif
    </div>
    <div data-v-512c03cc="">
        <!---->
        <!---->
    </div>
</div>

@endsection
