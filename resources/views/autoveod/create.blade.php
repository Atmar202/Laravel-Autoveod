<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tellimuse lisamine</title>
</head>
<body>
    <div>
        <h1>Tellimuse lisamine</h1>
        <form method="post" action="/autoveod/create">
        @csrf
        <input type="text" name="algus" />
        <input type="text" name="otspunkt" />
        <input type="text" name="aeg" />
        <input type="submit" value="Create" />
    </form>
</div>

</body>
</html>