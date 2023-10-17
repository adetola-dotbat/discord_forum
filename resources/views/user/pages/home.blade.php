@extends('user.layout.master')
@push('style')
    <style>
        .love-show span {
            background-color: #1E293B !important;
            color: white
        }

        .love-show {
            margin-top: 1rem
        }
    </style>
@endpush
@section('content')
    <!-- Start -->
    <section class="relative table w-full py-36 md:py-56 bg-gray-50 dark:bg-slate-800">
        <div class="container">
            <div class="grid grid-cols-1 mt-10 text-center">
                <h3 class="font-bold uppercase leading-normal text-4xl mb-5">
                    Welcome to the Techwind Forum
                </h3>

                <p class="text-slate-400 text-lg mx-auto">
                    We're here to help. Get in touch and we'll get back to you as soon
                    as we can
                </p>

                <div class="subcribe-form mt-6">
                    <form action="{{ route('search.question') }}" class="relative max-w-xl mx-auto">
                        <input type="text" id="SearchForumKeyword" name="search"
                            class="pt-4 pe-14 pb-4 ps-6 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-800"
                            placeholder="Enter your keywords :" />
                        <button type="submit"
                            class="btn btn-icon absolute top-[2px] end-[3px] w-[46px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full">
                            <i class="uil uil-search"></i>
                        </button>
                    </form>
                    <!--end form-->
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="relative md:pb-24 pb-16">
        <div class="container">
            <div class="grid grid-cols-1">
                <div
                    class="relative -mt-12 rounded-md shadow dark:shadow-gray-800 overflow-hidden bg-white dark:bg-slate-900">
                    <div class="grid md:grid-cols-12 grid-cols-1 items-center">
                        <div class="md:col-span-6">
                            <div class="w-full py-52 bg-slate-400 bg-[url('../../assets/images/saas/cta.html')] bg-no-repeat bg-top bg-cover jarallax"
                                data-jarallax data-speed="0.5"></div>
                        </div>
                        <!--end col-->
                        <div class="md:col-span-6">
                            <div class="p-6">
                                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">
                                    Join Our Forum
                                </h3>

                                <p class="text-slate-400 max-w-xl">
                                    Talk about anything that's in your code and see what others
                                    think. As a guest to our forum you are only able to view
                                    posts. When you register with our forum you can join
                                    in with topics, start new topics and generally be a part of
                                    the first level of our community.
                                </p>

                                <div class="mt-6">
                                    <a href="{{ route('register') }}"
                                        class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded me-2 mt-2">Register
                                        Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
        {{-- @foreach ($question as $item)
            <h4>$item->title</h4>
        @endforeach --}}
        <div class="container md:mt-24 mt-16">
            <div class="grid lg:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-8">
                    <div class="rounded shadow dark:shadow-slate-800">
                        <div class="p-6 bg-gray-50 dark:bg-slate-800 flex items-center justify-between">
                            <span class="text-lg font-semibold">Author</span>
                            <span class="text-lg font-semibold">Date</span>
                        </div>

                        @isset($questions)
                            @forelse ($questions as $question)
                                <div class="p-6 border-b border-gray-100 dark:border-gray-800">
                                    <div class="sm:flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img src="assets/images/client/01.jpg"
                                                class="h-10 rounded-full shadow dark:shadow-slate-800" alt="">

                                            <div class="ms-3">
                                                <a
                                                    class="hover:text-indigo-600 font-semibold uppercase">{{ $question->user->name }}</a>
                                                {{-- <p class="text-slate-400 text-sm font-normal"><i class="uil uil-user"></i>

                                            </p> --}}
                                            </div>
                                        </div>
                                        <p class="text-slate-400 text-sm font-normal mt-3 sm:mt-0"><i class="uil uil-clock"></i>
                                            {{ $question->created_at->format('Y-m-d - h:i A') }}</p>
                                    </div>

                                    <a href="{{ route('question.details', $question->id) }}">
                                        <p class="text-slate-400 mt-4">{{ Str::ucfirst($question->title) }}</p>
                                    </a>
                                </div>
                            @empty
                                <div class="text-center">
                                    No data
                                </div>
                            @endforelse
                        @endisset

                        @isset($questionWithTags)
                            @forelse ($questionWithTags as $question)
                                <div class="p-6 border-b border-gray-100 dark:border-gray-800">
                                    <div class="sm:flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img src="assets/images/client/01.jpg"
                                                class="h-10 rounded-full shadow dark:shadow-slate-800" alt="">

                                            <div class="ms-3">
                                                <a
                                                    class="hover:text-indigo-600 font-semibold uppercase">{{ $question->question->user->name }}</a>
                                                </p>
                                            </div>
                                        </div>
                                        <p class="text-slate-400 text-sm font-normal mt-3 sm:mt-0"><i class="uil uil-clock"></i>
                                            {{ $question->created_at->format('Y-m-d - h:i A') }}</p>
                                    </div>

                                    <a href="{{ route('question.details', $question->id) }}">
                                        <p class="text-slate-400 mt-4">{{ Str::ucfirst($question->question->title) }}</p>
                                    </a>
                                </div>
                            @empty
                                <div class="text-center">
                                    No data
                                </div>
                            @endforelse
                        @endisset
                    </div>

                    <div class="love-show">
                        @isset($questions)
                            {{ $questions->links() }}
                        @endisset
                        @isset($questionWithTags)
                            {{ $questionWithTags->links() }}
                        @endisset
                        {{-- {{ $questions->links('pagination::bootstrap-4') }} --}}
                    </div>
                </div><!--end col-->

                <div class="lg:col-span-4 md:col-span-6">
                    <div class="sticky top-20">

                        @if (!auth()->user())
                            <h5
                                class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center">
                                Sign In
                            </h5>
                            <form method="POST" action="{{ route('login') }}" class="ltr:text-left rtl:text-right mt-8">
                                @csrf
                                <div class="grid grid-cols-1">
                                    <div class="mb-4">
                                        <label class="font-semibold" for="LoginEmail">Email Address:</label>
                                        <input id="email" name="email" type="email" class="form-input mt-3"
                                            placeholder="name@example.com" />
                                    </div>

                                    <div class="mb-4">
                                        <label class="font-semibold" for="LoginPassword">Password:</label>
                                        <input id="password" name="password" type="password" class="form-input mt-3"
                                            placeholder="Password:" />
                                    </div>

                                    <div class="flex justify-between mb-4">
                                        <label for="RememberMe" class="inline-flex items-center">
                                            <input type="checkbox" name="remember" id="remember_me"
                                                class="form-checkbox border dark:border-gray-700 rounded text-indigo-600" />
                                            <span class="text-slate-400 ms-2">Remember me</span>
                                        </label>

                                    </div>

                                    <div class="mb-4">
                                        <input type="submit"
                                            class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full"
                                            value="Login" />
                                    </div>

                                    <div class="text-center">
                                        <span class="text-slate-400 me-2">Don't have an account ?</span>
                                        <a href="{{ route('register') }}"
                                            class="text-black dark:text-white font-bold inline-block">Sign
                                            Up</a>
                                    </div>
                                </div>
                            </form>
                        @endif
                        <h5
                            class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                            Question Tags
                        </h5>
                        <ul class="list-none text-center mt-8">


                            @foreach ($tags as $item)
                                <li class="inline-block m-2">

                                    <a href="{{ route('home', ['slug' => $item->slug]) }}"
                                        class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">{{ $item->tag }}</a>
                                </li>
                            @endforeach

                        </ul>

                        <h5
                            class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                            Recent Reply
                        </h5>
                        <div class="flex items-center mt-8">
                            <img src="assets/images/blog/06.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800"
                                alt="" />

                            <div class="ms-3">
                                <a href="#" class="font-semibold hover:text-indigo-600">Consultant Business</a>
                                <p class="text-sm text-slate-400">1st May 2022</p>
                            </div>
                        </div>

                        <div class="flex items-center mt-4">
                            <img src="assets/images/blog/07.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800"
                                alt="" />

                            <div class="ms-3">
                                <a href="#" class="font-semibold hover:text-indigo-600">Grow Your Business</a>
                                <p class="text-sm text-slate-400">1st May 2022</p>
                            </div>
                        </div>

                        <div class="flex items-center mt-4">
                            <img src="assets/images/blog/08.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800"
                                alt="" />

                            <div class="ms-3">
                                <a href="#" class="font-semibold hover:text-indigo-600">Look On The Glorious
                                    Balance</a>
                                <p class="text-sm text-slate-400">1st May 2022</p>
                            </div>
                        </div>



                    </div>

                </div>
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->
@endsection
