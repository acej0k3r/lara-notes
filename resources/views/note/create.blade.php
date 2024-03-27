<x-app-layout>
    <!-- Create route is a get route however itll post to another route -->
    <div class="note-container single-note">
        <h1>Create new note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="note">
            {{-- cross site request forgery --}}
            @csrf
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here"></textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button" type="submit">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
