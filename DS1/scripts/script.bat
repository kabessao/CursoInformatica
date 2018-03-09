@echo off

rem nome do projeto.
set projeto="Aula27022018"


rem não editar a partir daqui:
mkdir c:\xampp\htdocs\%projeto%
copy ..\%projeto%\* c:\xampp\htdocs\%projeto%
set erro2=%errorlevel%
cls
if %erro2% == 0 echo ok
