<?php
$taxonomy = '';
$term = get_queried_object();

if (is_tax('tintuc')) {
    get_template_part('news/taxnomy', 'tintuc');
}
elseif (is_tax('tuyensinh')) {
    get_template_part('Admission/taxnomy', 'tuyensinh');
}
elseif (is_tax('sinhvien')) {
    get_template_part('taxnomy/taxnomy', 'sinhvien');
}
elseif (is_tax('daotao')) {
    get_template_part('training/taxnomy', 'daotao');
}
elseif ($term && $term->slug === 'phong-thi-nghiem-nghien-cuu') {
    get_template_part('examine/taxnomy', 'phong-thi-nghiem-nghien-cuu');
}
elseif (is_tax('nghiencuu')) {
    get_template_part('examine/taxnomy', 'nghiencuu');
}
elseif (is_tax('khoatrungtam')) {
    get_template_part('center-department/taxnomy', 'khoatrungtam');
}
elseif (is_tax('hoptacvahotro')) {
    get_template_part('support/taxnomy', 'hoptacvahotro');
}
elseif (is_tax('sinhvien')) {
    get_template_part('taxnomy/taxnomy','sinhvien');
}
elseif (is_tax('cuusinhvien')) {
    get_template_part('alumni/taxnomy', 'cuusinhvien');
}
elseif ($term && $term->slug === 'truong-dien-dien-tu') {
    get_template_part('TeamofOfficials/taxnomy', 'truongdiendientu');
}
elseif (is_tax('doingucanbo')) {
    get_template_part('TeamofOfficials/taxnomy', 'doi-ngu-can-bo');
}
else {
    get_template_part('post/single', 'default');
}
?>
