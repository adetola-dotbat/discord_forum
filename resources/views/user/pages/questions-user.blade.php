@extends('user.layout.master')

@section('pageName')
    Questions
@endsection
@section('content')
    <section class="relative lg:py-24 py-16 ">
        <div class="container md:mt-24 mt-16">
            <div class="grid lg:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-12">
                    <h5
                        class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                        My Questions
                    </h5>
                    <div
                        class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 rounded-md border border-gray-100 dark:border-slate-800">
                        <table class="w-full ltr:text-left rtl:text-right">
                            <thead class="text-lg border-b border-gray-100 dark:border-slate-800">
                                <tr>
                                    <th class="py-6 px-4 font-semibold min-w-[300px]">Question</th>
                                    <th class="text-center py-6 px-4 font-semibold min-w-[40px]">
                                        Likes
                                    </th>
                                    <th class="text-center py-6 px-4 font-semibold min-w-[40px]">
                                        Comments
                                    </th>
                                    <th class="py-6 px-4 font-semibold min-w-[220px]">

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
                                                        class="hover:text-indigo-600 text-lg capitalize">{{ $question->title }}</a>
                                                    <p class="">
                                                        <a href="{{ route('question.details', $question->id) }}">

                                                            {!! Str::limit(Str::title($question->question), '150', '...') !!}
                                                        </a>
                                                    </p>
                                                    <p class="text-slate-400 text-sm font-normal">
                                                        <i class="uil uil-clock"></i>
                                                        {{ $question->created_at->format('Y-m-d - h:i A') }}

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

                                                    <a href="{{ route('edit.question', $question->id) }}"
                                                        class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded me-2 mt-2">Edit</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- <div class="lg:col-span-4 md:col-span-6">
                    @include('user.pages.includes.aside')
                </div> --}}
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Hero -->
@endsection
