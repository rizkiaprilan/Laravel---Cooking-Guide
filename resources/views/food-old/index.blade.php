@extends('layouts.master')

@section('title')
    Food
    @endsection

@section('content')

    <section class="section bg-light pt-0 bottom-slant-gray">
        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
                <div class="row" data-aos="fade">
                    <div class="col-md-12 text-center heading-wrap">
                        <h2>Recipts for Foods</h2>
                    </div>
                </div>
            </div>
        </div>
        <a href="/food/create">
            <button class="btn-primary">
                Create Foods
            </button>
        </a>
        <div class="container">
            <table class="table table-striped">
                <tr>
                    <th>IMAGE</th>
                    <th>NAMA</th>
                    <th>RECIPT</th>
                    <th>ACTION</th>
                </tr>
                @foreach($data as $d)
                    <tr>
                        <td><img width="100" height="100" src="{{"storage/images/".$p->image}}" alt=""></td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->recipt}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section> <!-- .section -->
    @endsection


