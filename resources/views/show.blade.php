<x-layout>
    <x-slot:title>
        {{ $news->title }}
    </x-slot:title>

    <a href="{{ route('news.index') }}" class="back-link">&laquo; กลับไปหน้ารวมข่าว</a>

    <h1>{{ $news->title }}</h1>

    <div class="news-content">
        <p>{{ $news->content }}</p>
    </div>

    <a href="{{ $news->source_url }}" target="_blank" class="source-link">อ่านเพิ่มเติมจากแหล่งข่าวต้นฉบับ</a>

</x-layout>