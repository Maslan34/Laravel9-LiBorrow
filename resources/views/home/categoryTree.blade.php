
@foreach($children as $subcategory)



        @if(count($subcategory->children))

            @include('home.categoryTree',['children'=>$subcategory->children])

        @else
                <li style="list-style-type: none;color:red"><a href="{{route('categoryBooks',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>

        @endif


@endforeach
