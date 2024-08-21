
<div class="bg-zinc-700 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2">
    <img src="{{ $image }}" alt="{{ $title }}" class="mb-4 rounded-md">
    <h3 class="text-xl font-semibold mb-2 text-white">{{ $title }}</h3>
    <p class="text-gray-200">{{ $description }}</p>
    <div class="mt-8 flex justify-center">
        <a href="{{ $githubLink }}" class="text-white">
            <img class="w-20" src="/images/github.png" alt="GitHub">
            <p class="mt-1">Source Code</p>
        </a>
        <a href="{{ $liveSiteLink }}" class="text-white ms-20">
            <img class="w-32" src="/images/eye.png" alt="Live Site">
            <p class="mt-4">View Live Site</p>
        </a>
    </div>
</div>
