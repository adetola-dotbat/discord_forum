<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/atom-one-dark.min.css">

</head>

<body>
    @php
        $text = '<div>
                <h1> How are you today</h1>
            </div>';
        $result = utf8_encode($text);
    @endphp
    <pre>
        <code>
            {{ $result }}
        </code>
    </pre>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/highlight.min.js"></script>
    <script>
        hljs.highlightAll();
    </script>
</body>

</html>
