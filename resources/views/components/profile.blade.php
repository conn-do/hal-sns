<x-accordion title="プロフィール">
    <p>{{ $user->name }}</p>
    <p>
        <a href="{{ route('posts.myPage') }}">マイページ</a>
    </p>
</x-accordion>
