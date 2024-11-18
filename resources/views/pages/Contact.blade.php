@extends('app')

@section('content')

    <div class="container mt-5">
        <h2 class="text-center mb-4">Contact Us</h2>

        <!-- Contact Form -->
        <form>
            @csrf

            <div class="row">
                <!-- Name Field -->
                <div class="col-md-6 mb-4">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Email Field -->
                <div class="col-md-6 mb-4">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <!-- Message Field -->
            <div class="mb-4">
                <label for="message" class="form-label">Your Message</label>
                <textarea id="message" name="message" class="form-control @error('message') is-invalid @enderror" rows="4" required>{{ old('message') }}</textarea>
                @error('message')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary mb-3">Send Message</button>
            </div>
        </form>
    </div>

@endsection
