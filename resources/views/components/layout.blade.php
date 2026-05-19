<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Oil Change Checker' }}</title>
    <style>
        body {
            font-family: system-ui, -apple-system, sans-serif;
            max-width: 600px;
            margin: 2rem auto;
            padding: 0 1rem;
            color: #222;
            line-height: 1.5;
        }
        h1 {
            margin-bottom: 1.5rem;
        }
        label {
            display: block;
            margin-top: 1rem;
            font-weight:600;
        }
        input[type="number"],
        input[type="date"] {
            display: block;
            width: 100%;
            padding: 0.5rem;
            margin-top: 0.25rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            box-sizing: border-box;
        }
        button {
            margin-top: 1.5rem;
            padding: 0.75rem 1.5rem;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }
        button:hover {
            background: #1e40af;
        }
        .error {
            color: #b91c1c;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
        .result-box {
            padding: 1rem;
            border-radius: 4px;
            margin-top: 1.5rem;
        }
        .result-due {
            background: #fef2f2;
            border: 1px solid #fca5a5;
            color: #b91c1c;
        }
        .result-ok {
            background: #f0fdf4;
            border: 1px solid #86efac;
            color: #166534;
        }
        .back-link {
            display: inline-block;
            margin-top: 2rem;
            color: #2563eb;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    {{ $slot }}
</body>
</html>
