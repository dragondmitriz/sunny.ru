@echo off
Setlocal EnableDelayedExpansion
set x=0
for %%i in (*.jpg) do (
	rename "%%i" !RANDOM!.jpg
)
for %%i in (*.jpg) do (
   set /a x+=1
   rename "%%i" !x!.jpg 
)