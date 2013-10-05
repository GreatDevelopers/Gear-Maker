<?php
$PHI = $_POST['pressure-angle'];
$PC = $_POST['circular-pitch'];
$teeth = $_POST['teeth'];
$command = "python process.py " . $PHI . " " . $PC . " " . $teeth;
exec($command);
exec('inkscape -z -f file.svg --export-ps=gear.ps');
exec('pstoedit -f dxf gear.ps  gear.dxf');
exec('zip gear.zip gear.dxf');
?>
<html>
<head>
<title>Gear Design</title>
</head>
<body>
<center>
<table border = 1>
<tr><td>SVG Format File</td><td><a href = "file.svg" >Download</a></td></tr>
<tr><td>DXF Format File(Zipped file)</td><td><a href = "gear.zip" >Download</a></td></tr>
</center>
</table>
</body>
</html>
