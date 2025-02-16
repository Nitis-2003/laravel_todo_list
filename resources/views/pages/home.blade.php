@extends('layouts.app')
@section('title')
    To-do List
@endsection
@section('content')
    <div class="flex justify-center">
        <div class="mt-10">
            <h1 class="font-bold text-lg text-center">Todo App</h1>
            @error('task')
                <p class="text-center mt-2 bg-red-200 text-red-500 px-2 py-4 border-2 border-red-500 rounded-xl">{{$message}}</p>    
            @enderror
            <form action="{{route('insert')}}" method="POST" class="flex mt-5 border-solid border-2 rounded-3xl w-96 justify-end p-1">
                @csrf
                <input name="task" class="text-center w-96 ms-5 me-2 border-transparent border-2 rounded-2xl focus:outline-none" type="text" placeholder="Add your task">
                <button type="submit" class="font-bold bg-green-400 px-3 py-2 rounded-3xl text-white hover:bg-green-600">Add</button>
            </form>
            
            @if($task->isEmpty())
                <p class="text-center mt-3">ยังไม่มีรายการสิ่งที่ต้องทำ</p>
            @else
                <div class="mt-3">
                    @foreach ($task as $item)
                    <div class="flex justify-between items-center rounded-3xl border-2 px-4 py-2 mb-2">
                        <p class="">{{$item->task}}</p>
                        <form action="{{ route('remove', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white bg-red-400 px-2 py-2 rounded-xl">delete</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
@endsection