<x-layout>
    <h1>Applications for {{ $listing->title }}</h1>
    <ul>
        @forelse ($applications as $application)
            <li>
                <strong>Name:</strong> {{ $application->name }} <br>
                <strong>Email:</strong> {{ $application->email }} <br>
                <strong>LinkedIn:</strong> <a href="{{ $application->linkedin }}" target="_blank">Profile</a> <br>
                <strong>GitHub:</strong> <a href="{{ $application->github }}" target="_blank">Profile</a> <br>
                <strong>Portfolio:</strong> <a href="{{ $application->portfolio }}" target="_blank">Portfolio</a> <br>
                <strong>CV:</strong> <a href="{{ asset('storage/' . $application->CV) }}" download>Download CV</a> <br>
            </li>
        @empty
            <li>No applications found.</li>
        @endforelse
    </ul>
</x-layout>
