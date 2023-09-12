@extends('user.layout.master')
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
                    <div
                        class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 rounded-md border border-gray-100 dark:border-slate-800">
                        <table class="w-full ltr:text-left rtl:text-right">
                            <thead class="text-lg border-b border-gray-100 dark:border-slate-800">
                                <tr>
                                    <th class="py-6 px-4 font-semibold min-w-[300px]">Forum</th>
                                    <th class="text-center py-6 px-4 font-semibold min-w-[40px]">
                                        Topics
                                    </th>
                                    <th class="text-center py-6 px-4 font-semibold min-w-[40px]">
                                        Comments
                                    </th>
                                    <th class="py-6 px-4 font-semibold min-w-[220px]">
                                        Posted
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($questions as $question)
                                    <tr class="border-b border-gray-100 dark:border-slate-800">
                                        <th class="p-4">
                                            <div class="flex">
                                                <i class="uil uil-comment text-indigo-600 text-2xl"></i>

                                                <div class="ms-2">
                                                    <a href="{{ route('question.details', $question->id) }}"
                                                        class="hover:text-indigo-600 text-lg">{{ $question->title }}</a>
                                                    <p class="text-slate-400 font-normal">
                                                        This forum is for our announcements. Only our staff
                                                        can create new topics.
                                                    </p>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="text-center p-4">5</td>
                                        <td class="text-center p-4">10</td>
                                        <td class="p-4">
                                            <div class="flex items-center">
                                                <img src="assets/images/client/01.jpg"
                                                    class="h-10 rounded-full shadow dark:shadow-slate-800" alt="" />

                                                <div class="ms-2">
                                                    <a href="#" class="hover:text-indigo-600 font-semibold">
                                                        {{-- {{ $question->user->name }} --}}
                                                        Carlo</a>
                                                    <p class="text-slate-400 text-sm font-normal">
                                                        <i class="uil uil-clock"></i> May 2022
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                <!--end topic content-->

                                <!--end topic content-->
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    @include('user.pages.includes.aside')
                </div>
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->
@endsection
