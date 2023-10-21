@extends('user.layout.master')

@section('pageName')
    Question
@endsection


@push('style')
    {{-- tiny script --}}
    <script src="https://cdn.tiny.cloud/1/7q9kiyqjbi7cy7ywr85uvbysu31pknq44p5xtw66ats635k5/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/atom-one-dark.min.css">
@endpush

@section('content')
    <section class="relative lg:pb-24 pb-16">
        <div class="container-fluid">
            <div class="profile-banner relative text-transparent">
                <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)" />
                <div class="relative shrink-0">
                    <img src="{{ asset('assets/images/blog/bg.jpg') }}" class="h-80 w-full object-cover" id="profile-banner"
                        alt="">
                    <div class="absolute inset-0 bg-black/70"></div>
                    <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                </div>
            </div>
        </div><!--end container-->

        <div class="container py-5">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Join communities</h3>

                <p class="text-slate-400 max-w-xl mx-auto">You can also improve on your coding experience by joining any of
                    the communities</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                @foreach ($communities as $community)
                    <div class="rounded-md shadow dark:shadow-gray-800">
                        <div class="p-6">
                            <a href="page-job-detail.html"
                                class="title h5 text-lg font-semibold hover:text-indigo-600">{{ $community->title }}</a>
                            <p class="text-slate-400 mt-2"><i class="uil uil-clock text-indigo-600 "></i>
                                {{ Str::ucfirst($community->user->name) }}
                            </p>

                            <div class=" mt-4">
                                <form action="{{ route('join.community') }}" method="post">
                                    @csrf
                                    @method('post')
                                    <input type="hidden" value="{{ $community->id }}" name="community_id">
                                    <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">

                                    <button type="submit"
                                        class="btn btn-primary rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white">
                                        Join community
                                    </button>
                                    {{-- <a class="btn btn-primary rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"
                                        href="{{ route('join.community', [
                                            'user_id' => auth()->user()->id,
                                            'community_id' => $community->id,
                                        ]) }}">Join
                                        Community</a> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div><!--end grid-->

        </div><!--end container-->

    </section>
@endsection
