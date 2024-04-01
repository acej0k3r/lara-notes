<x-app-layout>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <div class="note-container py-12">
        <a href="{{ route('note.create') }}" class="new-note-btn">
            <span class="plus">+<span> New Note
        </a>
        <div class="notes ">
            @foreach ($notes as $note)
                <div class="note">
                    <div class="note-body">
                        {{ Str::words($note->note, 30) }}
                    </div>
                    <div class='note-button-container'>
                        <a href="{{ route('note.show', $note) }}" class="note-edit-buttons">View</a>
                        <a href="{{ route('note.edit', $note) }}" class="note-edit-buttons">Edit</a>
                        <form action="{{ route('note.destroy', $note) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="note-delete-button">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach

        </div>
        {{-- notes is an array so we will be able to paginate it --}}
        <div class='p-6'>
            {{ $notes->links() }}
        </div>


    </div>
</x-app-layout>
