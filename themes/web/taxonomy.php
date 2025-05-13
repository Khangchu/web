<?php
$taxonomy = '';
$term = get_queried_object();

if (is_tax('tintuc')) {
    get_template_part('taxnomy/taxnomy', 'tintuc');
}
elseif (is_tax('tuyensinh')) {
    get_template_part('taxnomy/taxnomy', 'tuyensinh');
}
elseif (is_tax('sinhvien')) {
    get_template_part('taxnomy/taxnomy', 'sinhvien');
}
elseif (is_tax('daotao')) {
    get_template_part('taxnomy/taxnomy', 'daotao');
}
elseif ($term && $term->slug === 'phong-thi-nghiem-nghien-cuu') {
    get_template_part('taxnomy/taxnomy', 'phong-thi-nghiem-nghien-cuu');
}
elseif (is_tax('nghiencuu')) {
    get_template_part('taxnomy/taxnomy', 'nghiencuu');
}
else {
    get_template_part('post/single', 'default');
}
?>
