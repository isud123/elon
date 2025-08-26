<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Elon Musk News' }}</title>
    {{-- เพิ่ม CSS ง่ายๆ เพื่อความสวยงาม --}}
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; line-height: 1.6; color: #333; max-width: 800px; margin: 20px auto; padding: 0 15px; background-color: #f4f4f4; }
        .container { background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1, h2 { color: #1a202c; }
        a { color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .news-list a { display: block; padding: 15px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 5px; background-color: #f9f9f9; }
        .news-content { margin-top: 20px; }
        .source-link { display: inline-block; margin-top: 20px; font-weight: bold; }
        .back-link { display: block; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">

        {{ $slot }}

    </div>
</body>
</html>