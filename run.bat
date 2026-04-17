@echo off
if "%~1"=="" (
    echo.
    echo Daftar file PHP:
    dir /b *.php | findstr /v "run.bat"
    echo.
    echo Usage: run [nama_file]
    echo Contoh: run latihan1
    echo.
) else (
    c:\xampp\php\php.exe %~1.php
    pause
)