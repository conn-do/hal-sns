<x-accordion title="プロフィール">
    <p>
        <a href="{{ route('posts.myPage') }}">
            {{ $user->name }}
        </a>
    </p>
</x-accordion>
