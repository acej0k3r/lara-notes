<x-layout>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <div class="note-container">
        <a href="{{ route('note.create') }}" class="new-note-btn">
            New Note
        </a>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="note">
                    {{ Str::words($note->note, 30) }}
                </div>
                <div class="note-body">
                    <a href="{{ route('note.show', $note) }}" class="note-edit-button">View</a>
                    <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                    <button class="note-delete-button">
                        Delete
                    </button>
                </div>
            @endforeach

        </div>
    </div>
</x-layout>
