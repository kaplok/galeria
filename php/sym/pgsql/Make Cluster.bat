@echo off
set /P RutaCluster=Escriba la ruta completa de la carpeta del cluster / Write the full path to the cluster:
"%CD%\bin\initdb" -D "%RutaCluster%" -U postgres -W
Pause