@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../vendor/jawira/plantuml/bin/plantuml
bash "%BIN_TARGET%" %*
