# docker-xdebug-wsl2-vscode

This repository is a sample project that shows the configuration of Docker and Visual Studio Code. 
It enables debugging of a PHP project running in a Docker container created with Docker Desktop, 
with Visual Studio Code running on a Windows host.

This setup was tested for:

- docker container (Docker Deskstop, Windows host, WSL2)
- project files located in WSL2 directory
- Visual Studio Code running in Windows host

## Prerequisites

- WSL2 enabled on your Windows machine.
- Docker Desktop installed on your Windows machine with WSL2 integration turned on.
- Visual Studio Code installed on your Windows machine.
- PHP Debug extension (or similar) installed in Visual Studio

## Docker management

```sh
# rebuild container
docker compose build --no-cache

# run container
docker compose up -d

# stop container
docker compose down
```

## Debugging session

1. Start container and VS Code

```sh
# start docker container
docker compose up -d

# start vs code
code .
```

2. Set breakpoints in PHP code.

3. Open page http://localhost in browser

