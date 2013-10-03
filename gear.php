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
<table>
<td><a href = "file.svg" >get svg file here </a></td>
<td><a href = "gear.zip" >get dxf here  </a></td>
</center>
</table>
</body>
</html>
