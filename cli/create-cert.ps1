mkcert -install "l.fsp.com"

New-Item -ItemType directory "../certs"

Get-Item -Path *.pem | Move-Item -Destination "../certs"