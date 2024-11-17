@extends('app')
@section('content')

<div class="container mt-3">
    <div class="text-center mb-4"><strong>Categories</strong></div>

    <div class="mb-4">
        @foreach($categories as $category)
        <span class="badge bg-primary me-2" 
              onclick="getCoursesByCategory({{ $category->id }}, '{{ $category->name }}')">
            {{ $category->name }}
        </span>
        @endforeach 
    </div>

    <div class="text-center mb-4">
        <h4>Selected Category: <span id="selected-category">All</span></h4>
    </div>
</div>

<div id="course-list" class="row"></div>
<div id="pagination" class="text-center mt-4"></div>

<script>
    function fetchCourses(url = 'courses/') {
        fetch(url)
            .then(response => response.json())
            .then(data => {
                renderCourses(data);
            });
    }

    function getCoursesByCategory(categoryId, categoryName) {
        fetch(`/courses/${categoryId}`)
            .then(response => response.json())
            .then(data => {
                renderCourses(data);

                const selectedCategoryElement = document.getElementById('selected-category');
                if (selectedCategoryElement) {
                    selectedCategoryElement.textContent = categoryName;
                }
            });
    }

    function renderCourses(data) {
        let courseList = document.getElementById('course-list');
        let pagination = document.getElementById('pagination');

        if (!courseList || !pagination) {
            console.error("Required DOM elements not found!");
            return;
        }

        courseList.innerHTML = '';
        data.courses.forEach(course => {
            let courseElement = `
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src=${course.image} class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">${course.title}</h5>
                            <p class="card-text">${course.description}</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">${course.title}</li>
                                <li class="list-group-item"><b><i>Price:</i></b> ₹${course.price}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            `;
            courseList.innerHTML += courseElement;
        });

        pagination.innerHTML = '';
        if (data.prev_page_url) {
            pagination.innerHTML += `<button class="btn btn-primary me-2" onclick="fetchCourses('${data.prev_page_url}')">Previous</button>`;
        }

        pagination.innerHTML += `<span>Page ${data.current_page} of ${data.last_page}</span>`;

        if (data.next_page_url) {
            pagination.innerHTML += `<button class="btn btn-primary ms-2" onclick="fetchCourses('${data.next_page_url}')">Next</button>`;
        }
    }

    window.onload = function() {
        fetchCourses();
    };
</script>

@endsection
