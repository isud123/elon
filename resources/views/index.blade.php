<x-layout>
    <x-slot:title>
        หน้าแรก - ข่าว Elon Musk
    </x-slot:title>

    <h1>ข่าวล่าสุดเกี่ยวกับ Elon Musk</h1>

    <div class="news-list">
        @foreach ($allNews as $newsItem)
            <a href="{{ route('news.show', $newsItem->id) }}">
                <h2>{{ $newsItem->title }}</h2>
            </a>
        @endforeach
    </div>

</x-layout>