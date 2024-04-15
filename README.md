![Logo](public/img/brand-logo-new-3.JPG)

# Pojok Lelang

Ci Lelang merupakan website lelang online yang memungkinkan para penggemar menawar barang untuk dikoleksi.

## Screenshots

![App Screenshot](public/img/Landing%20Page.jpg)

## Features

- Log In
- Log Out
- Register
- Pendataan Barang
- Buka dan Tutup Lelang
- Penawaran
- Generate Laporan

## Run Locally

Clone the project

```bash
  git clone https://github.com/goziyyy/lelang.git
```

Go to the project directory

```bash
  cd Cilang
```

Install dependencies

```bash
  composer install
```

Copy .env.example file

```bash
  cp .env.example .env
```

Create database and connect in .env file

```bash
  DB_DATABASE=cilang
```

Run migration

```bash
  php artisan migrate --seed
```

Start the server

```bash
  php artisan key:generate
  php artisan serve
```

## Authors

- [@goziyyy](https://github.com/goziyyy)

