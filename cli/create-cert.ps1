mkcert -install "l.anytech365.com"

New-Item -ItemType directory "../certs"

Get-Item -Path *.pem | Move-Item -Destination "../certs"