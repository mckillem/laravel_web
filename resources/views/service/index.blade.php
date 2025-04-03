@forelse ($services as $service)

<ul>
    <li>
        <a href="detail/{{ $service->url }}">{{ $service->title }}</a>
    </li>
</ul>

@empty

<p>Žádné služby</p>

@endforelse
