<form action="<?php echo e(url( app_get_locale(false,false,'/').config('boat.boat_route_prefix') )); ?>" class="form bravo_form d-flex justify-content-start" method="get" onsubmit="return false;">
    <?php $boat_map_search_fields = setting_item_array('boat_map_search_fields');

    $boat_map_search_fields = array_values(\Illuminate\Support\Arr::sort($boat_map_search_fields, function ($value) {
        return $value['position'] ?? 0;
    }));

    ?>
    <?php if(!empty($boat_map_search_fields)): ?>
        <?php $__currentLoopData = $boat_map_search_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php switch($field['field']):
                case ('location'): ?>
                    <?php echo $__env->make('Boat::frontend.layouts.search-map.fields.location', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php break; ?>
                <?php case ('attr'): ?>
                    <?php echo $__env->make('Boat::frontend.layouts.search-map.fields.attr', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php break; ?>
                <?php case ('date'): ?>
                    <?php echo $__env->make('Boat::frontend.layouts.search-map.fields.date', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php break; ?>
                <?php case ('price'): ?>
                    <?php echo $__env->make('Boat::frontend.layouts.search-map.fields.price', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php break; ?>
                <?php case ('advance'): ?>
                    <div class="filter-item filter-simple advance-filters">
                        <div class="form-group">
                            <span class="filter-title toggle-advance-filter" data-target="#advance_filters"><?php echo e(__('More filters')); ?> <i class="fa fa-angle-down"></i></span>
                        </div>
                    </div>
                <?php break; ?>

            <?php endswitch; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>



</form>
<?php /**PATH /home/icinemas/public_html/travel/themes/Mytravel/Boat/Views/frontend/layouts/search-map/form-search-map.blade.php ENDPATH**/ ?>