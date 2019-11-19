@extends('layouts.master')

@section('title')
    Drink
    @endsection

@section('content')
    <section class="section bg-light py-5  bottom-slant-gray">
        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
                <div class="row" data-aos="fade">
                    <div class="col-md-12 text-center heading-wrap">
                        <h2>Recipts for Drinks</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <a href="/drink/create">
                <button class="btn-primary">
                    Create Drinks
                </button>
            </a>
            <table class="table table-striped">
                <tr>
                    <th>IMAGE</th>
                    <th>NAMA</th>
                    <th>RECIPT</th>
                    <th>ACTION</th>
                </tr>
                @foreach($data as $d)
                    <tr>
                        <td><img width="100" height="100" src="{{"images/".$d->image}}" alt=""></td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->recipt}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <br><br><br><br><br><br><br><br>


    </section>

    @endsection
