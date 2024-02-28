@extends('admin.main.layout')
@section('content')
    <div class="container-xl">
        <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
            <div class="inner">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                        @if (Session::has('msg'))
                            <p class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <form class="settings-form" action="{{ route('testimonials.update', $testimonial->slug) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="setting-input-2" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="setting-input-2" value="{{ $testimonial->title }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="setting-input-2" class="form-label">Designation</label>
                                <input type="text" name="position" class="form-control" id="setting-input-2" value="{{ $testimonial->position }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="setting-input-2" class="form-label">Description</label>
                                <input type="text" name="text" class="form-control" id="setting-input-2" value="{{ $testimonial->text }}" required>
                            </div>

                            <div class="mb-3">
                                @if (!empty($testimonial->image) && File::exists(public_path('storage/TestiImage/' . $testimonial->image)))
                                        <img height="103" width="127"
                                            src="{{ asset('storage/TestiImage/' . $testimonial->image) }}" alt="">
                                        
                                    @else
                                        <img src="{{ asset('User/assets/img/the-japanese-bridge-claude-monet.jpg') }}">
                                    @endif
                            </div>
                            
                            <div id="image-all">
                                <label for="setting-input-3" class="form-label">Image</label>
                                <div class="mb-3 image-field">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            
                            <div class="mt-5">
                                <button type="submit" class="btn app-btn-primary">Save</button>
                            </div>
                        </form>
                    </div><!--//app-card-body-->
                </div>
            </div><!--//inner-->
        </div><!--//app-card-->
    </div><!--//container-fluid-->
@endsection

