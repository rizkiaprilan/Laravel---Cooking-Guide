@extends('layouts.master')

@section('title')
    Create Some Food
@endsection

@section('content')
    <div class="bg-contact2" >
        <div class="container-contact2">
            <div class="wrap-contact2">
                <form class="contact2-form validate-form" action="/food/index" method="post">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="POST">
                    </div>
					<span class="contact2-form-title">
						Create Recipt
					</span>

                    <div class="wrap-input2 validate-input" data-validate="Name is required">
                        <input class="input2" type="text" name="name">
                        <span class="focus-input2" data-placeholder="NAME"></span>
                    </div>

                    <div class="wrap-input2 " >
                        <input class="input2" type="file" name="image">
                        <span class="focus-input2" data-placeholder="IMAGE"></span>
                    </div>

                    <div class="wrap-input2 validate-input" data-validate = "recipt is required">
                        <textarea class="input2" name="recipt"></textarea>
                        <span class="focus-input2" data-placeholder="RECIPT"></span>
                    </div>

                    <div class="container-contact2-form-btn">
                        <div class="wrap-contact2-form-btn">
                            <div class="contact2-form-bgbtn"></div>
                            <button class="contact2-form-btn">
                                Upload
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
