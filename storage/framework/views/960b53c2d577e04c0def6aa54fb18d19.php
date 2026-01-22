

<?php $__env->startSection('content'); ?>
<div class="container my-5">

    <h1 class="fw-bold"><?php echo e($recipe->title); ?></h1>
    <p class="text-muted">Category: <?php echo e($recipe->category); ?></p>

    <!-- IMAGE (STATIC FROM public/img USING TITLE) -->
    <div class="recipe-img-wrapper mb-4">
        <img src="<?php echo e(asset('img/' . $recipe->title . '.jpg')); ?>"
             alt="<?php echo e($recipe->title); ?>"
             onerror="this.src='<?php echo e(asset('img/default.jpg')); ?>'">
    </div>

    <h3>Ingredients 🍴</h3>
    <ul>
        <?php $__currentLoopData = explode(',', $recipe->ingredients); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ingredient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e(trim($ingredient)); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h3>Steps 👩‍🍳</h3>
    <ol>
        <?php $__currentLoopData = explode('.', $recipe->steps); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(trim($step) != ''): ?>
                <li><?php echo e(trim($step)); ?>.</li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>

    <a href="<?php echo e(route('recipes.index')); ?>" class="btn btn-primary mt-4">
        ⬅ Back to Recipes
    </a>

</div>

<style>
.recipe-img-wrapper {
    width: 100%;
    max-width: 500px;
    height: 260px;
    background: #f5f5f5;
    overflow: hidden;
    border-radius: 12px;
}

.recipe-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\sem 6\LARAVEL\project\resources\views/recipes/show.blade.php ENDPATH**/ ?>