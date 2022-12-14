
<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <img src="{{ asset ('img/namelogo.svg') }}" alt="" style="width:400px">
    </div>

    <div class="mt-8 text-2xl">
        Welcomer to your website management
    </div>

    {{-- <div class="mt-6 text-gray-500">
        Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application. Laravel is designed
        to help you build your application using a development environment that is simple, powerful, and enjoyable. We believe
        you should love expressing your creativity through programming, so we have spent time carefully crafting the Laravel
        ecosystem to be a breath of fresh air. We hope you love it.
    </div> --}}
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
        <div class="flex items-center">
            <img src="{{ asset ('img/medicine.svg') }}" alt="">
            {{-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg> --}}
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="/dashboard/drug">Medicine</a></div>
        </div>

    </div>

    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="flex items-center">
            <img src="{{ asset ('img/transaction.svg') }}" alt="" >
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="/dashboard/transactions">Transaction</a></div>
        </div>

    </div>

    <div class="p-6 border-t border-gray-200">
        <div class="flex items-center">
            <img src="{{ asset ('img/users.svg') }}" alt="" >
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="/dashboard/users">Users</a></div>
        </div>

    </div>

    <div class="p-6 border-t border-gray-200 md:border-l">
        <div class="flex items-center">
            <img src="{{ asset ('img/profile.svg') }}" alt="" >
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('profile.show') }}">Profile</a></div>
        </div>
    </div>
</div>
