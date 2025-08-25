    <div class="container">
        <h2>Details</h2>
        <p><strong>Name</strong> {{ $contact->name }}</p>
        <p><strong>Email</strong> {{ $contact->email }}</p>
        <p><strong>Subject</strong> {{ $contact->subject }}</p>
        <p><strong>Message</strong></p>
        <p>{{ $contact->message }}</p>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back</a>
    </div>
