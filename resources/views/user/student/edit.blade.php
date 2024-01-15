@extends('template.master')
@section('content')

    <div class="p-4 m-4 sm:p-8 bg-white shadow sm:rounded-lg ">


        <div class="max-w-xl">
            <h1 class="text-center"> O`quvchi malumotlarini o`zgartirish </h1>

            <form action="{{route('student.update',$student->id)}}" method="post" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <label for="name" class="text-dark">Ismi</label>
                <input id="name" name="name" value="{{$student->name}}" type="text" class="form-control">

                @error('name')
                <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                @enderror


                <label for="phone" class="text-dark">Telefon raqam</label>
                <input id="phone" name="phone" value="{{$student->phone}}" type="text" class="form-control">

                @error('phone')
                <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas va yoki kiritilgan
                    raqam takrorlangan
                </div>
                @enderror


                <label for="passport" class="text-dark">Pasport seria</label>
                <input id="passport" name="passport" value="{{$student->passport}}" type="text" class="form-control">

                {{--                @error('passport')--}}
                {{--                <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>--}}
                {{--                @enderror--}}


                <label for="parents_name" class="text-dark">Ota-onasining ismi</label>
                <input id="parents_name" name="parents_name" value="{{$student->parents_name}}" type="text"
                       class="form-control">

                <label for="location" class="text-dark">Yashash manzili</label>
                <input id="location" name="location" value="{{$student->location}}" type="text" class="form-control">

                @error('location')
                <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas</div>
                @enderror

                <label for="description" class="text-dark">Qo`shimcha malumotlar</label>
                <input id="description" name="description" value="{{$student->description}}" type="text" class="form-control">

                @error('location')
                <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas</div>
                @enderror


                @error('parents_name')
                <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                @enderror

                <label for="parents_tel" class="text-dark">Ota-onasining Telefon raqami</label>
                <input id="parents_tel" name="parents_tel" value="{{$student->parents_tel}}" type="text"
                       class="form-control">

                @error('parents_tel')
                <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                @enderror

                <label for="photo" class="text-dark"> Rasim</label>
                <input id="photo" name="photo" value="{{old('photo')}}" type="file" class="form-control">

                @error('photo')
                <div class="alert alert-danger" role="alert">rasm yuklanish shart!</div>
                @enderror

                <button class="btn btn-warning m-4 "> Yuklash</button>

            </form>
        </div>
    </div>

@endsection
