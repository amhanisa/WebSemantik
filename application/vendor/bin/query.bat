@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../bordercloud/sparql/bin/query
php "%BIN_TARGET%" %*
