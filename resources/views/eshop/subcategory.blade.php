<h1>Subcategory: {{ $subcategory->name }}</h1>
<a href="{{ action('EshopController@category', $subcategory->category->id ) }}">
    Back to category {{ $subcategory->category->name }}
</a>

@foreach($subcategory->books as $b)
    <h2>{{ $b->title }}</h2>
@endforeach
