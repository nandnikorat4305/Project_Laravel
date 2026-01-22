

<?php $__env->startSection('content'); ?>
<div class="container my-5">

    <!-- Add Recipe Button -->
    <?php if(session()->has('logged_in')): ?>
        <a href="/recipes/create" class="btn btn-success">➕ Add Recipe</a>
    <?php endif; ?>

    <!-- Page Title -->
    <div class="text-center mb-4">
        <h1 class="fw-bold">🍽 Our Recipes</h1>
        <p class="text-muted">Fresh & tasty recipes</p>
    </div>

    <!-- Search & Filter -->
    <form method="GET" class="row mb-4">
        <div class="col-md-5">
            <input type="text"
                   name="search"
                   class="form-control"
                   value="<?php echo e(request('search')); ?>"
                   placeholder="Search recipes...">
        </div>

        <div class="col-md-4">
            <select name="category" class="form-select">
                <option value="">All Categories</option>
                <option value="Italian" <?php echo e(request('category')=='Italian'?'selected':''); ?>>Italian</option>
                <option value="Mexican" <?php echo e(request('category')=='Mexican'?'selected':''); ?>>Mexican</option>
                <option value="South Indian" <?php echo e(request('category')=='South Indian'?'selected':''); ?>>South Indian</option>
                <option value="Gujarati" <?php echo e(request('category')=='Gujarati'?'selected':''); ?>>Gujarati</option>
                <option value="Dessert" <?php echo e(request('category')=='Dessert'?'selected':''); ?>>Dessert</option>
            </select>
        </div>

        <div class="col-md-3">
            <button class="btn btn-primary w-100">Search</button>
        </div>
    </form>

    <?php
        use Illuminate\Support\Str;

        $categories = [
            'Italian' => '🍝',
            'Mexican' => '🌮',
            'South Indian' => '🍛',
            'Gujarati' => '🥘',
            'Dessert' => '🍰'
        ];

        $groupedRecipes = $recipes->groupBy('category');
    ?>

    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php if(isset($groupedRecipes[$category])): ?>
            <h3 class="mt-5 mb-3 fw-bold">
                <?php echo e($icon); ?> <?php echo e($category); ?> Recipes
            </h3>

            <div class="row">
                <?php $__currentLoopData = $groupedRecipes[$category]->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card recipe-card shadow-sm h-100">

                            <!-- IMAGE FROM public/img USING TITLE -->
                            <div class="recipe-img-wrapper">
                                <img src="<?php echo e(asset('img/' . $recipe->title . '.jpg')); ?>"
                                     alt="<?php echo e($recipe->title); ?>"
                                     onerror="this.src='<?php echo e(asset('img/default.jpg')); ?>'">
                            </div>

                            <div class="card-body text-center">
                                <span class="badge
                                    <?php echo e($category=='Italian' ? 'bg-success' :
                                       ($category=='Mexican' ? 'bg-warning' :
                                       ($category=='South Indian' ? 'bg-info' :
                                       ($category=='Gujarati' ? 'bg-secondary' : 'bg-danger')))); ?>">
                                    <?php echo e($category); ?>

                                </span>

                                <h5 class="mt-2"><?php echo e($recipe->title); ?></h5>

                                <a href="<?php echo e(route('recipes.show', $recipe->id)); ?>"
                                   class="btn btn-primary w-100 mt-2">
                                    View Recipe
                                </a>
                            </div>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<!-- STYLES -->
<style>
.recipe-card {
    transition: all 0.3s ease;
    border-radius: 12px;
    overflow: hidden;
}

.recipe-card:hover {
    transform: translateY(-5px) scale(1.03);
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}

.recipe-img-wrapper {
    width: 100%;
    height: 180px; /* FIXED IMAGE HEIGHT */
    overflow: hidden;
    background: #f5f5f5;
}

.recipe-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* PERFECT IMAGE FIT */
    display: block;
}
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\sem 6\LARAVEL\project\resources\views/recipes/index.blade.php ENDPATH**/ ?>