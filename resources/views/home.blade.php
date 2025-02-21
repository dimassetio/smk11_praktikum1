@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
  <section id="home">
    <h1>Welcome to Our Website</h1>
    <p>This is the home page</p>
    @php
      $status = 'aktif';
    @endphp

    @if ($status == 'aktif')
      <p>Status: Aktif</p>
    @elseif ($status == 'nonaktif')
      <p>Status: Nonaktif</p>
    @else
      <p>Status tidak diketahui</p>
    @endif

    @php
      $role = 'admin';
    @endphp

    @switch($role)
      @case('admin')
        <p>Anda adalah Administrator</p>
      @break

      @case('editor')
        <p>Anda adalah Editor</p>
      @break

      @case('user')
        <p>Anda adalah Pengguna</p>
      @break

      @default
        <p>Role tidak dikenali</p>
    @endswitch

    @for ($i = 1; $i <= 5; $i++)
      <p>Perulangan ke-{{ $i }}</p>
    @endfor

    @php
      $users = ['Alice', 'Bob', 'Charlie'];
    @endphp

    <ul>
      @foreach ($users as $user)
        <li>{{ $user }}</li>
      @endforeach
    </ul>

    @php
      $count = 1;
    @endphp

    @while ($count <= 3)
      <p>Loop ke-{{ $count }}</p>
      @php $count++; @endphp
    @endwhile

    // Do While
    @php
      $count = 1;
    @endphp
  </section>
@endsection
