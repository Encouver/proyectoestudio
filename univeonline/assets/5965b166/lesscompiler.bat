@echo off
echo Compilando bootstrap.css
call lessc less/bootstrap.less css/bootstrap.css
echo Compilando bootstrap.min.css
call lessc --yui-compress less/bootstrap.less css/bootstrap.min.css
echo Compilando bootstrap-responsive.css
call lessc less/responsive.less css/bootstrap-responsive.css
echo Compilando bootstrap-responsive.min.css
call lessc --yui-compress less/responsive.less css/bootstrap-responsive.min.css
@echo off
PAUSE