<x-app-layout>
    <div class="note-container single-note">
        <h1>Edit your note</h1>
        <form action="{{ route('note.update', $note) }}" method="POST" class="note">
            <textarea name="body" class="note-body">{{ $note->note }}</textarea>
            @csrf
            {{-- method PUT will override the method POST Because the note.update route is a put route and post method will fail --}}
            @method('PUT')
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
