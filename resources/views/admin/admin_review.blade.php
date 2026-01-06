<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Review | Eyenix Eye Care</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- Owl Carousel CSS - THIS WAS MISSING! -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Animate CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('admin/dist/css/navbar.css') }}">

    <style>
        /* =========================
   REVIEW SECTION
========================= */
        .review {
            background: #000;
            padding: 80px 0;
        }

        .text-primary {
            color: #99c2ff !important;
        }

        .text-white {
            color: #fff !important;
        }

        .text-light {
            color: #ddd !important;
        }

        .review-carousel .review-item {
            background: #111;
            border-radius: 16px;
            padding: 30px;
            text-align: center;
            color: #fff;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            margin: 10px;
        }

        .review-carousel .review-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(153, 194, 255, 0.25);
        }

        /* Image */
        .review-img {
            width: 90px;
            height: 90px;
            margin: 0 auto 20px;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid #99c2ff;
            background: #333;
        }

        .review-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Text */
        .review-text {
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 20px;
            color: #ddd;
        }

        .review-item h4 {
            margin-bottom: 4px;
            font-weight: 600;
            color: #fff;
        }

        .review-item small {
            color: #aaa;
        }

        /* Stars */
        .stars {
            color: #ffc107;
            margin-top: 10px;
            font-size: 18px;
        }

        /* Owl dots */
        .review-carousel .owl-dots {
            margin-top: 30px;
            text-align: center;
        }

        .review-carousel .owl-dot {
            display: inline-block;
            margin: 0 5px;
        }

        .review-carousel .owl-dot span {
            width: 12px;
            height: 12px;
            background: #555;
            display: block;
            border-radius: 50%;
            transition: 0.3s;
        }

        .review-carousel .owl-dot.active span {
            background: #99c2ff;
            width: 30px;
            border-radius: 20px;
        }

        .rating-stars {
            font-size: 28px;
            color: #555;
            cursor: pointer;
        }

        .rating-stars i {
            transition: color 0.3s;
            margin-right: 6px;
        }

        .rating-stars i.active {
            color: #ffc107;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top eyenix-navbar">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <i class="fas fa-eye"></i> Eyenix Eye Care
            </a>

            <!-- Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#eyenixNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="eyenixNavbar">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.review.index') }}">REVIEW</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#createReviewModal">
                            <i class="fas fa-plus-circle me-1"></i> CREATE REVIEW
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">
                            <i class="fas fa-sign-out-alt me-1"></i> LOGOUT
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- Review Start -->
<div class="container-fluid review py-5">
    <br><br><br>
    <div class="container">
        <div class="text-center mb-5">
            <h4 class="text-primary">Reviews</h4>
            <h1 class="text-white">Customer Reviews</h1>
            <p class="text-light">Honest feedback from our happy customers</p>
        </div>

        <div class="owl-carousel owl-theme review-carousel">

            @foreach ($reviews as $review)
                <div class="review-item">


                    <p class="review-text">
                        {{ $review->message }}
                    </p>

                    <h4>{{ $review->name }}</h4>
                    <small>{{ $review->review }}</small>

                      <!-- STARS (Font Awesome Icons) -->
                    <div class="stars text-warning">
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star{{ $i <= $review->rating ? '' : '-half-alt' }}"></i>
                        @endfor
                    </div>
                     <!-- ACTION BUTTONS -->
        <div class="review-actions d-flex justify-content-center gap-2">

           <!-- EDIT BUTTON -->
           <button
                class="btn btn-sm btn-outline-primary editReviewBtn"
                data-bs-toggle="modal"
                data-bs-target="#editReviewModal"
                data-id="{{ $review->id }}"
                data-name="{{ $review->name }}"
                data-review="{{ $review->review }}"
                data-rating="{{ $review->rating }}"
            >
                <i class="fas fa-edit"></i> Edit
            </button>



            <!-- DELETE -->
            <form action="{{ route('admin.review.destroy', $review->id) }}"
                  method="POST"
                  onsubmit="return confirm('Are you sure you want to delete this review?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger">
                    <i class="fas fa-trash"></i> Delete
                </button>
            </form>

        </div>
                </div>
            @endforeach

        </div>
    </div>
    <br><br><br><br><br><br>
    <!-- EDIT REVIEW MODAL -->
<!-- EDIT REVIEW MODAL -->
<div class="modal fade" id="editReviewModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-white">

            <div class="modal-header">
                <h5 class="modal-title">Edit Review</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <form id="editReviewForm" method="POST">
                @csrf
                @method('PUT')

                <div class="modal-body">

                    <!-- NAME -->
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" id="editName" class="form-control" required>
                    </div>

                    <!-- REVIEW TEXT -->
                    <div class="mb-3">
                        <label>Review</label>
                        <textarea name="review" id="editReview" class="form-control" rows="4" required></textarea>
                    </div>

                    <!-- RATING -->
                    <div class="mb-3">
                        <label>Rating</label>
                        <select name="rating" id="editRating" class="form-select" required>
                            <option value="1">⭐</option>
                            <option value="2">⭐⭐</option>
                            <option value="3">⭐⭐⭐</option>
                            <option value="4">⭐⭐⭐⭐</option>
                            <option value="5">⭐⭐⭐⭐⭐</option>
                        </select>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Update Review
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>


</div>
<!-- Review End -->

    <!-- Create Review Modal -->
    <div class="modal fade" id="createReviewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark text-white rounded-4">

                <div class="modal-header border-0">
                    <h5 class="modal-title text-primary">
                        <i class="fas fa-star me-2"></i> Create Review
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <form id="reviewForm" method="POST" action="{{ route('admin.review.store') }}">
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                        </div>

                        <!-- Review -->
                        <div class="mb-3">
                            <label class="form-label">Review</label>
                            <textarea class="form-control" rows="4" name="review" placeholder="Write your review..."
                                required></textarea>
                        </div>

                        <!-- Rating -->
                        <div class="mb-3">
                            <label class="form-label d-block">Rating</label>

                            <div class="rating-stars">
                                <i class="fas fa-star" data-value="1"></i>
                                <i class="fas fa-star" data-value="2"></i>
                                <i class="fas fa-star" data-value="3"></i>
                                <i class="fas fa-star" data-value="4"></i>
                                <i class="fas fa-star" data-value="5"></i>
                            </div>

                            <!-- Hidden input (required for validation) -->
                            <input type="hidden" name="rating" id="ratingValue" required>
                        </div>

                <div class="modal-footer border-0">
                    <button class="btn btn-outline-light" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary">Submit Review</button>
                </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Initialize Carousel -->
    <script>
       $(document).ready(function () {
    $('.review-carousel').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        dots: true,
        nav: false,
        responsive: {
            0: { items: 1 },
            768: { items: 2 },
            992: { items: 3 }
        },
        onInitialized: attachEditListeners,
        onTranslated: attachEditListeners
    });
});

function attachEditListeners() {
    const updateReviewUrl = "{{ route('admin.review.update', ':id') }}";
    
    $('.editReviewBtn').off('click').on('click', function() {
        const id = $(this).data('id');
        const name = $(this).data('name');
        const review = $(this).data('review');
        const rating = $(this).data('rating');

        $('#editName').val(name);
        $('#editReview').val(review);
        $('#editRating').val(rating);
        $('#editReviewForm').attr('action', updateReviewUrl.replace(':id', id));
    });
}
</script>
    <script>
        document.querySelectorAll('.rating-stars i').forEach(star => {
            star.addEventListener('click', function () {
                let rating = this.getAttribute('data-value');
                document.getElementById('ratingValue').value = rating;

                document.querySelectorAll('.rating-stars i').forEach(s => {
                    s.classList.remove('active');
                });

                for (let i = 0; i < rating; i++) {
                    document.querySelectorAll('.rating-stars i')[i].classList.add('active');
                }
            });
        });
    </script>

</body>

</html>