

<?php $__env->startSection('content'); ?>

<div class="contact-bg py-5">
    <div class="container">

        <!-- Page Title -->
        <div class="text-center mb-5">
            <h1 class="fw-bold contact-title">📞 Contact Us</h1>
            <p class="text-muted">
                We’re happy to connect with food lovers like you 🍽️
            </p>
        </div>

        <!-- Success Message -->
        <?php if(session('success')): ?>
            <div class="alert alert-success text-center">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div class="row g-4">

            <!-- Contact Info -->
            <div class="col-md-5">
                <div class="card contact-card shadow-sm p-4 h-100">
                    <h4 class="fw-bold mb-3">📍 Get in Touch</h4>

                    <p>
                        🍽 <strong>NH Recipes</strong><br>
                        A place to discover, cook, and enjoy delicious recipes from around the world.
                    </p>

                    <p>📧 <strong>Email:</strong> nhrecipes@gmail.com</p>
                    <p>📞 <strong>Phone:</strong> +91 98765 43210</p>
                    <p>🏠 <strong>Location:</strong> India</p>

                    <p class="mt-3 text-muted">
                        We usually respond within 24 hours 😊
                    </p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-7">
                <div class="card contact-card shadow-sm p-4">
                    <h4 class="fw-bold mb-3">✉ Send Us a Message</h4>

                    <form method="POST" action="<?php echo e(route('contact.submit')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="4"
                                      placeholder="Write your message here..."></textarea>
                        </div>

                        <button class="btn btn-success btn-send">
                            📩 Send Message
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\sem 6\LARAVEL\project\resources\views/contact.blade.php ENDPATH**/ ?>