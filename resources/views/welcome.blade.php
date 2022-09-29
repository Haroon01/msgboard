<h1>{{ $title }}</h1>
@foreach ($visitors as $visitor)
<section>
<h2>{{ $visitor->name }}</h2>
<p>{{ $visitor->comments }}</p>
</section>
@endforeach