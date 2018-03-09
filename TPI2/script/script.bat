@echo off
set projeto="Aula27022018"

mkdir c:\xampp\htdocs\%projeto%
if %errorlevel% == 1 echo fail

copy ..\%projeto%\* c:\xampp\htdocs\%projeto%
if %errorlevel% == 1 echo fail