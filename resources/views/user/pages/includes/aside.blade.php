<div class="sticky top-20">

    @if (!auth()->user())
        <h5
            class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center">
            Sign In
        </h5>
        <form class="ltr:text-left rtl:text-right mt-8">
            <div class="grid grid-cols-1">
                <div class="mb-4">
                    <label class="font-semibold" for="LoginEmail">Email Address:</label>
                    <input id="LoginEmail" type="email" class="form-input mt-3" placeholder="name@example.com" />
                </div>

                <div class="mb-4">
                    <label class="font-semibold" for="LoginPassword">Password:</label>
                    <input id="LoginPassword" type="password" class="form-input mt-3" placeholder="Password:" />
                </div>

                <div class="flex justify-between mb-4">
                    <label for="RememberMe" class="inline-flex items-center">
                        <input type="checkbox"
                            class="form-checkbox border dark:border-gray-700 rounded text-indigo-600" />
                        <span class="text-slate-400 ms-2">Remember me</span>
                    </label>
                    <p class="text-slate-400 mb-0">
                        <a href="auth-re-password.html" class="text-slate-400">Forgot password ?</a>
                    </p>
                </div>

                <div class="mb-4">
                    <input type="submit"
                        class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full"
                        value="Login / Sign in" />
                </div>

                <div class="text-center">
                    <span class="text-slate-400 me-2">Don't have an account ?</span>
                    <a href="auth-signup.html" class="text-black dark:text-white font-bold inline-block">Sign
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
                <a href="{{ route('questions.tag', $item->slug) }}"
                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">{{ $item->tag }}</a>
            </li>
        @endforeach

    </ul>

    <h5
        class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
        Recent Reply
    </h5>
    <div class="flex items-center mt-8">
        <img src="assets/images/blog/06.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="" />

        <div class="ms-3">
            <a href="#" class="font-semibold hover:text-indigo-600">Consultant Business</a>
            <p class="text-sm text-slate-400">1st May 2022</p>
        </div>
    </div>

    <div class="flex items-center mt-4">
        <img src="assets/images/blog/07.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="" />

        <div class="ms-3">
            <a href="#" class="font-semibold hover:text-indigo-600">Grow Your Business</a>
            <p class="text-sm text-slate-400">1st May 2022</p>
        </div>
    </div>

    <div class="flex items-center mt-4">
        <img src="assets/images/blog/08.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="" />

        <div class="ms-3">
            <a href="#" class="font-semibold hover:text-indigo-600">Look On The Glorious
                Balance</a>
            <p class="text-sm text-slate-400">1st May 2022</p>
        </div>
    </div>



</div>
