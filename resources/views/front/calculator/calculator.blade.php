@extends('front.master')

@section('title')
    Calculator
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Calculator</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('get-result') }}" method="post">
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">First Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="first_number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Last Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="last_number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Options</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="option" value="+" checked>Add</label>
                                        <label for=""><input type="radio" name="option" value="-">Sub</label>
                                        <label for=""><input type="radio" name="option" value="*">Mult</label>
                                        <label for=""><input type="radio" name="option" value="/">Div</label>
                                        <label for=""><input type="radio" name="option" value="%">Mod</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Result</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="{{ Session::has('result')? Session::get('result') : '' }}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <input type="submit" class="col-md-8 mx-auto btn btn-success" value="Get Result">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
