<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Landing Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      text-align: center;
    }

    nav {
      background-color: #333;
      padding: 10px;
    }

    nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      justify-content: center;
    }

    nav ul li {
      position: relative;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      padding: 15px;
      display: inline-block;
    }

    nav ul li:hover>ul {
      display: block;
    }

    nav ul ul {
      display: none;
      position: absolute;
      background-color: #575757;
      padding: 0;
      list-style: none;
      min-width: 150px;
    }

    nav ul ul li {
      display: block;
    }

    nav ul ul li a {
      display: block;
      padding: 10px;
    }

    nav ul li a .active {
      text-decoration: underline;
    }

    section {
      padding: 50px;
    }

    #home {
      background-color: #f4f4f4;
    }

    #about {
      background-color: #ddd;
    }

    #products {
      background-color: #bbb;
    }
  </style>
</head>

<body>
  <nav>
    <ul>
      <li><a href="/home">Home</a></li>
      <li><a href="{{ route('about') }}">About</a></li>
      <li><a href="{{ route('product.detail', 'Product 1') }}">Product 1</a></li>
      <li><a href="{{ route('product.detail', 'Product 2') }}">Product 2</a></li>
      <ul>
  </nav>
  <section id="products">
    <h1>Our Products</h1>
    <p>Product Name: {{ $nama }}</p>
  </section>
</body>

</html>
