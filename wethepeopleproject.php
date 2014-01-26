<html>
<head>

</head>
<body>
$file_contents = file_get_contents('https://api.whitehouse.gov/v1/petitions.json?limit=50');
echo $file_contents
</body>
</html>