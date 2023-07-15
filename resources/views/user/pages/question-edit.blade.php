@extends('user.layout.master')

@section('pageName')
    Send your question
@endsection

@push('style')
    {{-- tiny script --}}
    <script src="https://cdn.tiny.cloud/1/7q9kiyqjbi7cy7ywr85uvbysu31pknq44p5xtw66ats635k5/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
@endpush
@section('content')
    <!-- Start -->
    <section class="relative md:pb-24 pb-16">
        <!--end container-->
        <div class="container md:mt-24 mt-16">
            <div class="grid lg:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-8">
                    <div
                        class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 rounded-md border border-gray-100 dark:border-slate-800">
                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                            <h5 class="text-lg font-semibold mb-4">Personal Detail :</h5>
                            <form action="{{ route('update.question', $question->id) }}" method="POST">
                                @csrf
                                @method('post')
                                <div style="padding-bottom: 2rem">
                                    <label class="form-label font-medium">Title: <span class="text-red-600">*</span></label>
                                    <p class="italic">Be specific and imagine you’re asking a question to another
                                        person.</p>
                                    <div class="form-icon relative mt-2">
                                        <input type="text" class="form-input" placeholder="Title:" id="title"
                                            name="title" value="{{ $question->title }}" required="">
                                    </div>
                                </div>
                                <div style="padding-bottom: 2rem">
                                    <label class="form-label font-medium">What are the details of your problem?: <span
                                            class="text-red-600">*</span></label>
                                    <p class="italic">Introduce the problem and expand on what you put in the title. Minimum
                                        20 characters.
                                    </p>
                                    <div class="form-icon relative mt-2">
                                        <textarea class="form-input" name="question" id="" cols="30" rows="10">{{ $question->question }}</textarea>
                                    </div>
                                </div>

                                <div style="padding-bottom: 2rem">
                                    <label class="form-label font-medium">What did you try and what were you expecting?
                                        <span class="text-red-600">*</span></label>
                                    <p class="italic">Describe what you tried, what you expected to happen, and what
                                        actually resulted. Minimum 20 characters.
                                    </p>
                                    <div class="form-icon relative mt-2">
                                        <textarea class="form-input" name="content" id="" cols="30" rows="10">{{ $question->content }}</textarea>
                                    </div>
                                </div>

                                <input type="submit" id="submit" name="send"
                                    class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5"
                                    value="Save Changes">
                            </form>
                            <!--end form-->
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    @include('user.pages.includes.aside')
                </div>
            </div>
        </div>

        {{-- @include('user.pages.includes.aside') --}}
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

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
    @endpush
@endsection
