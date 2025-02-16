@extends('layouts.app')
@section('title')
    Homepage
@endsection
@section('content')
    <div class="flex justify-center">
        <div class="mt-10">
            <h1 class="font-bold text-lg text-center">Todo App</h1>
            <form action="{{route('insert')}}" method="POST" class="flex mt-5 border-solid border-2 rounded-3xl w-96 justify-end p-1">
                @csrf
                <input name="task" class="text-center w-96 ms-5 me-2 border-transparent border-2 focus:outline-none" type="text" placeholder="Add your task">
                <button type="submit" class="font-bold bg-green-400 px-3 py-2 rounded-3xl text-white hover:bg-green-600">Add</button>
            </form>
            
            {{-- <div class="mt-3">
                <div class="flex justify-between rounded-3xl border-2 px-4 py-2 mb-2">
                    <p>asdasdasdasdasd</p>
                    <a href="">delete</a>
                </div>
                <div class="flex justify-between rounded-3xl border-2 px-4 py-2 mb-2">
                    <p>asdasdasdasdasd</p>
                    <a href="">delete</a>
                </div>
                <div class="flex justify-between rounded-3xl border-2 px-4 py-2 mb-2">
                    <p>asdasdasdasdasd</p>
                    <a href="">delete</a>
                </div>
            </div> --}}


        </div>
    </div>
@endsection