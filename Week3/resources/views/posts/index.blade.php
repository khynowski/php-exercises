<h1>Lista Postów</h1>
<ul>
    <!-- Tu będzie pętla -->
     @foreach ($posts as $post)
    <li>
        <strong>{{ $post->title }}</strong><br>
        {{ $post->content }}
    </li>
    @endforeach
</ul>