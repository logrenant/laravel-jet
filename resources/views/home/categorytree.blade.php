<div>
    Sub Categories
</div>
@foreach($children as $subcategory)
    <ul class="" style="">
        @if (count($subcategory->children))
            <li>{{$subcategory->title}}</li>
            <ul class="list-links">
                @include('home.categorytree', ['children'=>$subcategory->children])
            </ul>
            <hr>
        @else
            <li><a href="#">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach



