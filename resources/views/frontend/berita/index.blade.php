<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Berita Murung Raya</title>
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 40px;
        }

        .card {
            display: flex;
            flex-wrap: wrap;
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-4px);
        }

        .card img {
            width: 220px;
            height: auto;
            border-radius: 8px;
            object-fit: cover;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .card-body {
            flex: 1;
        }

        .card-title {
            font-size: 1.4rem;
            font-weight: bold;
            color: #34495e;
            margin-bottom: 10px;
        }

        .card-excerpt {
            font-size: 1rem;
            color: #555;
            margin-bottom: 15px;
        }

        .card-link {
            text-decoration: none;
            padding: 8px 16px;
            background-color: #3498db;
            color: white;
            border-radius: 6px;
            font-size: 0.9rem;
            display: inline-block;
            transition: background-color 0.2s;
        }

        .card-link:hover {
            background-color: #2980b9;
        }

        @media screen and (max-width: 768px) {
            .card {
                flex-direction: column;
                align-items: center;
            }

            .card img {
                margin-right: 0;
                margin-bottom: 15px;
                width: 100%;
            }

            .card-body {
                text-align: center;
            }

            .card-meta {
        color: #888;
        font-size: 0.9rem;
        margin-bottom: 10px;
    }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>📢 Berita Terbaru Kabupaten Murung Raya</h2>

        @foreach ($beritas as $berita)
            <div class="card">
                @if ($berita['featured_image'])
                    <img src="{{ $berita['featured_image'] }}" alt="Thumbnail">
                @endif
                <div class="card-body">
                    <div class="card-title">{!! $berita['title']['rendered'] !!}</div>
                    <div class="card-meta">
                        <small>
                            {{-- Oleh <strong>{{ $berita['author_name'] }}</strong>  --}}
                            pada {{ \Carbon\Carbon::parse($berita['date'])->translatedFormat('d F Y H:i') }}
                        </small>
                    </div>
                    <div class="card-excerpt">{!! $berita['excerpt']['rendered'] !!}</div>
                    <a class="card-link" href="{{ $berita['link'] }}" target="_blank">Baca Selengkapnya</a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>