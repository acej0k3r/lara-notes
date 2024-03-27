<x-layout>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    <div class="note-container single-note">
        <h1>Edit your note</h1>
        <form action="{{ route('note.update', $note) }}" method="POST" class="note">
            <textarea name="body" class="note-body">{{ $note->note }}</textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>
