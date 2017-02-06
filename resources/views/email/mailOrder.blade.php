<html>
<head>
    <title>Заявка на уборку</title>
</head>
<body>
<p>Новая заявка на уборку</p>
<ul>
    <li>Тип уборки: {{ $cleaningType }}</li>
    <li>Вид уборки: {{ $cleaningName }}</li>
    <li>Дата уборки: {{ $cleaningDate }}</li>
    <li>Телефон: {{ $userPhone }} </li>
    </ul>
    {{ $additionalInfo }}
</body>
</html>