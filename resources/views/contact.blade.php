<div class="container py-5">
    <h2 class="mb-4 text-center">Contact Us</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Your Name *</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Your Email *</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" name="subject" class="form-control">
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message *</label>
            <textarea name="message" rows="5" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100">Send Message</button>
    </form>
</div>
