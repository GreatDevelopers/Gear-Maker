<?php
$PHI = $_POST['pressure-angle'];
$PC = $_POST['circular-pitch'];
$teeth = $_POST['teeth'];
$command = "python gear.py " . $PHI . " " . $PC . " " . $teeth;
exec($command);
exec('inkscape -z -f file.svg --export-ps=gear.ps');
exec('pstoedit -f dxf gear.ps  gear.dxf');
exec('zip gear.zip gear.dxf');
?>
<br><h2><a href = "file.svg" >get svg file here </a></h2>
<br><h1><a href = "gear.zip" >get dxf here , Autocad format file, in a compressed zip file  :) </a></h1>
