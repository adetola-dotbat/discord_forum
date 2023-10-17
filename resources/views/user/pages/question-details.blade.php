@extends('user.layout.master')

@section('pageName')
    Question
@endsection


@push('style')
    {{-- tiny script --}}
    <script src="https://cdn.tiny.cloud/1/7q9kiyqjbi7cy7ywr85uvbysu31pknq44p5xtw66ats635k5/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/atom-one-dark.min.css">

    <style>
        div.scroll {

            height: 20rem;
            /* overflow-y: auto; */
            text-align: justify;
        }
    </style>
@endpush

@section('content')
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-8 md:col-span-6">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-800">
                        <h5 class="text-lg font-semibold">{{ Str::title($question->title) }}</h5>

                        <img src="assets/images/blog/slide02.jpg" class="rounded-md" alt="">

                        <div class="mt-6">
                            <p class="text-slate-400">{!! $question->question !!}</p>
                            <div class=" p-2 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                <pre>
                                    <code style="background-color: transparent; overflow:auto; height: 20rem;">
                                        {!! utf8_encode($question->content) !!}
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>


                    <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                        <h5 class="text-lg font-semibold">1 Answers</h5>
                        @foreach ($answers as $answer)
                            <div class="mt-8">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/images/client/01.jpg') }}"
                                            class="h-11 w-11 rounded-full shadow" alt="">

                                        <div class="ms-3 flex-1">
                                            <a href=""
                                                class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">{{ $answer->user->name }}</a>
                                            <p class="text-sm text-slate-400">{{ $answer->created_at }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                    <pre style="tab-size: 0;">
<code class="" style="background-color: transparent; overflow:auto; height: auto;">
{!! utf8_encode(trim($answer->content)) !!}
</code>
</pre>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                        <h5 class="text-lg font-semibold">Your Answer:</h5>

                        <form action="{{ route('store.answer') }}" method="POST" class="mt-8">
                            @csrf
                            @method('post')
                            <div class="grid grid-cols-1">
                                <div class="mb-5">
                                    <div class="text-start">
                                        <div class="form-icon relative mt-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-message-circle w-4 h-4 absolute top-3 start-4">
                                                <path
                                                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                </path>
                                            </svg>
                                            <input type="hidden" value="{{ $question->id }}" name="question_id">
                                            <textarea style="background-color: transparent" name="content" id="comments" placeholder="Your answer :"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="submit" name="send"
                                class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Send
                                Message</button>
                        </form>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    @include('user.pages.includes.aside')
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Hero -->

    @push('script')
        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight |  numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [{
                        value: 'First.Name',
                        title: 'First Name'
                    },
                    {
                        value: 'Email',
                        title: 'Email'
                    },
                ],
            });
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/highlight.min.js"></script>
        <script>
            hljs.highlightAll();
        </script>
    @endpush
@endsection
