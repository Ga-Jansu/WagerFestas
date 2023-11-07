# Setup Wager Festas

### Instalar as dependencias:

Fazer download e instalação do docker
```sh
site para download: https://docs.docker.com/get-docker/
```

Fazer download do NodeJs
```sh
site para download: https://nodejs.org/en/download/current
```

Instalar o NodeJs
```sh
No cmd: npm install
```

Instalar o yarn
```sh
No cmd: npm install --global yarn
```

### Passo a passo:
Abra o docker desktop.

Clone o repositório:
```sh
git clone https://github.com/Ga-Jansu/WagerFestas.git
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Suba os containers do projeto
```sh
docker-compose up -d
```

Acessar o container
```sh
docker-compose exec app bash
```

Instalar as dependências do projeto
```sh
composer install
```

Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

após gerar a key digite: 'exit'

Instalar as dependências do node
```sh
npm install
```

Rodar o node
```sh
npm run dev
```

Acessar o projeto
[http://localhost:8989](http://localhost:8989)
